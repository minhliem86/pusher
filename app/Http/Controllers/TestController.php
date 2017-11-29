<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class TestController extends Controller
{
    public function index()
    {
        return view('pages.admin');
    }

    public function postData(Request $request)
    {
//        $data = $request->all();
        $data['mes'] = 'Liem';
        pusher()->trigger('AdminDashboard','skill', 'abc');
        return 'Sent data successful';
    }

    public function showData()
    {
        return view('pages.show');
    }
}
