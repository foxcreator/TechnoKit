<?php

namespace App\Http\Controllers;

use App\Models\Order;
use App\Models\Product;
use Illuminate\Http\Request;

class BasketController extends Controller
{
    public function basket()
    {
        $orderId = session('orderId');
        if (!is_null($orderId)) {
            $order = Order::findOrFail($orderId);
        }else{
            $order =null;
        }
        return view('basket', compact('order'));
    }

    public function basketPlace()
    {
        $orderId = session('orderId');
        if (is_null($orderId)) {
            return redirect()->route('index');
        }
        $order = Order::findOrFail($orderId);
        return view('place', compact('order'));
    }

    public function basketConfirm(Request $request)
    {
        $orderId = session('orderId');
        if (is_null($orderId)) {
            return redirect()->route('index');
        }
        $order = Order::findOrFail($orderId);

        $success = $order->saveOrder(
            $request->name,
            $request->phone,
            $request->region,
            $request->city,
            $request->novaposhta
        );

        if($success) {
            session()->flash('success', 'Заказ выполнен успешно');
        } else  {
            session()->flash('warning', 'Что то пошло не так..');
        }

        return redirect()->route('index');
    }

    public function basketAdd($productId)
    {
        $orderId = session('orderId');
        $order = Order::find($orderId);
        if (is_null($order)) {
            $order = Order::create();
            $orderId = $order->id;
            session(['orderId' => $orderId]);
        }

        if ($order->products->contains($productId)){
            $pivotRow = $order->products()->where('product_id', $productId)->first()->pivot;
            $pivotRow->count++;
            $pivotRow->update();
        } else {
            $order->products()->attach($productId);
        }

        $product = Product::find($productId);
        session()->flash('success', 'Товар ' . $product->name . ' добавлен в корзину');

        return redirect()->route('basket');
    }

    public function basketRemove($productId)
    {
        $orderId = session('orderId');

        if (is_null($orderId)) {
            return redirect()->route('basket');
        }

        $order = Order::find($orderId);
//        $order->products()->detach($productId);
//        return redirect()->route('basket');

        if ($order->products->contains($productId)){
            $pivotRow = $order->products()->where('product_id', $productId)->first()->pivot;
                if ($pivotRow->count < 2){
                    $order->products()->detach($productId);
                } else {
                    $pivotRow->count--;
                    $pivotRow->update();
                }

        }

        return redirect()->route('basket');
    }


}
