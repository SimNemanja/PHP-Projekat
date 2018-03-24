<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<!-- Bootstrap core CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/css/bootstrap.min.css" integrity="sha384-/Y6pD6FV/Vv2HJnA6t+vslU6fwYXjCFtcEpHbNJ0lyAFsXTsjBbfaDjzALeQsN6M" crossorigin="anonymous">

    <!-- Custom styles for this template -->

    <style>
        * {
            border-radius: 0px !important;
        }

        img {
            padding: 0;
            display: block;
            margin: 0 auto;
            max-height: 100%;
            width: 100%;
            
        }

        /*
  Bootstrap Carousel Fade Transition (for Bootstrap 3.3.x)
  CSS from:       http://codepen.io/transportedman/pen/NPWRGq
  and:            http://stackoverflow.com/questions/18548731/bootstrap-3-carousel-fading-to-new-slide-instead-of-sliding-to-new-slide
  Inspired from:  http://codepen.io/Rowno/pen/Afykb 
*/

        .carousel-fade .carousel-inner .item {
            opacity: 0;
            transition-property: opacity;
        }

        .carousel-fade .carousel-inner .active {
            opacity: 1;
        }

        .carousel-fade .carousel-inner .active.left,
        .carousel-fade .carousel-inner .active.right {
            left: 0;
            opacity: 0;
            z-index: 1;
        }

        .carousel-fade .carousel-inner .next.left,
        .carousel-fade .carousel-inner .prev.right {
            opacity: 1;
        }

        .carousel-fade .carousel-control {
            z-index: 2;
        }

        /*
  WHAT IS NEW IN 3.3: "Added transforms to improve carousel performance in modern browsers."
  Need to override the 3.3 new styles for modern browsers & apply opacity
*/

        @media all and (transform-3d),
        (-webkit-transform-3d) {
            .carousel-fade .carousel-inner>.item.next,
            .carousel-fade .carousel-inner>.item.active.right {
                opacity: 0;
                -webkit-transform: translate3d(0, 0, 0);
                transform: translate3d(0, 0, 0);
            }
            .carousel-fade .carousel-inner>.item.prev,
            .carousel-fade .carousel-inner>.item.active.left {
                opacity: 0;
                -webkit-transform: translate3d(0, 0, 0);
                transform: translate3d(0, 0, 0);
            }
            .carousel-fade .carousel-inner>.item.next.left,
            .carousel-fade .carousel-inner>.item.prev.right,
            .carousel-fade .carousel-inner>.item.active {
                opacity: 1;
                -webkit-transform: translate3d(0, 0, 0);
                transform: translate3d(0, 0, 0);
            }
        }

    </style>
</head>

<body>

    <?php include("navbar.php"); ?>

    <div class="container-fluid" style="margin-top: 50px; ">
        <div id="myCarousel" class="carousel slide carousel-fade" data-ride="carousel" data-interval="2100">
            <!-- Indicators -->
            <ol class="carousel-indicators">
                <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                <li data-target="#myCarousel" data-slide-to="1"></li>
                <li data-target="#myCarousel" data-slide-to="2"></li>
                <li data-target="#myCarousel" data-slide-to="3"></li>
                <li data-target="#myCarousel" data-slide-to="4"></li>
                <li data-target="#myCarousel" data-slide-to="5"></li>
            </ol>

            <!-- Wrapper for slides -->
            <div class="carousel-inner">
                <div class="item active carouselPhoto">
                    <img src="photos/Carousel1.jpg" alt="Sea">
                    <!--
                    <div class="carousel-caption">
                        <h3>Los Angeles</h3>
                        <p>LA is always so much fun!</p>
                    </div>
-->
                </div>

                <div class="item carouselPhoto img-responsive">
                    <img src="photos/Carousel2.jpg" alt="Sea">
                    <!--
                    <div class="carousel-caption">
                        <h3>Chicago</h3>
                        <p>Thank you, Chicago!</p>
                    </div>
-->
                </div>

                <div class="item carouselPhoto">
                    <img src="photos/Carousel3.jpg" alt="Sea">
                    <!--
                    <div class="carousel-caption">
                        <h3>New York</h3>
                        <p>We love the Big Apple!</p>
                    </div>
-->
                </div>
                <div class="item carouselPhoto">
                    <img src="photos/Carousel4.jpg" alt="Sea">
                    <!--
                    <div class="carousel-caption">
                        <h3>New York</h3>
                        <p>We love the Big Apple!</p>
                    </div>
-->
                </div>

                <div class="item carouselPhoto">
                    <img src="photos/Carousel5.jpg" alt="Sea">
                    <!--
                    <div class="carousel-caption">
                        <h3>Negotin</h3>
                        <p>The place to be!</p>
                    </div>
-->
                </div>

                <div class="item carouselPhoto">
                    <img src="photos/Carousel6.jpg" alt="Sea">
                    <!--
                    <div class="carousel-caption">
                        <h3>Negotin</h3>
                        <p>The place to be!</p>
                    </div>
-->
                </div>

            </div>

            <!-- Left and right controls -->
            <a class="left carousel-control" href="#myCarousel" data-slide="prev">
    <span class="glyphicon glyphicon-chevron-left"></span>
    <span class="sr-only">Previous</span>
  </a>
            <a class="right carousel-control" href="#myCarousel" data-slide="next">
    <span class="glyphicon glyphicon-chevron-right"></span>
    <span class="sr-only">Next</span>
  </a>
        </div>
    </div>

    <style>


    </style>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.5/js/bootstrap.min.js"></script>

    <script>


    </script>

</body>

</html>
