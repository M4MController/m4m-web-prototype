<?php

namespace App\Http\Controllers;

use App\Object;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;


class OfficeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('office', [
            'user' => User::getUserData(Auth::id()),
            'objects' => $this->controllerApi(\Session::get('user_session_auth')),
//            'objects' => Object::where('user_id', Auth::id())->get()
        ]);
    }
    public function update()
    {
        $result = view('controllerEntity', [
            'objects' => $this->controllerApi(\Session::get('user_session_auth'))
        ])->render();
        return response()->json([
            'result' => $result
        ]);
    }

    /**
     * @param $user_session
     * @return mixed
     */
    private function controllerApi($user_session) {
        $controllers = $this->controllerAllApi(\Session::get('user_session_auth'));
        foreach($controllers as $key=>$value){
            $url = "http://194.58.120.31:8081/controller/$value[id]/get_controller_stats";
            $ch = curl_init();
            curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
            curl_setopt($ch, CURLOPT_COOKIE, "user_session=$user_session");
            curl_setopt($ch, CURLOPT_URL,$url);
            $result=curl_exec($ch);
            curl_close($ch);
            $res = json_decode($result, true);
            if ($res['code']==0) {
                $result = [];
                $res['message']['name'] = $value['name'];
                $result[]=$res['message'];
//                dump($result);
            }
        }
        if (!empty($result))
            return $result;
        return null;
    }

    private function controllerAllApi($user_session) {
        $url = "http://194.58.120.31:8081/controller/get_user_controllers";
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch, CURLOPT_COOKIE, "user_session=$user_session");
        curl_setopt($ch, CURLOPT_URL,$url);
        $result=curl_exec($ch);
        curl_close($ch);
        $res = json_decode($result, true);
        if ($res['code']==0) {
//            dump($res['message']);
            return $res['message'];
        }
        return false;
    }
}
