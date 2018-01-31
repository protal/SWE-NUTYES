<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MatchController extends Controller
{
    //
    public function index(Request $request)
    {

      // $user = ['name' => 'Somthong' , "age" => "23" , "food" => "thai" , "music" => "rock" , "pet" => "cat" , "work" => "engineer" , "lifestyle" => "night" ];
      $user['name'] = $request->input('nicname');
      $user['firstname'] = $request->input('name');
      $user['lastname'] = $request->input('lastname');
      $user['sex'] = $request->input('sex');
      $user['food'] = $request->input('food');
      $user['sex'] = $request->input('sex');
      $user['music'] = $request->input('music');
      $user['pet'] = $request->input('pet');
      $user['work'] = $request->input('work');
      $user['lifestyle'] = $request->input('lifestyle');
      $user['age'] = $request->input('age');

      echo "<h1>NOW USER :</h1><br>";
      echo " name : ".$user['name'];
      echo " firstname : ".$user['firstname'];
      echo " lastname : ".$user['lastname'];
      echo " sex : ".$user['sex'];
      echo " food : ".$user['food'];
      echo " music : ".$user['music'];
      echo " pet : ".$user['pet'];
      echo " work : ".$user['work'];
      echo " lifestyle : ".$user['lifestyle'];
      echo " age : ".$user['age'];
      echo "<br>";

      $users = [
        ['name' => 'Sompong' ,'firstname' => 'Sompong' , 'lastname' => 'thongdee' , "sex" => "female" , "age" => "24" , "food" => "thai" , "music" => "rock" , "pet" => "cat" , "work" => "engineer" , "lifestyle" => "night" ],
        ['name' => 'thu' , 'firstname' => 'Prayut' , 'lastname' => 'chanocha' , "sex" => "male" , "age" => "27" , "food" => "thai" , "music" => "pop" , "pet" => "dog" , "work" => "president" , "lifestyle" => "day" ],
        ['name' => 'pom' , 'firstname' => 'Prawit' ,'lastname' => 'wongsuwan' , "sex" => "male" , "age" => "34" , "food" => "japan" , "music" => "rock" , "pet" => "cat" , "work" => "president" , "lifestyle" => "night" ],
      ];

      // dd($users);
      echo "<h1>MATCH USER :</h1><br>";
      foreach ($users as $u) {
        $sum =0;
        echo " Name : ".$u['name'];
        echo " Firstname : ".$u['firstname'];
        echo " Lastname : ".$u['lastname'];
        echo " Sex : ".$u['sex'];
        echo " Food : ".$u['food'];
        echo " Music : ".$u['music'];
        echo " Pet : ".$u['pet'];
        echo " Work : ".$u['work'];
        echo " Lifestyle : ".$u['lifestyle'];
        echo " Age : ".$u['age'];

        if($u["sex"] != $user["sex"]){
          $sum++;
        }
        if($u["age"] == $user["age"]){
          $sum++;
        }
        if($u["food"] == $user["food"]){
          $sum++;
        }
        if($u["music"] == $user["music"]){
          $sum++;
        }
        if($u["pet"] == $user["pet"]){
          $sum++;
        }
        if($u["work"] == $user["work"]){
          $sum++;
        }
        if($u["lifestyle"] == $user["lifestyle"]){
          $sum++;
        }
      $percent = ($sum/6)*100 ;
      echo "score ". number_format($percent, 2, '.', '')."%<br>";
      }
    }
}
