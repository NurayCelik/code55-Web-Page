<?php

include_once('helpers/Format.php');
include_once('mailler/Maillerform.php');
define('CSSPATHMAIN', 'bootstrap-4.0/'); //define css path

$cssItemMain = 'mystyle.css'; //css item to display

?>
<!DOCTYPE html>
<html lang="tr">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no, user-scalable=yes">
  <meta name="keywords" content="website, yazılım, mobil, software, design, UI, digital pazarlama" />
  <meta name="description" content="Yazılım & Mühendislik Şirketi">
  <meta name="author" content="Nuray Çelik">
  <title>Code55 Mühendislik & Yazılım</title>

  <link rel="stylesheet" type="text/css" href="bootstrap-4.0/css/bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="bootstrap-4.0/css/bootstrap.css">
  <script type="text/javascript" href="bootstrap-4.0/js/bootstrap.min.js"></script>

  <link rel="stylesheet" type="text/css" href="<?php echo (CSSPATHMAIN . "$cssItemMain"); ?>">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
  <link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" type="text/css" href="fonts/font-awesome/css/font-awesome.css">
  <link href="https://fonts.googleapis.com/css?family=Kristi" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Judson" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Cabin" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Lobster" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,600,300" rel="stylesheet" type="text/css">
  <link rel="preconnect" href="https://fonts.gstatic.com">
  <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@600&display=swap" rel="stylesheet">

  <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]> <![endif]-->
  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

</head>

<body>
  <div class="container-fluid">

    <header>
      <!-- style="background-image: url(images/header3.png);background-repeat: no-repeat;align-items: center; width:100%; z-index: -1;" -->
      <div class="row headerRow">
        <div class="col-lg-2 col-md-4 col-sm-12 col-xs-12">
          <a href="http://localhost/code55/index.php">
            <div class="headerlogo"></div>
          </a>
        </div>
        <div class="col-lg-6 col-md-4 col-sm-12  col-xs-12">
          <p class="headerTitle">Dijital Medya Hizmetleri</p>
        </div>
        <div class="col-lg-4 col-md-4 col-sm-12  col-xs-12 sosyalkolon">
          <div class="sosyal sosyalStil">
            <ul class="code55social">
              <li><a href="https://twitter.com">
                  <i class="fa fa-twitter sosyaliconlar" aria-hidden="true">
                  </i></a>
              </li>

              <li><a href="https://www.facebook.com/">
                  <i class="fa fa-facebook sosyaliconlar" aria-hidden="true">
                  </i></a>
              </li>
              <li><a href="https://www.instagram.com/">
                  <i class="fa fa-instagram sosyaliconlar" aria-hidden="true">
                  </i></a>
              </li>
            </ul>
          </div>
        </div>

      </div>
    </header>
  </div>

  <div class="clearfix"></div>