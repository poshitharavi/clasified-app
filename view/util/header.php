<?php ?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
    <meta charset="utf-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title><?php echo $title;?></title>
    <!-- Bootstrap stylesheet -->
    <link href="./../../template/bootstrap4/css/bootstrap.min.css" rel="stylesheet">
    <!-- font -->
    <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,900" rel="stylesheet">
    <!-- stylesheet -->
    <link href="./../../template/css/style.css" rel="stylesheet" type="text/css"/>
    <link href="./../../template/css/style_orange.css" title="style_orange" rel="alternate stylesheet" type="text/css"/>
    <link href="./../../template/css/style_blue.css" title="style_blue" rel="alternate stylesheet" type="text/css"/>
    <link href="./../../template/css/responsive.css" rel="stylesheet" type="text/css"/>
    <link href="./../../template/css/ele-style.css" rel="stylesheet" type="text/css"/>
    <!-- font-awesome -->
    <link href="./../../template/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css" />
    <!-- line-awesome -->
    <link href="./../../template/line-awesome/css/line-awesome.min.css" rel="stylesheet" type="text/css" />
    <!-- crousel css -->
    <link href="./../../template/js/owl-carousel/owl.carousel.min.css" rel="stylesheet" type="text/css" />
    <!--bootstrap select-->
    <link href="./../../template/js/dist/css/bootstrap-select.css" rel="stylesheet" type="text/css" />

</head>
<body>
<!--top start here -->
<div class="top">
    <div class="container">
        <div class="row">
            <div class="col-sm-5 col-xs-12">
                <ul class="list-inline icon">
                    <li>
                        <!--language code start here-->
                        <form  method="post" enctype="multipart/form-data" id="language">
                            <div class="btn-group">
                                <button class="btn btn-link dropdown-toggle" data-toggle="dropdown">
                                    <span class="text"><i class="la la-language"></i>English</span> <i class="la la-caret-down"></i>
                                </button>
                                <ul class="dropdown-menu dropdown-menu-right">
                                    <li><a href="javascript:;"><img src="images/flag.jpg" alt="english" title="english" /> English</a></li>
                                </ul>
                            </div>
                        </form>
                        <!--language code end here-->
                    </li>
                    <li><a href="./../login.php"><i class="la la-plus-square"></i> <span>Login</span></a></li>
                    <li><a href="./../register.php"><i class="la la-key"></i> <span>Register</span></a></li>
                </ul>
            </div>
            <div class="col-md-7 col-sm-7 col-xs-12">

            </div>
        </div>
    </div>
</div>
<!--top end here -->

<!-- header start here-->
<header>
    <div class="container">
        <div class="d-flex row align-items-center">
            <div class="col-md-3 col-sm-3 col-xs-12">
                <div id="logo">
                    <a href="./../../index.php"><img class="img-fluid logochange" src="./../../images/logo.png" alt="logo" title="logo" /></a>
                </div>
            </div>
            <div class="col-md-7 col-sm-7 col-xs-12">
                <form class="form-horizontal category" method="post">
                    <div class="row">
                        <div class="col-sm-3 paddright">
                            <div class="form-group">
                                <select class="selectpicker form-control bs-select-hidden" name="location">
                                    <option value="1">Select City</option>
                                    <option value="0">Ludhiana</option>
                                    <option value="0">Jalandhar</option>
                                    <option value="0">Moga</option>
                                    <option value="0">Ambala</option>
                                    <option value="0">Amritsar</option>
                                    <option value="0">Delhi</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-sm-3 paddright">
                            <div class="form-group">
                                <select class="selectpicker form-control bs-select-hidden" name="location">
                                    <option value="1">Select Category</option>
                                    <option value="0">Vehicle</option>
                                    <option value="0">Mobiles</option>
                                    <option value="0">Electonics</option>
                                    <option value="0">Real Estate</option>
                                    <option value="0">Fashion</option>
                                    <option value="0">Furniture</option>
                                    <option value="0">Jobs</option>
                                    <option value="0">Services</option>
                                    <option value="0">Pets</option>
                                    <option value="0">Education</option>
                                    <option value="0">Matrimony</option>
                                    <option value="0">Note and Coins</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-sm-6 search">
                            <div class="form-group">
                                <input name="s" value="" class="form-control" placeholder="Enter Keyword" type="text">
                                <button type="submit" value="submit" class="btn"><i class="icon_search" aria-hidden="true"></i></button>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
            <div class="col-md-2 col-sm-2 col-xs-12 center">
                <button class="btn-primary btn-block" type="button" onclick="location.href='add-item.php'"> <i class="la la-edit"></i>Add listing</button>
            </div>
        </div>
    </div>
</header>
<!-- header end here -->
