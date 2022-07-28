<?php include "includes/header.php"?>
<?php include "classes/ViewUser.php"?>

    <div id="content-wrapper">

      <div class="container-fluid">

        <!-- Breadcrumbs-->
        <ol class="breadcrumb">
          <li class="breadcrumb-item">
            <a href="index.php">Dashboard</a>
          </li>
          <li class="breadcrumb-item active">User Detail</li>
        </ol>


<?php 
          echo "<table border = '0' class='table table-sm table-responsive table-hover'>";
      echo "<thead class='thead-dark text-center justify'>";
        echo "<tr>";
          echo "<th>ID</th>";
           echo "<th>NAME</th>";
          echo "<th>CONTACT_NO</th>";
          echo "<th>EMAIL</th>";
          echo "<th>ADDRESS 1</th>";
          echo "<th>ADDRESS 2</th>";
          echo "<th>CITY</th>";
          echo "<th>PROVINCE</th>";
          echo "<th>POSTAL CODE</th>";
         
        echo "</tr>";
            echo "</thead>";
           

  if(isset($_GET['ViewUserDetail'])){
$result = ViewUser::ReadUser($_GET['ViewUserDetail']);

    foreach($result as $row){
        
      echo "<tr>";
        echo "<td>";
          echo "<font color = #CC0000>";
            echo "<h6>". $row['ID']."</h6>";
        echo "</td>";
        
        echo "<td>";
          echo "<font color = #CC0000>";
            echo "<h6>". $row['F_NAME']." ".$row['L_NAME']."</h6>";
        echo "</td>";
        
        echo "<td>";
            echo "<h6>". $row['CONTACT_NO']."</h6>";
          echo "</font>";
        echo "</td>";

        echo "<td>";
            echo "<h6>". $row['EMAIL']."</h6>";
          echo "</font>";
        echo "</td>";

        echo "<td>";
            echo "<h6>". $row['ADDRESS1']."</h6>";
          echo "</font>";
        echo "</td>";

        echo "<td>";
            echo "<h6>". $row['ADDRESS2']."</h6>";
          echo "</font>";
        echo "</td>";

        echo "<td>";
            echo "<h6>". $row['CITY']."</h6>";
          echo "</font>";
        echo "</td>";
        echo "<td>";
            echo "<h6>". $row['PROVINCE']."</h6>";
          echo "</font>";
        echo "</td>";
        echo "<td>";
            echo "<h6>". $row['POSTAL_CODE']."</h6>";
          echo "</font>";
        echo "</td>";
       
        
      
          
      echo "</tr>";
        }
      }
    
    
    echo "</table>";
      
        
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