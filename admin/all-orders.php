<?php include "includes/header.php"?>
<?php include "classes/orders.php"?>

    <div id="content-wrapper">

      <div class="container-fluid">

        <!-- Breadcrumbs-->
        <ol class="breadcrumb">
          <li class="breadcrumb-item">
            <a href="index.php">Dashboard</a>
          </li>
          <li class="breadcrumb-item active">All Orders</li>
        </ol>



<?php 
          echo "<table border = '0' class='table table-sm table-responsive table-hover'>";
      echo "<thead class='thead-dark text-center justify'>";
        echo "<tr>";
          echo "<th>Order ID</th>";
           echo "<th>Customer ID</th>";
          echo "<th>Customer Name</th>";
          echo "<th>Smoothie 1</th>";
          echo "<th>Smoothie 2</th>";
          echo "<th>Smoothie 3</th>";
          echo "<th>Smoothie 4</th>";
          echo "<th>Smoothie 5</th>";
          echo "<th>Smoothie 6</th>";
          echo "<th>View User Detail</th>";
        echo "</tr>";
            echo "</thead>";
        $result = orders::ReadOrders();
    foreach($result as $row){
      
      echo "<tr>";
        echo "<td>";
          echo "<font color = #CC0000>";
            echo "<h6>". $row['orderid']."</h6>";
        echo "</td>";
        
        echo "<td>";
          echo "<font color = #CC0000>";
            echo "<h6>". $row['orderuserid']."</h6>";
        echo "</td>";
        
        echo "<td>";
            echo "<h6>". $row['userfname']." " . $row['userlname']."</h6>";
          echo "</font>";
        echo "</td>";
       
        
        echo "<td>";
          echo "<h6>". $row['smoothie1']."</h6>";
        echo "</td>";
        echo "<td>";
          echo "<h6>". $row['smoothie2']."</h6>";
        echo "</td>";
        echo "<td>";
          echo "<h6>". $row['smoothie3']."</h6>";
        echo "</td>";
        echo "<td>";
          echo "<h6>". $row['smoothie4']."</h6>";
        echo "</td>";
        echo "<td>";
          echo "<h6>". $row['smoothie5']."</h6>";
        echo "</td>";
        echo "<td>";
          echo "<h6>". $row['smoothie6']."</h6>";
        echo "</td>";
         echo "<td>";
          echo "<a href='viewuserdetails.php?ViewUserDetail=".$row['orderuserid']."' ><button type='button' class='btn btn-push btn-info btn-xs' title='View User Details' >View User Details</button></a>";
        echo "</td>";
     
   
          
      echo "</tr>";
    
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