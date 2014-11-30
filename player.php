
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
    <link href="player.css" rel="stylesheet">
    <link href ="resource/css/video-js.min.css" rel="stylesheet">
    <script src="resource/js/jquery.min.js"></script>
    <script src="resource/js/bootstrap.min.js"></script>
    <script src="resource/js/video.js"></script>
    <script>videojs.options.flash.swf = "resource/video-js.swf"</script>
  </head>

  <body>
    <?php
    $shownumber = $_POST['shownumber'];
    $seasonnumber = $_POST['seasonnumber'];
    $episodenumber = $_POST['episodenumber'];
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

    <div>
      <video id="playingvideo" class="video-js vjs-default-skin"
      controls preload="auto" width="800" height="400"
      poster="http://video-js.zencoder.com/oceans-clip.png"
      data-setup='{"example_option":true}'>
      <source src="library/<?php echo $shownumber; ?>/<?php echo $seasonnumber; ?>/<?php echo $episodenumber; ?>.mp4" type='video/mp4' />
      <p class="vjs-no-js">To view this video please enable JavaScript, and consider upgrading to a web browser that <a href="http://videojs.com/html5-video-support/" target="_blank">supports HTML5 video</a></p>
    </video>
    </div>
  </body>
