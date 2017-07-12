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
                if ($session_id = $this->authApi($email, $password)) {
                    \Session::put('user_session_auth', $session_id['user_session']);
//                    $request->session()->put('user_session_auth', );
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
        $data = array("e_mail" => $email, "password" => $password);
        $data_string = json_encode($data);

        $ch = curl_init('http://194.58.120.31:8081/user/sign_in');
        curl_setopt($ch, CURLOPT_HEADER, true);
        curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "POST");
        curl_setopt($ch, CURLOPT_POSTFIELDS, $data_string);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch, CURLOPT_HTTPHEADER, array(
                'Content-Type: application/json',
                'Content-Length: ' . strlen($data_string))
        );
        $result = curl_exec($ch);
        preg_match_all('/^Set-Cookie:\s*([^;]*)/mi', $result, $matches);
        $cookies = array();
        foreach($matches[1] as $item) {
            parse_str($item, $cookie);
            $cookies = array_merge($cookies, $cookie);
        }
        if(isset($cookies) && key_exists('user_session',$cookies)){
            return $cookies;
        }
        return false;

    }
}