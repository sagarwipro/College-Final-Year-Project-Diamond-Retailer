<?php
include("../sub/db.php");
$min_price=$_GET['min_price'];
$max_price=$_GET['max_price'];

$r=mysqli_query($con,"select * from product where price between '100' and '200'");
while ($row = mysqli_fetch_assoc($r)){
    echo $row['name'];
}

?>
<html>
<body>
	<?php  echo $row['name']; ?>
</body>
</html>