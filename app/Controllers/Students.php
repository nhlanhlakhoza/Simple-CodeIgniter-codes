<?php

namespace App\Controllers;

use App\Models\StudentModel;

class Students extends BaseController
{
    public function index()
    {
        $model = new StudentModel();

        $data['students'] = $model->findAll();

        return view('students', $data);
    }

    public function create()
    {
        return view('students/create');
    }
}