<?php
/**
 * User: krch_Vova
 * Date: 15.05.2017
 */

namespace App\Http\Controllers;

use App\Object;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class MainController extends Controller
{


    /**
     * Гланая страница сайта
     *
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector|\Illuminate\View\View1
     */
    public function mainPage()
    {
        if(!Auth::guest()) {
            return redirect('office');
        }
        return view('main');
    }

    public function finance()
    {
        return view('finance');
    }

    public function settings()
    {
        return view('settings');
    }

    public function payment()
    {
        return view('payment');
    }

    public function support()
    {
        return view('support');
    }

    public function entity($id)
    {

        return view('entity', [
//            'object' => Object::find($id)
            'objects' => $this->sensorApi(\Session::get('user_session_auth'),$id)
        ]);
    }

    public function update(Request $request)
    {
        if ($request->input('id')) {
            $result = view('sensorsEntity', [
                'objects' => $this->sensorApi(\Session::get('user_session_auth'), $request->input('id'))
            ])->render();
            return response()->json([
                'result' => $result
            ]);
        }
        return response()->json([
            'result' => false
        ]);
    }
//    /**
//     * @param $user_session
//     * @param int $id
//     * @return mixed
//     */
//    private function sensorsApi($user_session,$id) {
//        $url = "http://194.58.120.31:8081/sensor/$id/view_stats";
//        $ch = curl_init();
//        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
//        curl_setopt($ch, CURLOPT_COOKIE, "user_session=$user_session");
//        curl_setopt($ch, CURLOPT_URL,$url);
//        $result=curl_exec($ch);
//        curl_close($ch);
//        $res = json_decode($result, true);
//        if ($res['code']==0) {
//            return $res['message'];
//        }
//        return false;
//    }

    /**
     * @param $user_session
     * @param $id
     * @return bool
     */
    private function sensorAllApi($user_session,$id) {
        $url = "http://194.58.120.31:8081/controller/$id/get_sensors";
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch, CURLOPT_COOKIE, "user_session=$user_session");
        curl_setopt($ch, CURLOPT_URL,$url);
        $result=curl_exec($ch);
        curl_close($ch);
        $res = json_decode($result, true);
        if ($res['code']==0) {
            return $res['message'];
        }
        return false;
    }

    /**
     * @param $user_session
     * @param $id
     * @return array|mixed|null
     */
    private function sensorApi($user_session,$id) {
        $controllers = $this->sensorAllApi(\Session::get('user_session_auth'),$id);
        foreach($controllers as $key=>$value){
            $url = "http://194.58.120.31:8081/sensor/$value[id]/view_stats";
            $ch = curl_init();
            curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
            curl_setopt($ch, CURLOPT_COOKIE, "user_session=$user_session");
            curl_setopt($ch, CURLOPT_URL,$url);
            $result=curl_exec($ch);
            curl_close($ch);
            $res = json_decode($result, true);
            if ($res['code']==0) {
                $result = [];
                $res['message']['Company'] = $value['Company'];
                $res['message']['controller_id'] = $value['id'];
                $result[]=$res['message'];
//                dump($result);
            }
        }
        if (!empty($result))
            return $result;
        return null;
    }

}