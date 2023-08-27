<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Symfony\Component\Process\Process;
use Symfony\Component\Process\Exception\ProcessFailedException;
use Illuminate\Support\Facades\Http;

class PythonController extends Controller
{
    public function callPythonScript(Request $request)
    {
        $name = $request->name;
        $age = $request->age;
        $output = shell_exec("python C:\laragon\www\laravel-python\python-script\hello.py \"$name\" \"$age\""); // change this path
        return response()->json(trim($output));
//        var_dump($output);  // error checking
  }

}
