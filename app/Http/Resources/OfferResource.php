<?php

namespace App\Http\Resources;

use App\Models\Order;
use Illuminate\Http\Resources\Json\JsonResource;

class OfferResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
        $status = [0 => 'مغلق' ,1 => 'انتظار التصويت',2=> 'قيد التصويت', 3 => 'فوز'];
        return [
            'id' => $this->id,
            'order_owner' => $this->whenLoaded('Order', $this->Order->Owner->name),
            'total' => $this->total,
            'products' =>$this->products,
            'Voters' =>$this->whenLoaded('Voters' , $this->Voters),
            'Voters_count' =>$this->whenLoaded('Voters' , count($this->Voters)),
            'status' => $status[$this->status],
            'num_status' =>$this->status,
            'created_at' => $this->created_at,
        ];
    }
}
