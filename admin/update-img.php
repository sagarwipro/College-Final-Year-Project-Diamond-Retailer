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
    
    //Delete Image
    if(isset($_GET['del_id'])){
        
        mysqli_query($con,"delete from image where img_id=".$_GET['del_id']);
        header("location:update-img.php");
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

                         <form method="post" enctype="multipart/form-data">
                            <div>
                                <select name="f_type" style="margin-top:10px;" >
                                                    <option value="all">All</option>
                                                    <option value="white">White Diamond</option>
                                                    <option value="fancy">Fancy Diamond</option>
                                                    
                                </select>
                                <button type="submit" name="set" class="btn btn-primary">Set</button>
                            
                            </div>
                        </form>

                        <!-- Image Table -->
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
                                        <img src="<?php echo @$row['data']; ?>" width="200" height="200">
                                        <div style="margin-top:5px;"><a href="update-img.php?del_id=<?php echo $row['img_id']; ?>" style="height:30px; width:30px;" name="<?php echo $row['img_id']; ?>"><img src="images\trash.png" style="width:30px ; height:30px;"> Remove </a>
                                        <a href="update-img-action.php?chn_id=<?php echo $row['img_id']; ?>" style="height:30px; width:30px;" name="<?php echo $row['img_id']; ?>"><img src="images\edit.png" style="width:30px ; height:30px;" >Edit </a>
                                        </div>
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

