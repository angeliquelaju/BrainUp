<html>
  <head>
    <link type="text/css" rel="stylesheet" href="pp%20styles.css" media="screen">
    <style>
    .navbar-brand {
      display: inline-block;
      padding-top: 0.335938rem;
      padding-bottom: 0.335938rem;
      margin-right: 1rem;
      font-size: 2rem;
      line-height: inherit;
      white-space: nowrap;
      font-family: "Nunito Sans", -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, "Helvetica Neue", Arial, sans-serif, "Apple Color Emoji", "Segoe UI Emoji", "Segoe UI Symbol";
      font-weight: 625;
      margin-top: 0.2rem;
      margin-bottom: 0.5rem;
    }
    .nav-link{
      font-family: sans-serif;
      display: block;
      padding: 0.5rem 1rem;
      font-size: 1.1rem;
      font-weight: 550;
      color: black;
      margin-left: 1.7rem;
      margin-right: -1.4rem;
      margin-top: -0.2rem;
    }
    img#logo{
      width: 200
    }
    </style>
  </head>
  <body>
  <nav class="navbar navbar-expand-lg navbar-light bg-light">
      <a class="navbar-brand" href="#"><img src="logo&name.png" id="logo"></a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarColor03" aria-controls="navbarColor01" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarColor03">
        <ul class="navbar-nav mr-auto">
          <li class="nav-item active">
          <a class="nav-link" href= "home.php">Home
            <span class="sr-only">(current)</span>
          </a>
        </li>

        <li class="nav-item active">
          <a class="nav-link" href="article.php">Article</a>
        </li>

        <li class="nav-item active">
          <a class="nav-link" href="dashboard.php">Game</a>
        </li>

        <li class="nav-item active">
          <a class="nav-link" href="feedback.php">Feedback</a>
        </li>

        <li class="nav-item active">
          <a class="nav-link" href="about.php">About</a>
        </li>
      </ul>
    </div>
  </nav>
  </html>



<html>
<head>
<title>BrainUp</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
<link href="home%20layout/styles/layout.css" rel="stylesheet" type="text/css" media="all">
<style>
  a.btn{
    background-color: black;
    border-color: black;
    font-weight: normal;
    font-size: 1rem;
  }
  h3.heading{
    font-size: 5rem;
    font-weight: 700;
    margin-bottom: 20px;
    color:#FFFFFF;
    text-transform: none;
  }
  h5.heading{
    text-transform: none;
  }
  #suggestion{
    color: black;
  }
  p.btmspace-30{
    font-size: 1.2rem;
  }
  p#suggestion{
    color:white;
  }
  a#suggestion:hover, a#suggestion{
    color: white;
  }
  div#game{
    margin-left: 4rem;
  }
  div#about{
    margin-left: 1rem;
  }
</style>
<body id="top">
<div class="wrapper bgded overlay" style="background-image:url('home pic.jpg');">
  <div id="pageintro" class="hoc clear">
    <article>
      <h3 class="heading">BrainUp</h3>
      <footer>
        <ul class="nospace inline pushright">
          <li><a class="btn" href="#main">Skip to Main Content</a></li>
        </ul>
      </footer>
    </article>
  </div>
</div>

<main id="main">
<div class="wrapper row3">
  <main class="hoc container clear">
      <div class="one_half first">
        <h5 class="heading underline font-x2"><br/>Benefits of Brain Games</h5>
        <p class="btmspace-30">Picture this, you have a list of things to grab from another room, but when you walk into the room, you have forgotten everything. Moments like these are prevalent; whether you are in your 20s or 80s, as memory lapses are reactions to common changes to the function and structure of the brain&hellip;</p>
        <footer><a class="btn" href="article.php">Read More</a></footer>
      </div>
      <div class="one_half"><img class="borderedbox inspace-10" src="hp_benefitspic.jpg" alt="Elderlies playing Trivia on their Devices"></img></div>
    </article>
    <div class="clear"></div>
  </main>
</div>

<div class="wrapper row2">
    <main class="hoc container clear">
      <div class="one_third"><img class="borderedbox inspace-10" src="gamepic.jpg" width= "100" alt=""></img></div>
      <div class="one_half" id="game">
      <h5 class="heading underline font-x2"><br/>Game</h5>
      <p class="btmspace-30">This site contains an in-house trivia game for users. There are different difficulties ranging from Easy to Challenging, including various topics such as Landmarks and Historical Figures.</p>
      <footer><a class="btn" href="dashboard.php">Let's Try It</a></footer>
    </div>
  </article>
  <div class="clear"></div>
</main>
</div>

<main class="hoc container clear" style="background-image: url('suggestionbg7.jpg'); background-repeat: no-repeat;">
  <div class="one_half" id="suggestion">
  <h5 class="heading underline font-x2"><br/>Got a suggestion or comment?</h5>
  <p class="btmspace-30" id="suggestion">If there are any suggestions and/or comments that you have, please do not hesitate to fill this form out. It will be greatly appreciated. :)</p>
  <footer><a class="btn" id="suggestion" href="feedback.php">Let's Go</a></footer>
</div>
</article>
<div class="clear"></div>
</main>
</div>

<div class="wrapper row1">
    <main class="hoc container clear">
      <div class="one_quarter first"><img class="borderedbox inspace-10" src="aboutpage.jpg"</img></div>
      <div class="three_quarter" id="about">
      <h5 class="heading underline font-x2"><br/>Learn more about the creator</h5>
      <p class="btmspace-30">Hello! My name is Valerie Laju, and I am the creator of this website. The idea of BrainUp first came about when I decided I wanted to help my grandmother, who's memory is deteriorating, mantain or even&hellip;</p>
      <footer><a class="btn" href="about.php">Read More</a></footer>
      </div>
  </article>
  <div class="clear"></div>
</main>
</div>


<a id="backtotop" href="#top"><i class="fas fa-chevron-up"></i></a>
<!-- JAVASCRIPTS -->
<script src="layout/scripts/jquery.min.js"></script>
<script src="layout/scripts/jquery.backtotop.js"></script>
<script src="layout/scripts/jquery.mobilemenu.js"></script>
</body>
</html>
