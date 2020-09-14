<?php
include('../assets/phpFiles/Bootstrap_CSS_JS.php');
?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>STCC social</title>
</head>

<body style="background: url('assets/img/bkgrd_oy.png') center;">
    <!-- Start: Navigation with Search -->
    <nav class="navbar navbar-light navbar-expand-md navigation-clean-search" style="background: #9d0101;">
        <div class="container">
            <a class="navbar-brand" href="#" style="text-shadow: 3px 1px 3px;color: rgb(255,252,252);">
                <!--Meant to redirect to home page; Requires URL-->STCC Social<br></a><button data-toggle="collapse" class="navbar-toggler" data-target="#navcol-1"><span class="sr-only">Toggle navigation</span><span class="navbar-toggler-icon"></span></button>
            <div class="collapse navbar-collapse" id="navcol-1"
                style="width: 663px;">
                <ul class="nav navbar-nav">
                    <?php
                    include('../assets/phpFiles/MainNavbar.php');
                    ?>
<!--                    <li class="nav-item"><a class="nav-link" href="https://www.stcc.edu/" style="color: rgb(228,231,109);text-shadow: 2px 1px 4px;"><strong>STCC Main</strong></a></li>-->
<!--                    <li class="nav-item"><a class="nav-link" href="https://advisorweb.stcc.edu/WebAdvisor/WebAdvisor?TYPE=M&amp;PID=CORE-WBMAIN&amp;TOKENIDX=1017827741" style="color: rgb(228,231,109);text-shadow: 2px 1px 4px;"><strong>WebAdvisor</strong></a></li>-->
<!--                    <li lass="nav-item"><a class="nav-link" href="https://stcc.blackboard.com/webapps/login/" style="color: rgb(228,231,109);text-shadow: 2px 1px 4px;"><strong>Blackboard</strong></a></li>-->
                </ul>
            </div>
        </div>
    </nav>
    <!-- End: Navigation with Search -->
    <!-- Start: 2 Rows 1+1 Columns -->
    <div>
        <div class="container">
            <div class="row">
                <div class="col"><label class="col-form-label" style="color: rgb(17,19,20);text-shadow: 1px 2px 17px;"><strong>Title</strong></label></div>
                <div class="col-md-12">
                    <div class="form-group"><input type="text" style="width: 628px;"></div>
                </div>
            </div>
            <div class="row">
                <div class="col"></div>
                <div class="col-md-12"><textarea style="width: 626px;height: 297px;"></textarea></div>
            </div>
        </div>
    </div>
    <!-- End: 2 Rows 1+1 Columns -->
    <!-- Start: 1 Row 4 Columns -->
    <div>
        <div class="container">
            <div class="row">
                <div class="col-md-3"></div>
                <div class="col-md-3"></div>
                <div class="col"><button class="btn btn-primary" type="button">Post</button></div>
            </div>
        </div>
    </div>
    <!-- End: 1 Row 4 Columns -->
</body>

</html>