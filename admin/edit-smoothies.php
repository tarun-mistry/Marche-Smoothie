<?php include "includes/header.php"?>
<?php include "classes/smoothies.php"?>
<?php include "classes/Message.php"?>

		
    <div id="content-wrapper">

      <div class="container-fluid">

		<?php
		
				
					$id = $_GET['ID'];
					$smoothie=Smoothie::ReadSmoothiesEdit($id);
						foreach ($smoothie as  $row) {
							$s_name = $row['S_NAME'];
							$ingredient = $row['INGREDIENT'];
							$des = $row['DESCRIPTION'];
							$img = $row['IMAGE'];
						}

				if(isset($_POST["Update"])){	
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
						$smoothieObj->Update($id);
						Message::Show("Your smoothie successfully updated!", Message::$Full_Size, Message::$Success);
					}
				}
				
				
		?>
        <!-- Breadcrumbs-->
        <ol class="breadcrumb">
          <li class="breadcrumb-item">
            <a href="index.php">Dashboard</a>
          </li>
          <li class="breadcrumb-item active">Edit Smoothies</li>
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
                            <input type="text" name="sname" class="form-control" placeholder="Enter Smoothie Name" value="<?php echo $s_name;?>" required>
                        </div>

                        <!--Ingredients -->
                        <div class="md-form">
							<textarea class="form-control md-textarea" name="ings" rows="3" placeholder="Enter Ingredients" value="" required><?php echo htmlspecialchars($ingredient);?></textarea>
                        </div>

						</br>
                        <!-- Description -->
                       <div class="md-form">
                            <textarea class="form-control md-textarea" name="desc" rows="3" placeholder="Enter Description" required><?php echo htmlspecialchars($des);?></textarea>
                        </div><br>

                        <!--Images-->
                        <div class="form-group">
							<!--<label class="form-inline">Select Image</label>
                            <input type="file" name="img" class="form-control-file border" required>-->
							<img src="<?php echo $img; ?>" align="left" width="150px" height="150px" style="border:1px solid #333333; margin-left: 30px;">
							<input type="file" name="image" class="form-control-file border" id="customFile" value=""  required>
							<label class="form-inline" for="customFile">Select Image</label>
                        </div>

                        <!-- Send button -->
						<input type = 'hidden' name= 'ID' value =".$ID." >
                        <input type="submit" name="Update" value="Update Smoothie" class="btn btn-outline-info btn-rounded btn-block z-depth-0 my-4 waves-effect" >

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