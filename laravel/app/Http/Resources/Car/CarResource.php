<?php

namespace App\Http\Resources\Car;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class CarResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        return [
            'Id' => $this->Id,
            'RegNumber' => (string) $this->RegNumber,
            'VIN' => (string) $this->Vin,
            'Model' => (string) $this->Model,
            'Brand' => (string) $this->Brand,
        ];
    }
}
