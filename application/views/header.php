<!DOCTYPE html>
<html lang="en">

    <head>

        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Assignment Section B (MVC)</title>

        <!-- CSS -->
        <link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Roboto:400,100,300,500">
        <link rel="stylesheet" href="<?php echo base_url('assets/bootstrap/css/bootstrap.min.css');?>">
        <link rel="stylesheet" href="<?php echo base_url('assets/font-awesome/css/font-awesome.min.css');?>">
		<link rel="stylesheet" href="<?php echo base_url('assets/css/form-elements.css');?>">
        <link rel="stylesheet" href="<?php echo base_url('assets/css/style.css');?>">

        <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
            <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
            <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
        <![endif]-->

        <!-- Favicon and touch icons -->
        <link rel="shortcut icon" href="<?php echo base_url('assets/ico/favicon.png');?>">
        <link rel="apple-touch-icon-precomposed" sizes="144x144" href="<?php echo base_url('assets/ico/apple-touch-icon-144-precomposed.png');?>">
        <link rel="apple-touch-icon-precomposed" sizes="114x114" href="<?php echo base_url('assets/ico/apple-touch-icon-114-precomposed.png');?>">
        <link rel="apple-touch-icon-precomposed" sizes="72x72" href="<?php echo base_url('assets/ico/apple-touch-icon-72-precomposed.png');?>">
        <link rel="apple-touch-icon-precomposed" href="<?php echo base_url('assets/ico/apple-touch-icon-57-precomposed.png');?>">

    </head>

    <body>

        <!-- Top content -->
        <div class="top-content">

          <!-- Fixed navbar -->
          <nav class="navbar navbar-default navbar-fixed-top">
            <div class="container">
              <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                  <span class="sr-only">Toggle navigation</span>
                  <span class="icon-bar"></span>
                  <span class="icon-bar"></span>
                  <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="<?php echo base_url();?>"><strong>The Nepali Style</strong></a>
              </div>
              <div id="navbar" class="collapse navbar-collapse">
                <ul class="nav navbar-nav">
                  <li class="active"><a href="<?php echo base_url();?>">Home</a></li>
                  <li><a href="<?php echo base_url('welcome/about');?>">About</a></li>
                  <li><a href="<?php echo base_url('welcome/contact');?>">Contact</a></li>
                  <!-- <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Dropdown <span class="caret"></span></a>
                    <ul class="dropdown-menu">
                      <li><a href="#">Action</a></li>
                      <li><a href="#">Another action</a></li>
                      <li><a href="#">Something else here</a></li>
                      <li role="separator" class="divider"></li>
                      <li class="dropdown-header">Nav header</li>
                      <li><a href="#">Separated link</a></li>
                      <li><a href="#">One more separated link</a></li>
                    </ul>
                  </li> -->
                </ul>
                <ul class="nav navbar-nav navbar-right">
                  <!-- <li class="active"><a href="./">Default <span class="sr-only">(current)</span></a></li> -->
                  <?php if($this->session->has_userdata('logged_in')): ?>
                  <?php if(isset($username) && $username == "admin") : ?>
                    <li><a href="<?php echo base_url('post');?>"><strong>Add Post</strong></a></li>
                    <li><a href="#">Welcome, <strong>Admin!</strong></a></li>
                  <?php else: ?>
                  <li><a href="#">Welcome, <strong><?php echo isset($username) ? $username : '';?>!</strong></a></li>
              <?php endif; ?>
                  <li><a href="<?php echo base_url('user/logout');?>">Logout</a></li>
              <?php else: ?>
                  <li><a href="<?php echo base_url('user/login');?>">Sign in/Sign up</a></li>
              <?php endif; ?>
                  <!-- <li><a href="../navbar-fixed-top/">Logout</a></li> -->
                </ul>
              </div><!--/.nav-collapse -->
            </div>
          </nav>
