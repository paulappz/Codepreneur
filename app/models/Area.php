<?php

class Area extends Eloquent {
    protected $fillable = ['name', 'description'];

    function places() {
        return $this->hasMany('Place');
    }
}
