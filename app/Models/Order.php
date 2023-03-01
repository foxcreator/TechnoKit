<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;

    public function products()
    {
        return $this->belongsToMany(Product::class)->withPivot('count')->withTimestamps();
    }

    public function GetFullPrice()
    {
        $sum = 0;
        foreach ($this->products as $product) {
            $sum +=$product->getPriceForCount();
        }
        return $sum;
    }

    public function saveOrder($name, $phone, $region, $city, $novaposhta)
    {
        if ($this->status == 0){
            $this->name = $name;
            $this->phone = $phone;
            $this->region = $region;
            $this->city = $city;
            $this->novaposhta = $novaposhta;
            $this->status = 1;
            $this->save();

            session()->forget('orderId');
            return true;
        } else{
            return false;
        }
    }

    public function productName()
    {
        return $this->product->name;
    }
}
