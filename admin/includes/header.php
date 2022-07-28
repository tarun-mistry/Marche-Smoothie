<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Admin - Dashboard</title>

  <!-- Custom fonts for this template-->
  <link href="offline/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">

  <!-- Page level plugin CSS-->
  <link href="offline/datatables/dataTables.bootstrap4.css" rel="stylesheet">

  <!-- Custom styles for this template-->
  <link href="css/admin.css" rel="stylesheet">
  <style>
	.navbar {
			margin-bottom: 0;
			border: 0;
			border-radius: 0;
		}
		.text-white {
            color: white;
        }
		.page-content-wrapper {
			padding-top: 50px;
		}
  </style>

</head>

<body id="page-top">

  <nav class="navbar navbar-expand navbar-dark bg-dark static-top">

    <a class="navbar-brand mr-1" href="index.php">Start Bootstrap</a>

    <!-- Navbar Search -->
    <form class="d-none d-md-inline-block form-inline ml-auto mr-0 mr-md-3 my-2 my-md-0">
      <div class="input-group">
        <input type="text" class="form-control" placeholder="Search for..." aria-label="Search" aria-describedby="basic-addon2">
        <div class="input-group-append">
          <button class="btn btn-primary" type="button">
            <i class="fas fa-search"></i>
          </button>
        </div>
      </div>
    </form>

    <!-- Navbar -->
	<nav class="navbar navbar-default navbar-fixed-top">
		<div class="container">
			<a class="text-white">Hello, Admin</a>
		</div>
	</nav>
	
    <ul class="navbar-nav ml-auto ml-md-0">
      <li class="nav-item dropdown no-arrow">
        <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          <i class="fas fa-user-circle fa-fw"></i>
        </a>
        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="userDropdown">
          <a class="dropdown-item" href="#">Settings</a>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="#" data-toggle="modal" data-target="#logoutModal">Logout</a>
        </div>
      </li>
    </ul>

  </nav>

  <div id="wrapper">

    <!-- Sidebar -->
    <ul class="sidebar navbar-nav">
      <li class="nav-item active">
        <a class="nav-link" href="index.php">
          <i class="fas fa-fw fa-tachometer-alt"></i>
          <span>Dashboard</span>
        </a>
      </li>
	  
      <li class="nav-item">
        <a class="nav-link" href="add-smoothies.php">
		  <i class="fas fa-plus-square"></i>
          <span>Add Smoothies</span></a>
      </li>
	  
	  <li class="nav-item">
        <a class="nav-link" href="view-smoothies.php">
          <i class="fas fa-binoculars"></i>
          <span>View Smoothies</span></a>
      </li>
      
	  <li class="nav-item">
        <a class="nav-link" href="all-orders.php">
          <i class="fas fa-sort-amount-down-alt"></i>
          <span>All Orders</span></a>
      </li>
	  
	  <li class="nav-item">
        <a class="nav-link" href="feedback.php">
          <i class="fas fa-comment-alt"></i>
          <span>Feedbacks</span></a>
      </li>
	  
	  <li class="nav-item">
        <a class="nav-link" href="view-report.php">
          <i class="fas fa-flag"></i>
          <span>View Reports</span></a>
      </li>
    </ul>