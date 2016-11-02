<?php
use Firebase\JWT\JWT;
use Carbon\Carbon;

class AuthController extends BaseController {
    public function store() {
        if (Auth::attempt(Input::only(['email','password'])))
            return Response::json(['message'=>'This user does not exist'], 401);
        
        $now = Carbon::now();
        $token = [
            "authId" => Auth::user()->id,
            "iss" => Config::get('app.iss'),
            "aud" => Config::get('app.aud'),
            "exp" => $now->addHour()->timestamp,
        ];

        $jwt = JWT::encode($token, Config::get('app.key'));
        Session::put('authId', 1);
        return Response::json("User logged in successfully.", 200,[
            'Authorization' => "Bearer {$jwt}"
        ]);
    }

    public function destroy() {
        // destroy JWT token.
        Session::forget('authId');
        return Response::json("User logged out successfully.", 200);
    }
}