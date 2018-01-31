<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MatchController extends Controller
{
    //
    public function index(Request $request)
    {

      // $user = ['name' => 'Somthong' , "age" => "23" , "food" => "thai" , "music" => "rock" , "pet" => "cat" , "work" => "engineer" , "lifestyle" => "night" ];
      $user['name'] = $request->input('name');
      $user['firstname'] = $request->input('firstname');
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
      echo "<br> firstname : ".$user['firstname'];
      echo "<br> lastname : ".$user['lastname'];
      echo "<br> sex : ".$user['sex'];
      echo "<br> food : ".$user['food'];
      echo "<br> music : ".$user['music'];
      echo "<br> pet : ".$user['pet'];
      echo "<br> work : ".$user['work'];
      echo "<br> lifestyle : ".$user['lifestyle'];
      echo "<br> age : ".$user['age'];
      echo "<br>";

      $users = [
        ['name' => 'Yood' ,'firstname' => 'Sompong' , 'lastname' => 'thongdee' , "sex" => "Female" , "age" => "24" , "food" => "Thai" , "music" => "rock" , "pet" => "Cat" , "work" => "engineer" , "lifestyle" => "Night" ],
        ['name' => 'Thu' , 'firstname' => 'Prayut' , 'lastname' => 'chanocha' , "sex" => "Male" , "age" => "27" , "food" => "Thai" , "music" => "pop" , "pet" => "Dog" , "work" => "president" , "lifestyle" => "Day" ],
        ['name' => 'Phom' , 'firstname' => 'Prawit' ,'lastname' => 'wongsuwan' , "sex" => "Male" , "age" => "34" , "food" => "Japan" , "music" => "rock" , "pet" => "Cat" , "work" => "president" , "lifestyle" => "Night" ],
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
      echo " score ". number_format($percent, 2, '.', '')."%<br>";
      }
    }
}
