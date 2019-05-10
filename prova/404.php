<?php include_once("sections/languages.php") ?>
<!DOCTYPE html>
<html lang="en" id="not-found">
  <head>
  <!-- Meta data -->
  <?php include_once("sections/meta.php") ?>

  <!-- Títol i Favicons -->
  <title>404 Not Found - Agustí Roig</title>
  <link rel="shortcut icon" href="img/favicons/favicon.ico">

  <!-- JS basics -->
  <script src="//ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
  <script src="/js/typed.js" type="text/javascript"></script>
  <!-- CSS custom -->
  <link rel="stylesheet" type="text/css" href="//www.agustiroig.com/css/style.css">
  <link rel="stylesheet" type="text/css" href="//www.agustiroig.com/css/responsive.css">
  <!-- Google Fonts -->
  <link rel="stylesheet" type="text/css" href="http://fonts.googleapis.com/css?family=Raleway">
  <!-- Scripts custom -->
  <script>
        $(function(){
            var weekdays = ["Sunday", "Monday", "Tuesday", "Wednesday", "Thursday", "Friday", "Saturday"];
            var dayOfWeekIndex = (new Date()).getDay();
            var dayOfWeek = weekdays[dayOfWeekIndex];
            var dayOfWeekPastIndex = Math.floor(weekdays.length * Math.random());
            var dayOfWeekPast;
            var hourOfDay = new Date().getHours();
            var timeOfDay;
            // choose day of week other than current one
            if (dayOfWeekPastIndex == dayOfWeekIndex) {
              dayOfWeekPast = weekdays[(dayOfWeekPastIndex + 1) % weekdays.length];
            } else {
              dayOfWeekPast = weekdays[dayOfWeekPastIndex];
            }
            // assign time of day to the hour
            if ((hourOfDay >= 4) && (hourOfDay <= 13)) {
              timeOfDay = "morning";
            } else if ((hourOfDay >= 14) && (hourOfDay <= 18)) {
              timeOfDay = "afternoon";
            } else { 
              timeOfDay = "evening";
            }
            // make conversation
            $('#story').typed({
                strings: ["Well, here we are in 404.^2000 \nAin't much to look at, is it?^2000 \nCame here on a " + dayOfWeekPast + " night once.^1000 \nIt was actually pretty crowded.^1000 \nBut on a " + dayOfWeek + " " +  timeOfDay + " .^300 .^300 .^1000 \nI guess it's just you^1000 and me.^3000 \nHeh."],
                typeSpeed: 20,
                backDelay: 500,
                loop: false,
                loopCount: false,
            });
        });
        $(document).ready(function() {
          setTimeout(function() {
            // send 'em packing 
            $('#kick').append('<a href="/">Return home</a>');
          }, 30000);
        });
    </script>
  </head>

  <body class="basic-bg">
      <div id="holder">
          <span id="story"></span>
          <div id="kick"></div>
      </div>
  </body>
</html>