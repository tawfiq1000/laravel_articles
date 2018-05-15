<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class Article extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
        //return parent::toArray();
        return ['id'=>$this->id,
                'title'=>$this->title,
                'body'=>$this->body

        ];



    }
    public function with($request){

        return[
            'version'=>'1.1.1',
            'author'=>'Tawfiq Imam Abir'
        ];
            
    }

}
