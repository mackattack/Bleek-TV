<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Bleek TV</title>
    <link href="resource/css/bootstrap.min.css" rel="stylesheet">
    <link href="episodes.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="slider/engine0/style.css" />
    <script src="resource/js/jquery.min.js"></script>
    <script src="resource/js/bootstrap.min.js"></script>
    <script type="text/javascript" src="slider/engine0/wowslider.js"></script>
    <script type="text/javascript" src="slider/engine0/script.js"></script>
  </head>

  <body>
    <?php
    $shownumber = $_POST['shownumber'];
    $seasonnumber = $_POST['seasonnumber'];
    ?>
    <div class="navbar navbar-inverse navbar-fixed-top" role="navigation">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target=".navbar-collapse">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="index.html"><font color="#2979D5">Bleek</font></a>
        </div>
        <div class="collapse navbar-collapse">
          <ul class="nav navbar-nav">
            <li><a href="tv.html">TV Shows</a></li>
            <li><a href="movies.html">Movies</a></li>
          </ul>
        </div>
      </div>
      <div class="topbox">
      </div>
    </div>

    <div class="div1">
        <div id="wowslider-container0">
        <div class="ws_shadow"></div>
        <h1 class="networks">Episodes</h1>
        <div id="famguy12">
        <form method="post" action="player.php">
    <input type="hidden" name="episodenumber" value="1">
    <input type="hidden" name="shownumber" value="<?php echo $shownumber; ?>">
    <input type="hidden" name="seasonnumber" value="<?php echo $seasonnumber; ?>">
    <input type="image" name="fam12episode1" src="resource/img/FOX/familyguy.jpg" style= "width:220px;height:124px" value="submit" />
    <p class="seasonheader">Episode 1</p>
    </form>
    <form method="post" action="player.php">
<input type="hidden" name="episodenumber" value="2">
<input type="hidden" name="shownumber" value="<?php echo $shownumber; ?>">
<input type="hidden" name="seasonnumber" value="<?php echo $seasonnumber; ?>">
<input type="image" name="fam12episode2" src="resource/img/FOX/familyguy.jpg" style= "width:220px;height:124px" value="submit" />
<p class="seasonheader">Episode 2</p>
</form>
<form method="post" action="player.php">
<input type="hidden" name="episodenumber" value="3">
<input type="hidden" name="shownumber" value="<?php echo $shownumber; ?>">
<input type="hidden" name="seasonnumber" value="<?php echo $seasonnumber; ?>">
<input type="image" name="fam12episode3" src="resource/img/FOX/familyguy.jpg" style= "width:220px;height:124px" value="submit" />
<p class="seasonheader">Episode 3</p>
</form>
  </div>
  <div id="famguy13">
  <form method="post" action="player.php">
<input type="hidden" name="episodenumber" value="5">
<input type="hidden" name="shownumber" value="<?php echo $shownumber; ?>">
<input type="hidden" name="seasonnumber" value="<?php echo $seasonnumber; ?>">
<input type="image" name="fam13episode5" src="resource/img/FOX/familyguy.jpg" style= "width:220px;height:124px" value="submit" />
<p class="seasonheader">Episode 5</p>
</form>
</div>
      </div>
    </div>
    <script>
    seasonnum = <?php echo $shownumber; ?>;
    shownum = <?php echo $shownumber; ?>;
    var familyguy12 = document.getElementById("famguy12");
    var familyguy13 = document.getElementById("famguy13");
    familyguy12.className = "invisible";
    familyguy13.className = "invisible";
    if (shownum == 1) {
      if (seasonnum == 12) {
      familyguy12.className = "visible";
    }
    if (seasonnum == 13) {
    familyguy13.className = "visible";
  }
    }
    </script>
  </body>
