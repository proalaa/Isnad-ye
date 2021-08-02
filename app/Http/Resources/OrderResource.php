<?php

namespace App\Http\Resources;

use App\Models\FacilityOrder;
use Illuminate\Http\Resources\Json\JsonResource;
//use Illuminate\Http\Resources\Json\ResourceCollection;

class OrderResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
        $statuses = [0 => 'مغلق' , 1=>'مفتوح' , 2 => 'قيد المشاركة' , 3=>'قيد التصويت'];
        if(request()->exists('simple'))
        {
            return [
                'id' => $this->id,
                'shareable_until' => $this->shareable_until->format('Y-m-d H:i:s'),
                'open_until' => $this->open_until->format('Y-m-d H:i:s'),
                'votable_until' => $this->votable_until->format('Y-m-d H:i:s'),
                'participant_count' => count($this->facilities),
                'status' => $statuses[$this->status ?? 0] ,
                'products' => $this->whenPivotLoaded('facility_order', function (){
                    return json_decode($this->pivot->products) ;
                }),
            ];
        }

        return [
            'id' => $this->id,
            'is_shareable' => $this->is_shareable,
            'shareable_until' => $this->shareable_until->format('Y-m-d H:i:s'),
            'open_until' => $this->open_until->format('Y-m-d H:i:s'),
            'votable_until' => $this->votable_until->format('Y-m-d H:i:s'),
            'participant_count' => count($this->facilities),
            'status' => $statuses[$this->status ?? 0] ,
            'more' =>[
                'created_at'=> $this->created_at->format('Y-m-d H:i:s'),
//            'products' => $this->whenPivotLoaded('facility_order', function (){
//                return json_decode($this->pivot->products) ;
//        }),
                'facilities' => $this->facilities,

            ]

        ];
    }
}
