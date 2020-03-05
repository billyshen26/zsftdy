<?php

namespace App\Http\Resources;

use App\Library\BaseCollection;

class ArticleCollection extends BaseCollection
{

    public $collects = 'App\Http\Resources\ArticleResource';

    /**
     * Transform the resource collection into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
        return parent::toArray($request);
    }
}
