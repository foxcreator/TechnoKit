<?php

namespace App\Http\Controllers;

use App\Models\Order;
use App\Models\Product;
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

    public function basketConfirm(Request $request, $productId)
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
            $productId
        );

        if($success) {
            session()->flash('success', 'Заказ выполнен успешно');
        } else  {
            session()->flash('warning', 'Что то пошло не так..');
        }

        $chatId = 'TechnoKitAdminOrders'; // замените на ID вашего канала
        $botToken = '6150730200:AAEzMCCQ2C7J36kYp3JIEr9Za7NxAKb9nBQ'; // замените на токен вашего бота

        $message = "Новый заказ!\n\n";
        $message .= "Имя: " . $request->name . "\n";
        $message .= "Телефон: " . $request->phone . "\n";
        $message .= "Регион: " . $request->region . "\n";
        $message .= "Город: " . $request->city . "\n";
        $message .= "Отделение Новой Почты: " . $request->novaposhta . "\n";


        $response = Http::post("https://api.telegram.org/bot{$botToken}/sendMessage", [
            'chat_id' => $chatId,
            'text' => $message,
        ]);

        if ($response->failed()) {
            $error = $response['description'];
            dd($error);
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

        return redirect()->route('basket-place', ['productId' => $productId]);
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
