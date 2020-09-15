<?php
include('assets/phpFiles/Bootstrap_CSS_JS.php');
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>STCC social</title>
</head>

<body>
    <!-- Start: Navigation with Search -->
    <nav class="navbar navbar-light navbar-expand-md navigation-clean-search" style="background: #9d0101;">
        <div class="container">
            <a class="navbar-brand" href="#" style="text-shadow: 3px 1px 3px;color: rgb(255,252,252);">
                <!--Meant to redirect to home page; Requires URL--><img style="background: url('assets/img/Snek co transparent resize_large.png') no-repeat;background-size: contain;">STCC Social<br></a><button data-toggle="collapse" class="navbar-toggler" data-target="#navcol-1"><span class="sr-only">Toggle navigation</span><span class="navbar-toggler-icon"></span></button>
            <div
                class="collapse navbar-collapse" id="navcol-1" style="width: 663px;">
                <ul class="nav navbar-nav">
                    <?php
                    include('../assets/phpFiles/MainNavbar.php');
                    ?>
                </ul>
        </div>
        </div>
    </nav>
    <!-- End: Navigation with Search -->
</body>

</html>