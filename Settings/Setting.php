<?php

namespace App\Models\Settings;

use Illuminate\Database\Eloquent\Model;

class Setting extends Model
{

    protected $id = 'id';
    protected $type_id = 'type_id';
    protected $name = 'name';
    protected $value = 'value';

    public function rules()
    {
        return [
            'type_id' => 'required|string|int',
            'name' => 'required|string',
            'value' => 'json'
        ];
    }


    public function getType()
    {
        return $this->hasOne(Setting::class);
    }
}

