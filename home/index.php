<?php
include('assets/phpFiles/Bootstrap_CSS_JS.php');
include("../auth/config.php");
include('assets/phpFiles/reqJSSA2.php');
?>
<!DOCTYPE html>
<html class="text-justify" lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>Home - Brand</title>
</head>

<body>
    <nav class="navbar navbar-expand navigation-clean customCSS">
        <div class="container">
            <a class="navbar-brand" >
                <img src="https://stcc.edu/media/site-assets/images/STCCWhite.png" alt="STCC Logo" width="200">
                <a class="navbar-brand customCSS" href="#" style="filter: contrast(130%);">STCC Creates</a><button data-toggle="collapse" class="navbar-toggler" data-target="#navcol-1"></button>
            </a>

<!--            <div class="collapse navbar-collapse" id="navcol-1"><a class="btn btn-primary ml-auto" role="button" href="#">Sign In</a></div>-->
        </div>
    </nav>
    <header data-toggle="tooltip" data-bs-tooltip="" class="masthead text-white text-center" style="background: url('assets/img/blutint.png');">
        <header class="overlay"></header>
        <div class="container">
            <div class="row">
                <div class="col-5 col-sm-4 col-md-5 col-lg-2 col-xl-4 offset-0 offset-lg-6 offset-xl-7 mx-auto">
                    <h6 class="mb-5" style="text-shadow: 0px 0px 2px;"><strong>Danger Noodles present</strong><br></h6><img class="img-fluid visible" data-toggle="tooltip" data-bs-tooltip="" data-placement="right" style="background: url('assets/img/Snek co transparent resize_large.png') center / cover no-repeat;" src="assets/img/Snek co transparent resize_large.png">
                    <figure class="figure"></figure>
                </div>
                <div class="col-xl-9 offset-lg-4 mx-auto justify-content-center" style="border-style: none;text-shadow: 0px 1px;text-align: center;">
<!--                    <h1 class="mb-5" style="width: 323px;text-align: justify;height: 33px; align-items: center;">Welcome to STCC Social</h1>-->
                    <h1 class="mb-5 justify-content-center" style="align-items: center;">Welcome to STCC Social</h1>
                </div>
                <div class="col-md-10 col-lg-8 col-xl-7 mx-auto">
                    <form>
                        <div class="form-row justify-content-center" style="text-align: center;" >
                            <div class="col-12 col-md-3">
                                <button class="btn btn-primary btn-block btn-lg btn-block" type="button" onclick="visitForum();">Visit our forum </button>
<!--                                <button class="btn btn-primary btn-block btn-lg btn-block" type="button" onclick="userLogin();">Login </button>-->
<!--                                <button class="btn btn-primary btn-block btn-lg" type="button" onclick="userRegister();">Sign up!</button>-->
                            </div>
                        </div>

                    </form>

                </div>
            </div>
        </div>
    </header>
    <!-- Start: Footer Clean -->
    <div class="footer-clean">
        <footer>
            <div class="container">
                <div class="row justify-content-center">
                    <!-- Start: Services -->
                    <div class="col-sm-4 col-md-3 item"><img style="background: url('assets/img/Springfield_Technical_Community_College_(STCC)_seal.png') center no-repeat;"></div>
                    <!-- End: Services -->
                    <!-- Start: About -->
                    <div class="col-sm-4 col-md-3 item">
                        <h3>About</h3>
                        <ul>
                            <li></li>
                            <li><a href="#">Team</a></li>
                            <li><a href="#">Home</a></li>
                        </ul>
                    </div>
                    <!-- End: About -->
                    <!-- Start: Careers -->
                    <div class="col-sm-4 col-md-3 item">
                        <h3></h3>
                        <ul>
                            <li></li>
                            <li></li>
                            <li><a href="#"></a></li>
                        </ul>
                    </div>
                    <!-- End: Careers -->
                    <!-- Start: Social Icons -->
<!--                    <div class="col-lg-3 item social"><a href="#"><i class="icon ion-social-facebook"></i></a><a href="#"><i class="icon ion-social-twitter"></i></a><a href="#"><i class="icon ion-social-snapchat"></i></a><a href="#"><i class="icon ion-social-github"></i></a>-->
                    <div class="col-lg-3 item social"><a href="https://github.com/Cjk01/STCC-creates-team-b"><i class="icon ion-social-github"></i></a>
                        <p class="copyright">Danger Noodles © 2020</p>
                    </div>
                    <!-- End: Social Icons -->
                </div>
            </div>
        </footer>
    </div>
    <!-- End: Footer Clean -->

</body>

</html>