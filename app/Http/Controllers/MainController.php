<?php
/**
 * User: krch_Vova
 * Date: 15.05.2017
 */

namespace App\Http\Controllers;

use App\Object;
use Illuminate\Support\Facades\Auth;

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
            'object' => Object::find($id)
        ]);
    }

}