<?php

class PlaceController extends BaseController {
    function index() {
        return Response::json( 
            Place::with('views')->get()
        );
    }

    function show($id) {
        return Response::json(
            Place::with('views')->find($id)
        );
    }
}