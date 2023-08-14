<?php
include "header_learner.php";
?>

<html>
  <head>
    <style>
    p#difficult, h4#difficult{
      color: #ECECEC;
    }
    p#moderate, h4#moderate{
      color: #242D2D;
    }
    img{
      margin-right: -1rem;
    }
    </style>
  </head>
    <body>
    <div class="container">
      <div class="row">
        <div class="col-sm-12">
              <div class="img-fluid" style="margin:20px; width:1070px; height:asw; opacity:0.8">
              <div class="card-body">
                <h2 class="card-title" style="font-family:Times New Roman"></h2>
                <p class="card-text">BrainUp<br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br></p>
              </div>
            </div>
        </div>
        </div>
        </div>

    <div class="container">
      <div class="row">
        <div class="col-sm-4">
              <div class="card text-black" style="background-color:#DCDDDD; margin:20px">
              <div class="card-body">
                <h4 class="card-title">Easy</h4>
                <img src="easy.png" class="float-right" width="120">
                <p class="card-text">The topics include a range from Inventors to Food Origins.</p>
                <a href="learner_package.php?cat=a" class="btn btn-warning btn-md">
                   <span class="glyphicon glyphicon-arrow-right"></span> Go
                </a>
              </div>
            </div>
        </div>
        <div class="col-sm-4">
            <div class="card text-black" style="background-color:#8CA8A0; margin:20px">
              <div class="card-body">
                <h4 class="card-title" id="moderate">Moderate</h4>
                <img src="moderate.png" class="float-right" width="120">
                <p class="card-text" id= "moderate">The topics include a range from Historical Figures to State Capitals.</p>
                <a href="learner_package.php?cat=b" class="btn btn-warning btn-md">
                   <span class="glyphicon glyphicon-arrow-right"></span> Go
                </a>
              </div>
            </div>
        </div>
        <div class="col-sm-4">
            <div class="card text-black" style="background-color:#496565; margin:20px">
              <div class="card-body">
                <h4 class="card-title" id="difficult">Challenging</h4>
                <img src="difficult.png" class="float-right" width="120">
                <p class="card-text" id="difficult">The topics include a range from Landmarks to Countries.</p>
                <a href="learner_package.php?cat=c" class="btn btn-warning btn-md">
                   <span class="glyphicon glyphicon-arrow-right"></span> Go
                </a>
              </div>
            </div>
        </div>
      </div>
    </div>
    </body>
