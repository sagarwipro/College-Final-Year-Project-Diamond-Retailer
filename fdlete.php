<?php
include 'sub/db.php';
$min_price = $_GET['min_price'];
$max_price = $_GET['max_price'];
$min_age = $_GET['min_age'];
$max_age = $_GET['max_age'];
$type = $_GET['type'];

//$r=mysqli_query($con,"select * from product where (age between '$min_age' and '$max_age') and (price between '$min_price' and '$max_price') and (type='$type')");

?>
<html>

<body>
        <?php //while ($row = mysqli_fetch_assoc($r))   {?>
        <?php   echo $min_price; //$row['name'];?> <br>

</body>

</html>