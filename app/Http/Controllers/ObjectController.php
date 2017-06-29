<?php
/**
 * User: krch_Vova
 * Date: 16.05.2017
 */

namespace App\Http\Controllers;

use App\Object;
use Illuminate\Support\Facades\Auth;
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

    public function saveController(Request $request)
    {

        $object = new Object();
        $object->user_id = Auth::id();
        $object->name = $request->input('m4mEntityName');
        $object->device_id = $request->input('deviceId');
        $object->category = $request->input('category');
        $object->mac = $request->input('deviceMac');
        $object->city = $request->input('city');
        $object->save();
    }

}