<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd"><?php   ?>
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <title><?php echo "PRESET ELECTION 2018 - " . date('Y') . ""; ?></title>
  <link rel="shortcut icon" href="img/favicon.png" type="image/x-png" />
  <link rel='stylesheet' type='text/css' href='css/main.css' />
  <link rel='stylesheet' type='text/css' href='css/theme.css' />
  <link rel='stylesheet' type='text/css' href='css/jquery-confirm.min.css' />
  <link rel='stylesheet' type='text/css' href='css/animation.css' />
  <link rel='stylesheet' type='text/css' href='css/fontawesome.css' />
  <style>
    #se-pre-con {
      position: fixed;
      left: 0px;
      top: 0px;
      width: 100%;
      height: 100%;
      z-index: 9999;
      background: url(img/favicon.png) center no-repeat #fff;
    }
  </style>
</head>

<body>
  <nav class="navbar navbar-light  ">
    <a class="navbar-brand" href="#">
      <img src="/img/favicon.png" width="30" height="30" class="d-inline-block align-top" alt="">
      Elections Platform v1.0.1
    </a>
  </nav>

  <form id="ballot">
    <div class="card  text-center">

      <?php
      include('access.clo');
      include 'school.php';
      include 'src.php';
      include 'protocol.php';
      include 'compound.php';
      include 'sports.php';
      include 'entertainment.php';
      //include 'chaplain.php';
      include 'nurse.php';
      //include 'canteen.php';
      //include 'library.php';
      ?>
      <center><button id="vote" class="btn btn-primary display-4 p-5 col-xl-2 mb-5">VOTE</button>
    </div>
  </form>


  <script type="text/javascript" src="/js/jquery-3.2.1.min.js"></script>
  <script type="text/javascript" src="/js/jquery-confirm.min.js"></script>
  <script type="text/javascript" src="/js/script.js"></script>
  <footer class="footer mt-auto py-3 bg-light">
    <div class="container">
      <span class="text-muted">Powered by <a href="tel:0200111391" target="_blank">Kofano</a></span>
    </div>
  </footer>
</body>
<div id="se-pre-con" class="animated fadeIn"></div>

</html>