<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Test;

class TestController extends Controller
{
    private $test;

    public function __construct(Test $test) {
        $this->test = $test;
    }

    public function index() {
        // return view('test');
        return $this->test->returnTest();
    }
}
