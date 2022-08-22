<?php

namespace App\Libraries;

class ModelLoader
{
    public static $models = [];

    public static function fetch($model_name)
    {
        if (!isset($models[$model_name])) {
            $format_model_name = '\\App\\Models\\' . $model_name;
            $model = new $format_model_name();
            self::$models[$model_name] = $model;
        }
        return self::$models[$model_name];
    }
}
