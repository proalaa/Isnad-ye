<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

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
        $statuses = [0 => 'مغلق' , 1 =>'انتظار' , 2 =>'قيد المشاركة' , 3 => 'مفتوح' , 4=>'قيد التصويت', 5 => 'اكتمال'];
        if(request()->exists('simple'))
        {
            return [
                'id' => $this->id,
                'is_shareable' => $this->is_shareable,
                'share_duration' => $this->share_duration,
                'open_duration' => $this->open_duration,
                'vote_duration' => $this->vote_duration,
                'share_end_at' => $this->share_end_at,
                'offering_end_at' => $this->offering_end_at,
                'vote_end_at' => $this->vote_end_at,
                'participant_count' => count($this->facilities),
                'owner_id' => $this->owner_id,
                'status' => $statuses[$this->status ?? 0] ,
                'products' => $this->whenPivotLoaded('facility_order', function (){
                    return $this->pivot->products;
                }),
                'Facility' => $this->whenLoaded('FacilityOrder' , function (){
                    return $this->FacilityOrder;
                })
            ];
        }

        return [
            'id' => $this->id,
            'is_shareable' => $this->is_shareable,
            'share_duration' => $this->share_duration,
            'open_duration' => $this->open_duration,
            'vote_duration' => $this->vote_duration,
            'share_end_at' => $this->share_end_at,
            'offering_end_at' => $this->offering_end_at,
            'posted_at' => $this->posted_at,
            'vote_end_at' => $this->vote_end_at,
            'participant_count' => count($this->facilities),
            'status' => $statuses[$this->status ?? 0] ,
            'owner' => $this->whenLoaded('Owner' , $this->Owner->name),
            'more' =>[
                'created_at'=> $this->created_at->format('Y-m-d H:i:s'),
//            'products' => $this->whenPivotLoaded('facility_order', function (){
//                return json_decode($this->pivot->products) ;
//        }),
                'facilities' => $this->whenLoaded('facilities' , $this->facilities),

            ]

        ];
    }
}
