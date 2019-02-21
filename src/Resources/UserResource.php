<?php

namespace Nddcoder\LaravelSSO\Resources;

use Illuminate\Http\Resources\Json\Resource;

class UserResource extends Resource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request
     * @return array
     */
    public function toArray($request)
    {
        $userIdField = config('laravel-sso.userIdField');
        $fields = [];
        $userFields = array_merge(config('laravel-sso.userFields'), [$userIdField => $userIdField]);

        foreach ($userFields as $key => $value) {
            $fields[$key] = $this->{$value};
        }

        return $fields;
    }
}
