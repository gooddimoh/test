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

    public function setAllTypes($id, $name)
    {
        Cache::put("id","name");
        Cache::put('type_id', 1);
        Cache::put('name', "name");
        Cache::put('type_id', 1);
        Cache::put('name', "name");
        Cache::put('value', "json");

    }


    public function getAllTypes($type_id, $name)
    {
        return Cache::get("type_id");
    }

}

