<?php

namespace App\Http\Controllers\Api;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use PHPUnit\Util\Json;

class TaskController extends Controller
{
    public function home()
    {
        return 'Hello, Thomas! Cool!';
    }
    
    public function test()
    {
        return json_encode(['name' => 'Thomas']);
    }
}
