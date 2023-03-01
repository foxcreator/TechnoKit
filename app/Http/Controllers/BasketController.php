<?php

namespace App\Http\Controllers;

use App\Models\Order;
use App\Models\Product;
use App\Notifications\TelegramNotificationsChannelForAdmin;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class BasketController extends Controller
{
    public function basket()
    {
        $orderId = session('orderId');
        if (!is_null($orderId)) {
            $order = Order::findOrFail($orderId);
            $products = $order->products;
        }else{
            $order = null;
            $products = null;
        }
        return view('basket', compact('order', 'products'));
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
            $request->novaposhta,

        );

//        $productName = Product::find($productId)->name;
//        $product = Product::findOrFail($productId);

        if($success) {
            session()->flash('success', 'Заказ выполнен успешно');
            $telegramNotification = new TelegramNotificationsChannelForAdmin($request);
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
        session()->flash('success', 'Товар ' . $product->name . ' доданий до кошика');

        return redirect()->route('basket-place', ['productId' => $productId, 'product' => $product]);
    }



    public function basketRemove($productId)
    {
        $orderId = session('orderId');

        if (is_null($orderId)) {
            return redirect()->route('basket');
        }

        $order = Order::find($orderId);

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
