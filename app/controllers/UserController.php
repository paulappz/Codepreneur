<?php

class UserController extends BaseController
{
    public function store() {
        $input = Input::all();
        $validator = validate($input);
        
        if($validator->fails()) {
            return Response::json($validator->messages(), 406);
        }
        User::create($input);
        return Response::json("User was registered successfully", 201);
    }

    public function validate(array $input) {
        return Validator::make($input, [
            // TODO: validation
        ]);
    }
}