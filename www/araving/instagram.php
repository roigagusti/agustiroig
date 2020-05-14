<!DOCTYPE html>
<html lang="en">
  <head>
  <!-- Meta data -->

  <!-- Títol i Favicons -->
  <title>Araving</title>
  <link rel="shortcut icon" href="img/favicons/favicon.ico">

  <!-- CSS basics -->
  <link rel="stylesheet" href="http://fontawesome.io/assets/font-awesome/css/font-awesome.css">
  <!-- CSS custom -->
  <link rel="stylesheet" type="text/css" href="css/style.css">
  <link rel="stylesheet" type="text/css" href="css/responsive.css">
  <style>
  #rudr_instafeed{
    list-style:none  
  }
  #rudr_instafeed li{
    float:left;
    width:200px;
    height:200px;
    margin:10px
  }
  #rudr_instafeed li img{
    max-width:100%;
    max-height:100%;
  }
  </style>
  <!-- Google Fonts -->
  <link rel="stylesheet" type="text/css" href="http://fonts.googleapis.com/css?family=Raleway">
  <!-- Scripts custom -->
  <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
  <script src="js/script.js" type="text/javascript"></script>
  <script>
  var token = '33124345.5c7cf40.0843023e9a984c83bb638a9c0f354990',
      hashtag='nofilter', // hashtag without # symbol
      num_photos = 20;
   
  $.ajax({
    url: 'https://api.instagram.com/v1/tags/' + hashtag + '/media/recent',
    dataType: 'jsonp',
    type: 'GET',
    data: {access_token: token, count: num_photos},
    success: function(data){
      console.log(data);
      for(x in data.data){
        $('ul').append('<li><img src="'+data.data[x].images.standard_resolution.url+'"><br>Latitude: '+data.data[x].location.latitude+'<br>Longitud: '+data.data[x].location.longitude+'<br>Publicat: '+data.data[x].caption.created_time+'<br>Usuari: '+data.data[x].caption.from.username+'<br><img src="'+data.data[x].caption.from.profile_picture+'"></li>');  
      }
    },
    error: function(data){
      console.log(data);
    }
  });
  </script>
</head>


<body class="background-corporative">
<!-- Header -->
<div class="home-content">
  <ul id="rudr_instafeed"></ul>
</div>


<!-- JavaScripts basics -->
<!-- JavaScripts custom -->
<!-- Scripts custom -->

</body>
</html>