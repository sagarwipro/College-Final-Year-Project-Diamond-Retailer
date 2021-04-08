<!doctype html>
<html>
<head>
<script src="jquery-3.2.1.min.js"></script>
<script>
$(document).ready(function(e) {
    $('#submit').click(function()
	{
		var name=$('#name').val();
		var contact=$('#contact').val();
		var email=$('#email').val();
		var gender=$('input[name="gender"]:checked').val();
		//var l=$('input[name="hobby[]"]').length;
		var favorite = [];
		$.each($("input[name='hobby[]']:checked"), function(){            
                favorite.push($(this).val());
           });
       var hobby=favorite.join(",");
       var dd=$('#dd').val();
	   var mm=$('#mm').val();
	   var yy=$('#yy').val();
	   var date=dd+'/'+mm+'/'+yy;
	   alert(date);
		$.ajax({
			type:'POST',
			url:'mypage.php',
			data:
			{
				'name':name,
				'contact':contact,
				'email':email,
				'gender':gender,
				'hobby':hobby,
				'date':date	
			},
			success : function(data)
			{
				$('#myresult').html(data);
			
			}
		}); 
	});
});
</script>
<meta charset="utf-8">
<title>Untitled Document</title>
</head>

<body>
<div id="myresult">

</div>
<form>
<table width="400" border="1">
  <tr>
    <td colspan="2">Detail</td>
  </tr>
  <tr>
    <td>name:</td>
    <td><input type="text" name="name" id="name"></td>
  </tr>
  <tr>
    <td>contact:</td>
    <td><input type="text" name="contact" id="contact"></td>
  </tr>
  <tr>
    <td>Email:</td>
    <td><input type="text" name="email" id="email"></td>
  </tr>
  <tr>
    <td>gender</td>
    <td><input type="radio" name="gender" value="male">Male
    	<input type="radio" name="gender" value="female">female</td>
  </tr>
  <tr>
    <td>Hobby:</td>
    <td><input type="checkbox" name="hobby[]" value="developing">Developing
    	<input type="checkbox" name="hobby[]" value="programming">Programming
        <input type="checkbox" name="hobby[]" value="coding">Coding
    </td>
  </tr>
  <tr>
    <td>Dob:</td>
    <td><select id="dd" name="dd">
    		<option>DD</option>
    		<?php for($i=1;$i<=30;$i++){?>
    		<option value="<?php echo $i; ?>"><?php echo $i; ?></option>
            <?php } ?>
    	</select>
        <select id="mm" name="mm">
    		<option>MM</option>
    		<?php for($i=1;$i<=12;$i++){?>
    		<option value="<?php echo $i; ?>"><?php echo $i; ?></option>
            <?php } ?>
    	</select>
        <select id="yy" name="yy">
    		<option>YY</option>
    		<?php for($i=1990;$i<=2010;$i++){?>
    		<option value="<?php echo $i; ?>"><?php echo $i; ?></option>
            <?php } ?>
    	</select>
    </td>
  </tr>
  <tr>
    <td colspan="2"><input type="button" name="submit" id="submit" value="submit"></td>
  </tr>
</table>

<form>
</body>
</html>