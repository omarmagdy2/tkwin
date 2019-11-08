<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <link rel="shortcut icon" href="front/images/logo2.png">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>tkwin</title>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.2/css/all.min.css">
        <link href="https://fonts.googleapis.com/css?family=Cairo:400,700,900&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
        <link rel="stylesheet" href="https://www.jqueryscript.net/demo/Fully-Responsive-Flexible-jQuery-Carousel-Plugin-slick/css/slick.css">
        <link href="https://www.jqueryscript.net/css/jquerysctipttop.css" rel="stylesheet" type="text/css">
        <link rel="stylesheet" href="front/css/page1.css">
        <!-- <link rel="stylesheet" href="css/page2.css">
        <link rel="stylesheet" href="css/page3.css">
        <link rel="stylesheet" href="css/page4.css">
        <link rel="stylesheet" href="css/page5.css">
        <link rel="stylesheet" href="css/page6.css">
        <link rel="stylesheet" href="css/page7.css">
        <link rel="stylesheet" href="css/slick.css">
        <link rel="stylesheet" href="css/slick-theme.css"> -->
    </head>
    <body>
        <!-- start navbar -->
        <nav class="navbar navbar-expand-lg navbar-dark">
            <div class="container">
                <a class="navbar-brand" href="#"><img src="front/images/logo.png" width="100" /></a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav mr-auto ml-auto">
                        <li class="nav-item active">
                            <a class="nav-link" href="{{url('/')}}">الرئيسية <span class="sr-only">(current)</span></a>
                        </li>
                        <li class="nav-item ">
                            <a class="nav-link" href="#">عن الشركة </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{url('/services')}}">خدماتنا</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">أعمالنا</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{url('/team')}}">فريق العمل</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{url('/request')}}">تقدم بطلبك</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{url('/contactus')}}">تاتصل بنا</a>
                        </li>
                    </ul>
                    <ul class="navbar-nav my-2 my-lg-0">
                        <li class="nav-item">
                            <a class="nav-link" href="#"><i class="fas fa-search"></i></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#"><i class="far fa-envelope"></i></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#"><i class="fas fa-cart-arrow-down"></i></a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
        <!-- end navbar -->

        <!-- start header -->
        <div class="header">
            <div class="overlay">
                <div class="container">
                    <div class="center-header">
                        <div class="slider1">
                            <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                                <ol class="carousel-indicators">
                                    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                                    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                                    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                                </ol>
                                <div class="carousel-inner text-center">
                                    <div class="carousel-item active">
                                        <div class="content-slider">
                                            <h2>التصاميم الدعائية 1</h2>
                                            <p>نعتمد في تصميمنا على ثلاث مفاتيح أساسية هامة هي الوضوح وقوة التأثير والحداثة</p>
                                        </div>
                                    </div>
                                    <div class="carousel-item">
                                        <div class="content-slider">
                                            <h2>التصاميم الدعائية 2</h2>
                                            <p>نعتمد في تصميمنا على ثلاث مفاتيح أساسية هامة هي الوضوح وقوة التأثير والحداثة</p>
                                        </div>
                                    </div>
                                    <div class="carousel-item">
                                        <div class="content-slider">
                                            <h2>التصاميم الدعائية 3</h2>
                                            <p>نعتمد في تصميمنا على ثلاث مفاتيح أساسية هامة هي الوضوح وقوة التأثير والحداثة</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="btn-header">
                            <a href="#">تفاصيل</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    <!-- end header -->

         @yield('content')

    <!-- start footer -->
        <div class="footer">
            <div class="container">
                <div class="row">
                    <div class="col col1">
                        <div class="links">
                            <h3>معلومات التواصل</h3>
                            <ul>
                                <li><i class="fas fa-map-marker-alt"></i> الرياض - حى الريان</li>
                                <li><a href="mailto:design@tkwin.com.sa"><i class="far fa-envelope"></i> design@tkwin.com.sa</a></li>
                                <li><a href="tel:966 507 25 5592"><i class="fas fa-mobile-alt"></i> 966 507 25 5592</a></li>
                                <li><a href="tel:9200 12665"><i class="fas fa-phone-volume"></i> 9200 12665</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col">
                        <div class="subscribe">
                            <h5>اشترك في القائمة البريدية ليصلك كل جديد</h5>
                            <form class="float-left">
                                <img class="float-left icon" src="front/images/subscribe.png" width="60" />
                                <div class="form-content float-left">
                                    <input type="email" placeholder="enter your email address" />
                                    <input type="submit" value="send" />
                                </div>
                            </form>
                        </div>
                        <div class="clearfix"></div>
                        <div class="copyright">
                            <div class="row">
                                <div class="col text-right">
                                    <a href="#">خدمة التحويل البنكي <i class="far fa-credit-card"></i></a>
                                </div>
                                <div class="col text-center">
                                    <a href="#">Takwinsa1</a>
                                    <a href="https://instagram.com/tkwinsa1?igshid=152800rk0pspp"><i class="fab fa-instagram"></i></a>
                                    <a href="https://twitter.com/tkwinsa1?s=08"><i class="fab fa-twitter"></i></a>
                                    <a href="#"><i class="fab fa-snapchat-ghost"></i></a>
                                </div>
                                <div class="col text-left">
                                    <p>&copy; 2019 Takween All Rights Reserved</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- end footer -->

        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
        <script src="https://code.jquery.com/jquery-2.2.4.min.js"></script>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
        <script src="https://yandex.st/highlightjs/8.0/highlight.min.js"></script>
        <script src="https://www.jqueryscript.net/demo/Fully-Responsive-Flexible-jQuery-Carousel-Plugin-slick/js/slick.js"></script>
        <script src="front/js/page1.js"></script>
        <script src="front/js/page2.js"></script>
        <script src="front/js/slick.js"></script>
    </body>
</html>


