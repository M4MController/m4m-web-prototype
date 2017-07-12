<?php
/**
 * User: krch_Vova
 * Date: 16.05.2017
 */

namespace App\Http\Controllers;

use App\Object;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;

class ObjectController extends Controller
{
    public function updateJson()
    {
        $json = file_get_contents('http://194.58.120.31:3000/list/?id_user=0&id_controller=0&id_sensor=1');
        echo json_encode($json);
    }

    public function addController()
    {
        $controller = $_POST['controller'];
        $json = file_get_contents('http://194.58.120.31:3000/list/?id_user=0&id_controller='.$controller.'&id_sensor=1');
        echo json_encode($json);
    }

    /**
     * @param Request $request
     */
    public function saveController(Request $request)
    {
        Object::addObject($request);
    }

    /**
     * @param Request $request
     * @return \Illuminate\Http\JsonResponse
     */
    public function checkController(Request $request)
    {
        if($request->ajax()){
            $validator = \Validator::make($request->all(), [
                'deviceId' => 'required'
            ]);
            if (!$validator->fails()) {
                $idController = $request->request->get('deviceId');
                if ($this->sendApiRequest($idController) == "200") {
                    return response()->json([
                        'error' => '0'
                    ]);
                }
            }
        }

        return response()->json([
            'error' => '1'
        ]);

    }

    /**
     * @param $idController
     * @return string
     */
    private function sendApiRequest($idController)
    {
        // Когда API реализует функционал подогнать под требования
//        $url = "https://app.swaggerhub.com/apis/wolf1996/iot_api/1.0.0/";
//
//        $ch = curl_init($url);
//        curl_setopt($ch, CURLOPT_HEADER, false);
//        curl_setopt($ch, CURLOPT_NOBODY  , true);
//        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
//        curl_setopt($ch, CURLOPT_POST, 1);
//        curl_setopt($ch, CURLOPT_POSTFIELDS,
//            "id_controller=" . $idController);
//        curl_exec($ch);
//        $httpcode = curl_getinfo($ch, CURLINFO_HTTP_CODE);
//        curl_close($ch);

//        return (string)$httpcode;
        return "200";
    }
}