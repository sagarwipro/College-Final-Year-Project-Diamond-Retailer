<?php
include("sub/db.php");
$min_price=$_GET['min_price'];
$max_price=$_GET['max_price'];
$min_carat=$_GET['min_carat'];
$max_carat=$_GET['max_carat'];
$shape=$_GET['shape'];
$value3=$_GET['value3'];
$val3=$_GET['val3'];

$array = explode(",", $value3);
$array1 = explode(",", $val3);




$r=mysqli_query($con,"select * from product where (price between '$min_price' and '$max_price') and (carat between '$min_carat' and '$max_carat') and (shape='$shape') and (clarity IN ('".implode("','",$array)."')) and (cut IN ('".implode("','",$array1)."'))");
//echo "select * from product where (price between '$min_price' and '$max_price') and (carat between '$min_carat' and '$max_carat') and (shape='$shape') and (clarity IN ('".implode("','",$array)."')";
//echo "select * from product where (price between '$min_price' and '$max_price') and (carat between '$min_carat' and '$max_carat') and (shape='$shape') and (clarity IN ('".implode("','",$array)."')) and (cut IN ('".implode("','",$array1)."'))"

//$a=mysqli_query($con,"select * from product where  clarity IN ('".implode("','",$array)."')");
//echo "select * from product where clarity IN ('".implode("','",$array)."')";
//print_r ($array);
?>
<html>
<body>
<div class="panel-body p-20">


                                                <table  id="example" class="display table table-striped table-bordered" cellspacing="05" width="10%">
                                                    <thead  border="solid">
                                                        <tr >
                                                            <td align="center">Shape</b></td>
                                                            <td align="center">Price</td>
                                                            <td align="center">Carat</td>
                                                            <td align="center">Cut</td>
                                                            <td align="center">Color</td>
                                                            <td align="center">Clarity</td>
                                                            <td align="center">View</td>
                                                            
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                    <?php 


while ($row = mysqli_fetch_assoc($r)){ ?>
                                                            
                                                           <tr align="center">
                                                            <td><?php echo @$row['shape'] ?></td>
                                                            <td>$<?php echo @$row['price'] ?></td>
                                                            <td><?php echo @$row['carat']?></td>
                                                            <td><?php echo @$row['cut'] ?></td>
                                                            <td><?php echo @$row['color'] ?></td>
                                                            <td><?php echo @$row['clarity'] ?></td>
                                                            
                                                            <td><a href="viewproduct.php?id=<?php echo $row['id']?>" target="_blank"<i class="fa fa-eye" title="Edit Record"></i> </a>
                                                            </td>
</tr>
<?php } ?>
     
</tbody>
        


