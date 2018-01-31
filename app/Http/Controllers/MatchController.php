<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MatchController extends Controller
{
    //
    public function index()
    {
      $users = [
        ['name' => 'test' , "age" => "30" ],
        ['name' => 'test1' , "age" => "30" ],
        ['name' => 'test2' , "age" => "30" ],
        ['name' => 'test3' , "age" => "30" ],
        ['name' => 'test4' , "age" => "30" ],
        ['name' => 'test5' , "age" => "30" ],
        ['name' => 'test6' , "age" => "30" ],
      ];

      // dd($users);

      foreach ($users as $u) {
        echo $u['name'];
        echo "<br>";
      }
    }
}
