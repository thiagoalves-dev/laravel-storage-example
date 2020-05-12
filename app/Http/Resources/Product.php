<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class Product extends JsonResource
{
    public function toArray($request)
    {
        return [
            'id'         => $this->getKey(),
            'name'       => $this->name,
            'price'      => $this->price,
            'price_show' => number_format($this->price, 2, ',', '.'),
            'create_at'  => $this->created_at->format('d/m/Y H:i:s'),
            'category'   => $this->when($request->get('include_category'), function () {
                return new Category($this->category);
            }),
        ];
    }
}
