<?php

namespace App\Models;

use App\Helpers\Util\Helper;
use Illuminate\Support\Facades\Auth;

trait BaseModelTrait
{

    protected static function boot()
    {
        parent::boot();

        static::creating(function ($model) {
            if (Auth::check() && isset($model->created_by)) {
                $model->created_by = Auth::user()->name;
            }
            if (isset($model->tel)) {
                $model->tell = Helper::convertFormatPhone($model->tell);
            }

        });

        static::updating(function ($model) {
            if (Auth::check() && isset($model->updated_by)) {
                $model->updated_by = Auth::user()->name;
            }
            if (isset($model->tell)) {
                $model->tell = Helper::convertFormatPhone($model->tell);
            }
        });


    }


}
