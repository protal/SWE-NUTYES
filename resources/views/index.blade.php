<html lang="en">
<head>
  <title>NutYes</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
  <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Tangerine">
    <style>
      .w3-tangerine
      {
        font-family: "Tangerine", serif;
      }
</style>
  <meta name="viewport" content="width=device-width, initial-scale=1">
	g
	<script src="{{asset('js/jquery.min.js')}}"></script>
    <link  href="{{asset('css/bootstrap.min.css')}}" rel="stylesheet">

  <script src="{{asset('js/bootstrap.min.js')}}"></script>
</head>
<body background="../mystory/image/pg4.jpg" bgproperties="fixed">
  <nav class="navbar navbar-inverse">
    <div class="container-fluid">
      <div class="navbar-header">
        <a class="navbar-brand" href="#">NutYes</a>
      </div>
      <ul class="nav navbar-nav">
        <li class="active"><a href="home.html">Home</a></li>
        <li class="dropdown">
          <a class="dropdown-toggle" data-toggle="dropdown" href="#">Mystory
          <span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="Mystoryeditionn.html"><span class=""></span>Me</a></li>
            <li><a href="">xx</a></li>
          </ul>
        </li>
      </ul>
      <ul class="nav navbar-nav navbar-right">
     <li><a href="#"><span class="glyphicon glyphicon-user"></span> Contact</a></li>
     <li><a href="#"><span class="glyphicon glyphicon-envelope"></span>Email</a></li>
   </ul>
    </div>
  </nav>
<div class="text-center">
  <div class="w3-container w3-tangerine">
  <p class="w3-jumbo">You and Me</p>
  <p class="w3-xxxlarge">Find someone</p>
  </div>
</div>
  <center><div class="w3-card-4" style="width:50%">
   <header class="w3-container w3-light-grey">
     <form class="" action="{{url('match')}}" method="get">
       <h3>Profile</h3>
       First name: <input type="text" name="firstname"><br><br>
       Last name: <input type="text" name="lastname"><br><br>
       Name: <input type="text" name="name"><br><br>
       Sex:   <input type="radio" name="sex" value="male"> Male
       <input type="radio" name="sex" value="female"> Female<br><br>

       Age:<input type="text" name="age"><br><br>
        Food: <select name="food">
            <option >Thai</option>
            <option >Japan</option>
            <option >Eng</option>
            <option >Italian</option>
          </select><br><br>
        Music: <select name="music">
            <option >pop</option>
            <option >rock</option>
            <option >jazz</option>
            <option >clasic</option>
          </select><br><br>
        Pet: <select name="pet">
            <option >Dog</option>
            <option >Cat</option>
            <option >Bird</option>
            <option >Spider</option>
          </select><br><br>
        Work: <select name="work">
              <option >president</option>
              <option >engineer</option>
              <option >teacher</option>
              <option >student</option>
            </select><br><br>
        Lifestyle: <select name="lifestyle">
            <option >Day</option>
            <option >Night</option>
          </select><br><br>
          <button type="submit" class="w3-button w3-block w3-dark-grey">Submit</button>
     </form>
   </header>

 </div></center>

<div>
</body>
</html>
