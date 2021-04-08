<?php
session_start();
error_reporting(0);
include('includes/config.php');
if(strlen($_SESSION['alogin'])=="")
    {   
    header("Location: index.php"); 
    }
    else{

//$user_id=intval($_GET['user_id']);

//$query = mysqli_query($con,"SELECT * FROM `registration` WHERE `id` = '$user_id' ");
//$fetch_value = mysqli_fetch_assoc($query);
    
    if(isset($_POST['add_img']))
    {
        //$file=$_FILES['image']['tmp_name'];
        //$image= addslashes(file_get_contents($_FILES['image']['tmp_name']));
        $image_name= addslashes($_FILES['image']['name']);

        move_uploaded_file($_FILES["image"]["tmp_name"],"upload/" . $_FILES["image"]["name"]);
        $photo="upload/" . $_FILES["image"]["name"];
        $type=$_POST['type'];
        

        $m=mysqli_query($con,"insert into image(name,data,type) values('$image_name','$photo','$type') ");
        //move_uploaded_file($_FILES["image"]["tmp_name"],"upload/" . $_FILES["image"]["name"]);
        if($m)
        {
            $msg="Photo Upload Sucessfully !";
            header("location:add-img.php");
        }
        else{
            $msg="Invalid File !";
        }
        
    }
    //Fetch Data from Image Table
    $image_data=mysqli_query($con,"select * from image");
    if(isset($_POST['set']))
    {

    
        if($_POST['f_type']=="all")
        
            {
                $image_data=mysqli_query($con,"select * from image");
            }
            elseif($_POST['f_type']=="white")
            {
                $image_data=mysqli_query($con,"select * from image where type='white'");
            }
            elseif($_POST['f_type']=="fancy")
            {
                $image_data=mysqli_query($con,"select * from image where type='fancy'");
            }  
            
        
    }
    
    
}

?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
    	<meta name="viewport" content="width=device-width, initial-scale=1">
        <title>DIAM | Add photo  </title>
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
                            <div class="row page-title-div">
                                <div class="col-md-6">
                                    <h2 class="title">Add image</h2>
                                
                                </div>
                                
                                <!-- /.col-md-6 text-right -->
                            </div>
                            <!-- /.row -->
                            
                            <!-- /.row -->
                        </div>
                        <div class="container-fluid">
                           
                        <div class="row">
                            <form class="form-horizontal" method="post" enctype="multipart/form-data">
                                <div class="form-group">
                                    <label for="default" class="col-sm-2 control-label">Add  on gallery :</label>
                                        <div class="col-sm-10">
                                            <input type="file" name="image" class="form-control" style="width:220px; color:red;" id="fullanme"  required="required" accept=".png, .jpg, .jpeg">
                                            <select name="type" style="margin-top:10px;">
                                                <option value="white">White Diamond</option>
                                                <option value="fancy">Fancy Diamond</option>
                                                
                                            </select>
                                        </div>
                                </div>
                                    <div class="form-group">
                                        <div class="col-sm-offset-2 col-sm-10">
                                            <button type="submit" name="add_img" class="btn btn-primary">Upload</button>
                                            
                                        </div>
                                        
                                    </div>
                            </form>
                            <!-- Show Image -->
                            
                            <!-- /.row -->
                            
                            <!-- /.row -->
                        </div>
                            
                            
                            
                            <table border="1px">
                            <tbody>
                        <?php 
                        //count data
                        
                        $i=0;
                            while ($row = mysqli_fetch_assoc($image_data))
                            { 
                                
                                if($i%4==0)
                                {
                                    ?> <tr> <?php 
                                }
                                ?>
                                    <td>
                                    <img  src="<?php echo @$row['data']; ?>" width="200" height="200">
                                    
                                    
                                    </td>
                                
                                    <?php $i=$i+1;
                            }
                        ?>



                            </tbody>
                            </table>
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

