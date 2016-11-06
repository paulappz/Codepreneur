<?php

class PlaceView extends Eloquent {
    protected $table = 'views';
    protected $fillable = ['name', 'description'];

    function place() {
        return $this->belongsTo('Place');
    }
}
