<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class PostResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
         return [
            'id'=>$this->id,
            'user_id'=>$this->user_id,
            'tag'=>$this->tag,
            'catalog'=>$this->catalog,
            'content'=>$this->content,
            'created_at'=>(string)$this->created_at->format('m/d/Y'),
            
            
        ];
    }
}
