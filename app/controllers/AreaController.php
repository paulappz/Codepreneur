<?php

class AreaController extends BaseController {
    function index() {
        return Response::json(
            Area::with('places')->get()
        );
    }

    function show($id) {
        return Response::json(
            Area::with('places')->find($id)
        );
    }
}