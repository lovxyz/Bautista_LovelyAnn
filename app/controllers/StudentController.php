<?php
defined('PREVENT_DIRECT_ACCESS') OR exit('No direct script access allowed');

class StudentController extends Controller
{
    public function index()
    {
        $student = [
            'student_id' => 'MCC2024-00063',
            'name' => 'Lovely Ann Bautista',
            'course' => 'BS Information Technology',
            'year' => '3rd Year',
            'section' => 'F2',
            'email' => 'bautistalovelyann3@gmail.com'
        ];

        $this->call->view('student/index', ['student' => $student]);
    }

    public function profile()
{
    $this->call->view('student/profile');
}
}