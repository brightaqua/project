<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script
    src="https://code.jquery.com/jquery-3.4.1.min.js"
    integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo="
    crossorigin="anonymous">
    </script>

    <!-- Compiled and minified CSS -->
     <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
     <!-- Compiled and minified JavaScript -->
     <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
     <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">


    <title>BrightAqua</title>
    
    <script>
        $(document).ready(function(e){
            $(".dropdown-trigger").dropdown();

            $('.carousel.carousel-slider').carousel({
                fullWidth: true,
                indicators: true
            });

            $(document).ready(function(){
                $('.parallax').parallax()
            });

            $(document).ready(function(){
                 $('.carousel').carousel();
                 indicators:true;
                 fullWidth:true;
            });

            $(document).ready(function(){
                $('.materialboxed').materialbox();
            });

        
        });

        
    </script>

    <!-- Dropdown Structure -->
    <ul id="dropdown1" class="dropdown-content ">    
        <li><a href="#!">one</a></li>
        <li><a href="#!">two</a></li>
        <li class="divider"></li>
        <li><a href="#!">three</a></li>
    </ul>
    
    
    <nav class="white z-depth-3">
        <div class = "container-fluid">
        <div class="nav-wrapper container ">
        <a href="#!" class="brand-logo grey-text text-darken-2">BrightAqua</a>
        <ul class="right hide-on-med-and-down">
            <li><a href="<?php echo base_url('/')?>" class="grey-text text-darken-2">Home<i class="material-icons right">home</i></a></li>
            <li><a href="<?php echo base_url('/index.php/Contact')?>" class="grey-text text-darken-2">Contact Us<i class="material-icons right">call</i></a></li>
            <!-- Dropdown Trigger -->
            <li><a class="dropdown-trigger grey-text text-darken-2"  href="#!" data-target="dropdown1">Products<i class="material-icons right">arrow_drop_down</i></a></li>
            <li><a href="<?php echo base_url('/index.php/Sign_up')?>" class="grey-text text-darken-2">Sign up<i class="material-icons right">account_circle</i></a></li>
            <li><a href="<?php echo base_url('/index.php/Sign_in')?>" class="grey-text text-darken-2">Sign in<i class="material-icons right">lock_open</i></a></li>
        </ul>

     
        </div>
    </div>
    </nav>

    
  
          


   
</head>


=
    <div class="parallax-container" style="height: 200px">
        <div class="parallax"><img src="http://cdn.shopify.com/s/files/1/0015/7374/8802/collections/stock-photo-home-aquarium-cleaning-using-magnetic-fish-tank-cleaner-man-scrubbing-glass-of-home-decorative-740603290_1200x1200.jpg?v=1539353014.png"></div>
    </div>   

    
    <!--https://www.fishkeepingworld.com/wp-content/uploads/2017/08/Start-Here-Fishkeeping-World.png-->



</html>