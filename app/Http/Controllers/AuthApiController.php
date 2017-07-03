<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;

class AuthApiController extends Controller
{
    public function index()
    {
        return redirect('/');
    }

    public function store(Request $request)
    {
        if ($request->isMethod('POST')) {
            $validator = \Validator::make($request->all(), [
                'email' => 'required',
                'password' => 'required',
            ]);
            if (!$validator->fails()) {
                $url = "http://virtserver.swaggerhub.com/wolf1996/iot_api/1.0.0/user/sign_in";
                $ch = curl_init($url);
                curl_setopt($ch, CURLOPT_POST, 1);
                curl_setopt($ch, CURLOPT_POSTFIELDS,
                    "e_mail=" . $request->request->get('email') . "&password=".$request->request->get('password'));
                curl_exec($ch);
                $httpcode = curl_getinfo($ch, CURLINFO_HTTP_CODE);
                curl_close($ch);

                if ($httpcode == "200") {
                    if (Auth::attempt(['email' => 'test@test.ru', 'password' => '123456'])) {
                        // Аутентификация успешна
                        return redirect()->intended('office');
                    }
                } else {
                    return response()->json([
                        'error' => '1'
                    ]);
                }

            } else {
                return response()->json([
                    'error' => '2'
                ]);
            }
        }

    }
}