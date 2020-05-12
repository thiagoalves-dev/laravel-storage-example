<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class Category extends JsonResource
{
    public function toArray($request)
    {
        return [
            'id'       => $this->getKey(),
            'name'     => $this->name,
            'products' => $this->when($request->get('include_products'), function () {
                return Product::collection($this->products);
            }),
        ];
    }
}
