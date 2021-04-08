<?php
session_start();
error_reporting(0);
include('includes/config.php');
if(strlen($_SESSION['alogin'])=="")
    {   
        header("Location: index.php"); 
    }
    else
    {
        if(isset($_POST['submit']))
        {
        //$file=$_FILES['image']['tmp_name'];
        //$image= addslashes(file_get_contents($_FILES['image']['tmp_name']));
        //$image_name= addslashes($_FILES['image']['name']);

        //move_uploaded_file($_FILES["image"]["tmp_name"],"upload/" . $_FILES["image"]["name"]);
            $photo="upload/" . $_FILES["image"]["name"];
            $des=$_POST['des'];
            $name=$_POST['name'];
            $image_name = $_FILES['image']['name'];
	        move_uploaded_file($_FILES['image']['tmp_name'],'upload/'.$_FILES['image']['name']);
        

            $a="insert into events(name,image,des) values('$name','$photo','$des')";
            $s=mysqli_query($con,$a);
            if($s)
            {
                  header("location:add-event.php");
            }
            else
            {
                 $msg="event not enterwd currectly";
            }
        
        //move_uploaded_file($_FILES["image"]["tmp_name"],"upload/" . $_FILES["image"]["name"]);
        
        
    }
    $image_data=mysqli_query($con,"select * from events");
    if(isset($_GET['del_id'])){
        
        mysqli_query($con,"delete from events where id=".$_GET['del_id']);
        header("location:add-event.php");
    }
}


        
?>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
    	<meta name="viewport" content="width=device-width, initial-scale=1">
        <title>DIAM| Events </title>
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
                                    <h2 class="title">Add Events</h2>
                                
                                </div>
                                
                                <!-- /.col-md-6 text-right -->
                            </div>
                            <!-- /.row -->
                            <div class="row breadcrumb-div">
                                <div class="col-md-6">
                                    <ul class="breadcrumb">
                                        <li><a href="dashboard.php"><i class="fa fa-home"></i> Home</a></li>
                                
                                        <li class="active">Add event</li>
                                    </ul>
                                </div>
                             
                            </div>
                            <!-- /.row -->
                        </div>
                        <div class="container-fluid">
                           
                        <div class="row">
                                    <div class="col-md-12">
                                        <div class="panel">
                                            <div class="panel-heading">
                                                <div class="panel-title">
                                                    <h5>Fill the Event info</h5>
                                                </div>
                                            </div>
                                            <div class="panel-body">
                                            
                                                <form class="form-horizontal" method="post" enctype="multipart/form-data">
                                              

<div class="form-group">
<label for="default" class="col-sm-2 control-label">Enter Event name:</label>
<div class="col-sm-10">
<input type="text" name="name" class="form-control"  >
</div>
</div>

<div class="form-group">
<label for="default" class="col-sm-2 control-label">Add image:</label>
<div class="col-sm-10">
<input type="file" name="image" class="form-control" >
</div>
</div>

<div class="form-group">
<label for="default" class="col-sm-2 control-label">Event Description:</label>
<div class="col-sm-10">
<input type="text" name="des" class="form-control" >
</div>
</div>
















                                                    

                                                    </div>
                                                    

                                                    
                                                    <div class="form-group">
                                <div class="col-sm-offset-2 col-sm-10">
                            <button type="submit" name="submit" class="btn btn-primary">Add</button>
                                                        </div>
                                                    </div>
                                                </form>
                                                <table>
                                                <?php 
                        //count data
                        
                        $i=0;
                            while ($row = mysqli_fetch_assoc($image_data))
                            { 
                                
                                if($i%2==0)
                                {
                                    ?> <tr> <?php 
                                }
                                ?>
                                    <td >
                                    
                                    <img  src="<?php echo @$row['image']; ?>" width="200" height="200">
                                    <td>
                                    <div class="content">Event Name: <?php echo @$row['name']; ?></div>
                                    <div class="content">Event Description:<?php echo @$row['des']; ?></div>
                                    <div style="margin-top:5px; color:red;"><a href="add-event.php?del_id=<?php echo $row['id']; ?>" style="height:30px; width:30px;" name="<?php echo $row['id']; ?>"><img src="images\trash.png" style="width:30px ; height:30px;"> Remove</div>
                                    </td>
                                    
                                    </td>
                                
                                    <?php $i=$i+1; 
                            }
                        ?>
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
        <script>
            $(function($) {
                $(".js-states").select2();
                $(".js-states-limit").select2({
                    maximumSelectionLength: 2
                });
                $(".js-states-hide").select2({
                    minimumResultsForSearch: Infinity
                });
            });
        </script>
    </body>
</html>