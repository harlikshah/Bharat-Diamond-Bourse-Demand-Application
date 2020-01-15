<!DOCTYPE html>

<head>
  <link rel="stylesheet" href="style.css">
<script>
(function() {
  
  var video = document.getElementById("my-video");
  
  video.addEventListener( "canplay", function() {
    video.play();
  });
})();
</script>
</head>
<body bgcolor="#696969">
  <div id="container">


<div id="my-video"><video  class="video"  muted loop autoplay  >
  <source src="bkc.mp4" type="video/mp4">
  <source src="bkc.ogv" type="video/ogg">
  <source src="bkc.webm" type="video/webm">
</video><!-- /video --></div>


<div id="sp" class="col-lg-4">
  <?php include 'loginpage.php'; ?>
</div>
</div>

</body>
</html>