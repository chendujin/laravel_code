<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Member;

class MemberController extends Controller
{
    public function info()
    {
        // return view('member/info', [
        //     'name' => 'Thomas',
        //     'age' => 24
        // ]);
        // return Member::getMember();
        // 查
        $students = DB::select('select * from link_user');
        dd($students);
    }
}