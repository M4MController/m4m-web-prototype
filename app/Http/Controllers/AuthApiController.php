<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class AuthApiController extends Controller
{
    public function authenticate_get()
    {
        return redirect('/');
    }

    /**
     * @param Request $request
     * @return \Illuminate\Http\JsonResponse
     */
    public function authenticateCheck(Request $request)
    {
        if($request->ajax()){
            $validator = \Validator::make($request->all(), [
                'email' => 'required',
                'password' => 'required',
            ]);
            if (!$validator->fails()) {
                $email = $request->request->get('email');
                $password = $request->request->get('password');
                if ($this->authApi($email, $password) == "200") {
                    if (Auth::attempt(['email' => $email, 'password' => $password])) {
                        return response()->json([
                            'error' => '0'
                        ]);
                    }
                }

            }
        }
        return response()->json([
            'error' => '1'
        ]);
    }

    /**
     * @param $email
     * @param $password
     * @return string
     */
    private function authApi($email, $password) {
        $url = "https://app.swaggerhub.com/apis/wolf1996/iot_api/1.0.0/user/sign_in";

        $ch = curl_init($url);
        curl_setopt($ch, CURLOPT_HEADER, false);
        curl_setopt($ch, CURLOPT_NOBODY  , true);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch, CURLOPT_POST, 1);
        curl_setopt($ch, CURLOPT_POSTFIELDS,
            "e_mail=" . $email . "&password=". $password);
        curl_exec($ch);
        $httpcode = curl_getinfo($ch, CURLINFO_HTTP_CODE);
        curl_close($ch);

        return (string)$httpcode;
    }
}