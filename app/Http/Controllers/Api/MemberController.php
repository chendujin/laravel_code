<?php

namespace App\Http\Controllers\Api;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class MemberController extends Controller
{
    public function info(Request $request)
    {
        $phone = '13728656748';
        // $user = DB::table('link_user')->select('id', 'phone', 'email')->where('phone', $phone)->first();
        // $number = DB::table('link_user')->where('phone', $phone)->value('number');
        // $exists = DB::table('link_user')->where('phone', $phone)->exists();
        // $users = DB::table('link_user')->where('id', '<', 10)->pluck('phone', 'id');
        // $phones = [];
        // DB::table('link_user')->orderBy('id')->where('id', '>', 5)->chunk(20, function ($users) use (&$phones) {
        //     foreach ($users as $user) {
        //         $phones[] = $user->phone;
        //     }
        // });
        // $users = DB::table('link_user')->where('id', '<', 10)->sum('id');
        // dd($users);
        // return (string) Str::uuid();
        // return (string) Str::orderedUuid();
        // $raw = '22. 11. 1968';
        // $start = \DateTime::createFromFormat('d. m. Y', $raw);

        // echo 'Start date: ' . $start->format('Y-m-d') . "\n";
        $secure = $request->ip();
        dd($secure);
    }
}