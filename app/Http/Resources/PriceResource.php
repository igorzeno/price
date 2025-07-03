<?php

namespace App\Http\Resources;

use App\Http\Services\CurrencyConvertService;
use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class PriceResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        return [
            'id' => $this->id,
            'title' => $this->title,
            'price' => CurrencyConvertService::getConvertPrice($this->price),
        ];
    }
}
