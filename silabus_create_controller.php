<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\silabus_data;
use App\Models\silabus_data2;

class silabus_create_controller extends Controller
{
    function DataTableIndex(){
        return view('silabus_create');
    }
    function DataInsert(Request $request){
        $degree = $request->input('degree');
        $branch = $request->input('branch');
        $specialty = $request->input('specialty');
        $program = $request->input('program');
        $status = $request->input('status');
        $form = $request->input('form');
        $year = $request->input('year');
        $amount = $request->input('amount');
        $exams = $request->input('exams');
        $schedule = $request->input('schedule');
        $language = $request->input('language');
        $professors = $request->input('professors');
        $placement = $request->input('placement');

        $isInsertSuccress = silabus_data::insert(['degree' => $degree,
            'branch' => $branch,
            'specialty' => $specialty,
            'program' => $program,
            'status' => $status,
            'form' => $form,
            'year' => $year,
            'amount' => $amount,
            'exams' => $exams,
            'schedule' => $schedule,
            'language' => $language,
            'professors' => $professors,
            'placement' => $placement
        ]);
        if($isInsertSuccress) return view('silabus_create');
        else echo '<h1>Помилка: дані не потрапили в базу даних</h1>';
    }

    function DataInsert2(Request $request){
        $discrbtion = $request->input('discrbtion');
        $reqvisits = $request->input('reqvisits');
        $content = $request->input('content');
        $materials = $request->input('materials');

        $isInsertSuccress = silabus_data2::insert(['discrbtion' => $discrbtion,
            'reqvisits' => $reqvisits,
            'content' => $content,
            'materials' => $materials,
        ]);
        if($isInsertSuccress) return view('silabus_create');
        else echo '<h1>Помилка: дані не потрапили в базу даних</h1>';
    }
}
