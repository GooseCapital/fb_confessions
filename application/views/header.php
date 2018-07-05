<!DOCTYPE html>
<html lang="en">
<head>
	<title><?php echo $title; ?></title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
	<script src="https://cdn.jsdelivr.net/npm/vue/dist/vue.js"></script>
	<!-- Latest compiled and minified CSS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css">
	<link href="<?php echo public_helper('css');?>/index.css" rel="stylesheet" />
	<!-- jQuery library -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="<?php echo public_helper('js');?>/js.js"></script>
	<!-- Popper JS -->
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js"></script>

	<!-- Latest compiled JavaScript -->
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js"></script>
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.1.0/css/all.css" integrity="sha384-lKuwvrZot6UHsBSfcMvOkWwlCMgc0TaWr+30HWe3a4ltaBwTZhyTEggF5tJv8tbt" crossorigin="anonymous">

</head>
<body>
<nav class="navbar navbar-expand-sm bg-light navbar-light">
   <a class="navbar-brand" href="#">
    <img src="http://i.imgur.com/SPtT6mog.png" alt="Logo" style="width:50px;">
  </a>
  <ul class="navbar-nav">
    <li class="nav-item">
      <a class="nav-link" href="/"><i class="fas fa-home"></i> Home</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="/Blog"><i class="fas fa-book"></i> Blog</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="/Adminlist"><i class="fas fa-user-alt"></i> Admin</a>
    </li>
  </ul>
   <ul class="navbar-nav ml-auto">
       <li class="nav-item">
         <a class="nav-link" href="#">Trung học phổ thông Bạc Liêu Confessions</a>
       </li>
    </ul>
</nav>
<br>
