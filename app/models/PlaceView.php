<?php

class PlaceView extends Eloquent {
    protected $table = 'views';
    protected $fillable = ['name', 'description'];
    protected $hidden = ['place_id'];

    function place() {
        return $this->belongsTo('Place');
    }
}
