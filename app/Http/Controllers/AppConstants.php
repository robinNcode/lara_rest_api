<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AppConstants extends Controller
{
    /**
     * @var string
     */
    public $TAB_STUDENT_CLASSES;
    public $TAB_STUDENT_ROLL;

    public function __construct()
    {
        $this->TAB_STUDENT_CLASSES = 'student_classes';
        $this->TAB_STUDENT_ROLL = 'student_roll';
    }

}
