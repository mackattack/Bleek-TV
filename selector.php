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
    <link href="selector.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="slider/engine0/style.css" />
    <script src="resource/js/jquery.min.js"></script>
    <script src="resource/js/bootstrap.min.js"></script>
    <script type="text/javascript" src="slider/engine0/wowslider.js"></script>
    <script type="text/javascript" src="slider/engine0/script.js"></script>
  </head>

  <body>
    <?php
    $shownumber = $_POST['shownumber'];
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
        <h1 class="networks">Seasons</h1>
        <form method="post" action="episodes.php">
    <input type="hidden" name="seasonnumber" value="12">
    <input type="hidden" name="shownumber" value="1">
    <input type="image" name="season12" id="familyguy" src="resource/img/FOX/familyguy.jpg" style= "width:220px;height:124px" value="submit" />
    <p class="seasonheader">Season 12</p>
    </form>
    <form method="post" action="episodes.php">
    <input type="hidden" name="seasonnumber" value="13">
    <input type="hidden" name="shownumber" value="1">
    <input type="image" name="season13" id="familyguy" src="resource/img/FOX/familyguy.jpg" style= "width:220px;height:124px" value="submit" />
    <p class="seasonheader">Season 13</p>
    </form>
      </div>
    </div>
    <script type="text/javascript">
    shownum = <?php echo $shownumber; ?>;
    var familyguy = document.getElementById("familyguy");
    familyguy.className = "invisible";
    if (shownum == 1) {
      familyguy.className = "visible";
    }
    </script>
  </body>
