<?php

namespace App\Models\Settings;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Cache;

class SettingType extends Model {

    protected $id = 'id';
    protected $name = 'name';

    public function rules(){
        return [
            'id' => 'int',
            'name' => 'string'
        ];
    }

    public function getAllTypes($type_id, $name)
    {
        return Cache::get("type_id");
    }

}

