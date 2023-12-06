<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\silabus_data;
use App\Models\silabus_data2;

class silabus_watch_controller extends Controller
{
    function allData()
    {
        return view('silabus_watch', ['dData' =>silabus_data::all()]);
    }
}
