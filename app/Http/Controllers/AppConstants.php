<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AppConstants extends Controller
{
    /**
     * @var string
     */
    public $TAB_STUDENT_CLASSES;

    public function __construct()
    {
        $this->TAB_STUDENT_CLASSES = 'student_classes';
    }
    
}
