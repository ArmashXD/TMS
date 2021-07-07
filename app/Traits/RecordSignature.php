<?php 

trait RecordSignature
{
    protected static function boot()
    {
        parent::boot();

        static::updating(function ($model) {

            $model->user_id = auth()->id();
        });

        static::creating(function ($model) {

            $model->created_by = auth()->id();
        });

    }

}