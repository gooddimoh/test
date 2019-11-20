<?php

namespace app\Helpers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Cache;

class SettingHelper {
    public static function CheckType($type_id){
        $type_id = (int)$type_id;
    }
}
