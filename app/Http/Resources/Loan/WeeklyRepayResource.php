<?php

namespace App\Http\Resources\Loan;

use Illuminate\Http\Resources\Json\JsonResource;

class WeeklyRepayResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array|\Illuminate\Contracts\Support\Arrayable|\JsonSerializable
     */
    public function toArray($request)
    {
        return [
            'id' => $this->id,
            'payable_amount' => $this->payable_amount
        ];
    }
}
