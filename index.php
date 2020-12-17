<!DOCTYPE html>

<html>
    <head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <link rel="preconnect" href="https://fonts.gstatic.com">
  <link href="https://fonts.googleapis.com/css2?family=Mulish&display=swap" rel="stylesheet">  
</head>
    <style>
    *{
        margin:0;
        padding:0;
        font-family: 'Mulish', sans-serif;
        box-sizing: border-box;
    }
    .nav_style{
        background-color: #a29bfe;
    }
    .nav_style a{
        color: white;
    }
    .main_head{
        height: 450px;
        width: 100%;
    }
    .rightside h1{
        font-size: 3rem;

    }
    .corona_rotate img{
        animation: gocorona 2s linear infinite;
    }
    @keyframes gocorona {
        0%{transform: rotate(0);}
       100%{transform: rotate(360deg);}
    }
    .leftside img{
        animation: corona 5s linear infinite;
    }
    @keyframes corona {
        0%{transform: rotate(0);}
       100%{transform: rotate(360deg);}
    }

    </style>
    <body>

<nav class="navbar navbar-expand-lg nav_style p-3">
  <a class="navbar-brand pl-5" href="#">COVID-19</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav ml-auto  pr-5">
      <li class="nav-item active ">
        <a class="nav-link " href="#">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item ">
        <a class="nav-link" href="#">About</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Symptoms</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Prevention</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Contact</a>
      </li>
    </ul>
  </div>
</nav>
<div class="main_head">
    <div class="row w-100 h-100">
        <div class="col-lg-5 col-md-7 col-12 order-lg-1 order-2">
            <div class="leftside w-100 h-100   d-flex justify-content-center align-items-center">
                <img src="unity.png" width="400rem" height="400rem" >
            </div>
        </div>

        <div class="col-lg-7 clo-md-7 col-12 order-lg-2 order-1">
            <div class="rightside w-100 h-100   d-flex justify-content-center align-items-center">
                <h1>Let's Stay Safe & Fight Together Against, <br> Cor<span class="corona_rotate"><img src="cologo.png " width="140" height="140"></span>na Virus.</h1>
            </div>
        </div>
    </div>
</div>

<!-- <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
  <path fill="#0099ff" fill-opacity="1" d="M0,224L48,192C96,160,192,96,288,101.3C384,107,480,181,576,186.7C672
  ,192,768,128,864,101.3C960,75,1056,85,1152,112C1248,139,1344
  ,181,1392,202.7L1440,224L1440,0L1392,0C1344,0,1248,0,1152,0C1056,
  0,960,0,864,0C768,0,672,0,576,0C480,0,384,0,288,0C192,0,96,0,48,0L0,0Z"></path></svg> -->





<section class="corono-update container-fluid">
<div class="my-5">
<h3 class="text-center text-uppercase">COVID-19 LIVE UPDATES OF THE INDIA</h3>
</div>
<div class="table-responsive">
 <table class="table table-bordered table-striped text-center" >
  <tr>
    <th>Lastupdatedtime</th>
    <th>State</th>
    <th>New Daily Patient</th>
    <th>Confirmed</th>
    <th>Active</th>
    <th>Recovered</th>
    <th>Deaths</th>
    
  </tr>


  

</div>
</div>

    
</section>


 

<?php

$data = file_get_contents('https://api.covid19india.org/data.json');
$coranalive = json_decode($data, true);

$statescount = count($coranalive['statewise']);




$i=1;
while($i < $statescount){


    ?>
<tr>
<td><?php echo $coranalive['statewise'][$i]['lastupdatedtime'] ?></td>
<td><?php echo $coranalive['statewise'][$i]['state'] ?></td>
<td><?php echo $coranalive['statewise'][$i]['deltaconfirmed'] ?></td>
<td><?php echo $coranalive['statewise'][$i]['confirmed'] ?></td>
<td><?php echo $coranalive['statewise'][$i]['active'] ?></td>
<td><?php echo $coranalive['statewise'][$i]['recovered'] ?></td>
<td><?php echo $coranalive['statewise'][$i]['deaths'] ?></td>
</tr>

<!-- 
  echo $coranalive['statewise'][$i]['lastupdatedtime'] . "<br>"  ;
  echo $coranalive['statewise'][$i]['state'] . "<br>"  ;
  echo $coranalive['statewise'][$i]['confirmed'] . "<br>"  ;
  echo $coranalive['statewise'][$i]['active'] . "<br>"  ;
  echo $coranalive['statewise'][$i]['recovered'] . "<br>"  ;
  echo $coranalive['statewise'][$i]['deaths'] . "<br>"  ;  -->

  <?php
  $i++;
}


?>



  
</table>
</div>
</div>
    











<!-- <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320"><path fill="#0099ff" fill-opacity="1" d="M0,160L48,165.3C96,171,192,181,288,154.7C384,128,480,64,576,69.3C672,75,768,149,864,154.7C960,160,1056,96,1152,74.7C1248,53,1344,75,1392,85.3L1440,96L1440,320L1392,320C1344,320,1248,320,1152,320C1056,320,960,320,864,320C768,320,672,320,576,320C480,320,384,320,288,320C192,320,96,320,48,320L0,320Z"></path></svg> -->













  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>   
    </body>
</html>