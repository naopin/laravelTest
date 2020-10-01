<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class HelloController extends Controller
{
     // 大阪学園コード5
    // 配列
    // public function index() {
    //     $view = view('test');
    //     $view->array = [
    //         'orange'=> 'みかん',
    //         'apple'=> 'りんご'
    //     ]; 
    //     return $view;
    // }


    // 大阪学園コード6
    public function one() {
        $view = view('one');
        $view->sub_title = 'subtitle';

        $users = DB::table('users')->get();
        print_r($users);
        // return $view;
    }
    public function two() {
        $view = view('two');
        $view->sub_title = 'subtitle';
        return $view;
    }
    public function three() {
        $view = view('three');
        $view->sub_title = 'subtitle';
        return $view;
    }
}
