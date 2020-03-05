<?php
/**
 * Notes:
 * Author: BillyShen likeboat@163.com
 * Time: 2020/2/29 11:54 下午
 */

namespace App\Library;


use Illuminate\Database\Eloquent\Model;

class BaseModel extends Model
{
    public function __construct(array $attributes = [])
    {
        parent::__construct($attributes);
        $this->perPage = \Request::get('per_page') ?: 15;
    }

}



