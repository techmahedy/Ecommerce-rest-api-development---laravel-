<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\Resource;

class ProductCollection extends Resource {

    public function toArray($request)
    {
        return [

            'name' => $this->name,
            'totalPrice' => round((1-($this->discount/100)) * $this->price,2),
            'discount' => $this->discount,
            'rating' => $this->reviews->count() > 0 ? round($this->reviews->sum('star')/$this->reviews->count(),2) : 'No rating yet',
            'href' => [
               'link' => route('products.show',$this->id)
            ]
        ];
    }
}
