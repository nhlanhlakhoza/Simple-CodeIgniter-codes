<?php

namespace App\Controllers\Api;

use App\Controllers\BaseController;
use App\Models\StudentModel;
use CodeIgniter\API\ResponseTrait;

class Students extends BaseController
{
    use ResponseTrait;

    public function create()
    {
        $model = new StudentModel();

        $data = $this->request->getJSON(true);

        if (!$data) {
            return $this->respond([
                'status' => false,
                'message' => 'Invalid JSON data'
            ], 400);
        }

        if (
            empty($data['name']) ||
            empty($data['email']) ||
            empty($data['course'])
        ) {
            return $this->respond([
                'status' => false,
                'message' => 'Name, email and course are required'
            ], 400);
        }

        $model->insert([
            'name'   => $data['name'],
            'email'  => $data['email'],
            'course' => $data['course']
        ]);

        return $this->respondCreated([
            'status' => true,
            'message' => 'Student created successfully',
            'student' => [
                'id'     => $model->getInsertID(),
                'name'   => $data['name'],
                'email'  => $data['email'],
                'course' => $data['course']
            ]
        ]);
    }
}