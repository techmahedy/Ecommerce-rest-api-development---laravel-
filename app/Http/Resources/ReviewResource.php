<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class ReviewResource extends JsonResource
{
    public function toArray($request)
    {
        return [
            'customer' => $this->customer,
            'body' => $this->review,
            'star' => $this->star,
       ];
    }
}
