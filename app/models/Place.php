<?php

class Place extends Eloquent {
    protected $fillable = [
        'name', 'route', 'fair_price', 'transport_mode',
        'way', 'duration', 'code', 'road',
    ];
    protected $hidden = ['area_id'];

    function area() {
        return $this->belongsTo('Area');
    }

    function views() {
        return $this->hasMany('PlaceView');
    }
}
