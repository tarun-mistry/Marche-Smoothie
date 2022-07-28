<?php include "includes/header.php"?>
<?php include "classes/smoothies.php"?>
<?php
if(isset($_POST['delete'])){
	$ID = $_POST['ID'];
	Smoothie::DeleteSmoothies($ID);
}
$smths = Smoothie::ReadSmoothies();
?>
    <div id="content-wrapper">

      <div class="container-fluid">

        <!-- Breadcrumbs-->
        <ol class="breadcrumb">
          <li class="breadcrumb-item">
            <a href="index.php">Dashboard</a>
          </li>
          <li class="breadcrumb-item active">View Smoothies</li>
        </ol>

        <!-- Page Content -->

		<?php		
			Smoothie::Display($smths);
		?>
        

      </div>
      <!-- /.container-fluid -->

      <!-- Sticky Footer -->
      <footer class="sticky-footer">
        <div class="container my-auto">
          <div class="copyright text-center my-auto">
            <span>Copyright © Your Website 2019</span>
          </div>
        </div>
      </footer>

    </div>
    <!-- /.content-wrapper -->
<?php include "includes/footer.php"?>