<?php
include('includes/config.php');
$ch=$_GET['chn_id'];
$m="";
if(isset($_POST['up']))
{
    $image_name= addslashes($_FILES['image']['name']);
    $photo="upload/" . $_FILES["image"]["name"];
    //move_uploaded_file($_FILES["image"]["tmp_name"],"upload/" . $_FILES["image"]["name"]);
    $query=mysqli_query($con,"UPDATE `image` SET `name`='".$image_name."' , data='".$photo."'  WHERE img_id=".$ch);
   // mysqli_query($con,"UPDATE `image` SET name='".$image_name."', data='".$photo."'  WHERE id='".$img_id."'");
    
    if($query)
    {
        header("location:update-img.php");
    }
    else{
        $m="error content";
    }
}




?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
    	<meta name="viewport" content="width=device-width, initial-scale=1">
        <title>DIAM| Update Gallery < </title>
        <link rel="stylesheet" href="css/bootstrap.min.css" media="screen" >
        <link rel="stylesheet" href="css/font-awesome.min.css" media="screen" >
        <link rel="stylesheet" href="css/animate-css/animate.min.css" media="screen" >
        <link rel="stylesheet" href="css/lobipanel/lobipanel.min.css" media="screen" >
        <link rel="stylesheet" href="css/prism/prism.css" media="screen" >
        <link rel="stylesheet" href="css/select2/select2.min.css" >
        <link rel="stylesheet" href="css/main.css" media="screen" >
          <link rel="icon" type="image/png" href="images/d1.png">
        <script src="js/modernizr/modernizr.min.js"></script>
    </head>
    <body class="top-navbar-fixed">
        <div class="main-wrapper">

            <!-- ========== TOP NAVBAR ========== -->
  <?php include('includes/topbar.php');?> 
            <!-- ========== WRAPPER FOR BOTH SIDEBARS & MAIN CONTENT ========== -->
            <div class="content-wrapper">
                <div class="content-container">

                    <!-- ========== LEFT SIDEBAR ========== -->
                   <?php include('includes/leftbar.php');?>  
                    <!-- /.left-sidebar -->

                    <div class="main-page">

                     
                        <div class="container-fluid">

                         <form  method="post"  enctype="multipart/form-data">
        
       
        <label>Update Image:</label> <input type="file" class="btn btn-success" name="image" value="" /><br /> <br />
        <p> <?php  echo $m; ?></p>
        <p><?php echo @$image_name; ?></p>
        

        <input type="submit" class="btn btn-primary" name="up"  value="Update Profile" />
    </form>

                        <!-- Image Table -->
                           
                        </div>
                </div>
            </div>
                                    <!-- /.col-md-12 -->
                                </div>
                    </div>
                </div>
                <!-- /.content-container -->
            </div>
            <!-- /.content-wrapper -->
        </div>
        <!-- /.main-wrapper -->
        <script src="js/jquery/jquery-2.2.4.min.js"></script>
        <script src="js/bootstrap/bootstrap.min.js"></script>
        <script src="js/pace/pace.min.js"></script>
        <script src="js/lobipanel/lobipanel.min.js"></script>
        <script src="js/iscroll/iscroll.js"></script>
        <script src="js/prism/prism.js"></script>
        <script src="js/select2/select2.min.js"></script>
        <script src="js/main.js"></script>
        
    </body>
</html>


<html>
<body>

    </body>
    </html>
    