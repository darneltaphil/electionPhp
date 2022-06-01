<?php $page_title="..:: PRESET ELECTIONS 2017 ::..";  ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta http-equiv="X-UA-Compatible" content="IE=edge" />

<title><?php echo $page_title; ?></title>
<link rel="shortcut icon" href="img/favicon.png" type="image/x-png" />
<link rel='stylesheet'  type='text/css' href='css/main.css' />
<link rel='stylesheet'  type='text/css' href='css/theme.css' />
<link rel='stylesheet'  type='text/css' href='css/jquery-confirm.min.css' />
<link rel='stylesheet'  type='text/css' href='css/animation.css' />
<link rel='stylesheet'  type='text/css' href='css/fontawesome.css' />
</head> 
<body>
<nav class="navbar navbar-light bg-primary ">
  <a class="navbar-brand text-white" href="#">
    <img src="/img/favicon.png" width="30" height="30" class="d-inline-block align-top" alt="">
    Elections Platform v1.0.1 - Results
  </a>
  <button class="btn btn-danger my-2 my-sm-0" type="submit">Clear Database</button>
</nav>
<div class="container-fluid">
<div class="row" id="results">


</div>
</div>


<footer class="footer mt-auto py-3 bg-light">
  <div class="container">
    <span class="text-muted">Powered by <a href="https://lotustechcloud.com" target="_blank">LotusTech</a></span>
  </div>
</footer>

<script type="text/javascript" src="/js/jquery-3.2.1.min.js"></script>
<script>
$(document).ready(function(){
    setInterval(() => { 
        load_results(); 
    }, 10000);
    function load_results(){
        $.ajax({
            url: 'results.php',
            method: 'POST',

        }).done(function(data){
            $('#results').html(data)
         })
    }
});
</script>
</body></html>