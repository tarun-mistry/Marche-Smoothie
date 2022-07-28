<?php include "includes/header.php"?>
<?php include "classes/smoothies.php"?>
<?php include "classes/Message.php"?>

		
    <div id="content-wrapper">

		<div class="container-fluid">

		<?php
				if(isset($_POST["Submit"])){	
						$S_NAME = $_POST["sname"];
						$INGREDIENT = $_POST["ings"];
						$DESCRIPTION = $_POST["desc"];
							
								$cl=$_FILES["image"]["name"];
								$path="img/".$cl;
								move_uploaded_file($_FILES["image"]["tmp_name"],$path);
						$IMAGE = $path;
						//$img = "/img/" . $newfilename;
						
				if( empty($S_NAME) || empty($INGREDIENT) || empty($DESCRIPTION) || empty($IMAGE))
					{
						Message::Show("Enter a value for each required field !", Message::$Full_Size, Message::$Error);
					}
					else
					{
						$smoothieObj = new smoothie($S_NAME, $INGREDIENT, $DESCRIPTION, $IMAGE);// class object
						$smoothieObj->Insert();
						Message::Show("Your smoothie successfully added!", Message::$Full_Size, Message::$Success);
					}
				}
		?>
        <!-- Breadcrumbs-->
        <ol class="breadcrumb">
          <li class="breadcrumb-item">
            <a href="index.php">Dashboard</a>
          </li>
          <li class="breadcrumb-item active">Add Smoothies</li>
        </ol>

        <!-- Page Content -->
          <!-- Material form contact -->
            <div class="card">

                <h5 class="card-header white-text text-left py-4">
                    <strong>Enter Smoothies Details</strong>
                </h5>

                <!--Card content-->
                <div class="card-body">
                    <form class="text-center" style="color: #757575;" action="#" method="POST" enctype="multipart/form-data">

                        <!--Smoothies Name -->
                        <div class="form-group">
                            <input type="text" name="sname" class="form-control" placeholder="Enter Smoothie Name" required>
                        </div>

                        <!--Ingredients -->
                        <div class="md-form">
							<textarea class="form-control md-textarea" name="ings" rows="3" placeholder="Enter Ingredients" required></textarea>
                        </div>

						</br>
                        <!-- Description -->
                       <div class="md-form">
                            <textarea class="form-control md-textarea" name="desc" rows="3" placeholder="Enter Description" required></textarea>
                        </div><br>

                        <!--Images-->
                        <div class="form-group">
							<!--<label class="form-inline">Select Image</label>
                            <input type="file" name="img" class="form-control-file border" required>-->
							
							<input type="file" name="image" class="form-control-file border" id="customFile" required>
							<label class="form-inline" for="customFile">Select Image</label>
                        </div>

                        <!-- Send button -->
                        <input type="submit" name="Submit" value="Add Smoothie" class="btn btn-outline-info btn-rounded btn-block z-depth-0 my-4 waves-effect" >

                    </form>
                </div>
            </div><br>
          <!-- Material form contact -->
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