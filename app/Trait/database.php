<?php

namespace App\Trait;

use App\Models\Inventary;
use App\Models\Edit;

trait Database
{
    public function persist($class, $data)
    {
     	$model = (isset($data['id'])) ? $class::find($data['id']) : new $class ;

        $model->fill($data);
        $model->save();

	    return $model;
    }
}
