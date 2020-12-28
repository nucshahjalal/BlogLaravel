
<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link href="https://fonts.googleapis.com/css?family=Roboto:100,100i,300,300i,400,400i,500,500i,700,700i,900,900i&display=swap" rel="stylesheet">

    <title>Stand Blog Posts</title>

    <!-- Bootstrap core CSS -->
    <link href="frondEnd/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">


    <!-- Additional CSS Files  and assets use system-->
     
    <link rel="stylesheet" href="frondEnd/assets/css/fontawesome.css">
    <link rel="stylesheet" href="frondEnd/assets/css/templatemo-stand-blog.css">
    <link rel="stylesheet" href="frondEnd/assets/css/owl.css">
<!--

TemplateMo 551 Stand Blog

https://templatemo.com/tm-551-stand-blog

-->
  </head>

  <body>

    <!-- ***** Preloader Start ***** -->
    <div id="preloader">
        <div class="jumper">
            <div></div>
            <div></div>
            <div></div>
        </div>
    </div>  
    <!-- ***** Preloader End ***** -->

    <!-- Header -->
   @include('include.header')

    <!-- Page Content -->
    @yield('main_content')
    <!-- Banner Starts Here -->
  

    
   <!-- footer start-->
   @include('include.footer')
 <!--  footer end -->


    <!-- Bootstrap core JavaScript -->
    <script src="frondEnd/vendor/jquery/jquery.min.js"></script>
    <script src="fontDesign/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Additional Scripts -->
    <script src="frondEnd/assets/js/custom.js"></script>
    <script src="frondEnd/assets/js/owl.js"></script>
    <script src="frondEnd/assets/js/slick.js"></script>
    <script src="frondEnd/assets/js/isotope.js"></script>
    <script src="frondEnd/assets/js/accordions.js"></script>

    <script language = "text/Javascript"> 
      cleared[0] = cleared[1] = cleared[2] = 0; //set a cleared flag for each field
      function clearField(t){                   //declaring the array outside of the
      if(! cleared[t.id]){                      // function makes it static and global
          cleared[t.id] = 1;  // you could use true and false, but that's more typing
          t.value='';         // with more chance of typos
          t.style.color='#fff';
          }
      }
    </script>

  </body>
</html>