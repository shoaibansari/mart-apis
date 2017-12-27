<?php

namespace App\Http\Resources\User;

use Illuminate\Http\Resources\Json\Resource;

class UserResource extends Resource
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
            'fb_id'        => $this->fb_id,
            'name'         => $this->name,
            'email'        => $this->email,
            'password'     => $this->password,
        ];
    }
}
