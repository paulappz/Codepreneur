<?php

class RootController extends BaseController {
    function index() {
        return View::make('index');
    }
}