<!DOCTYPE HTML>
<!--
    Industrious by TEMPLATED
    templated.co @templatedco
    Released for free under the Creative Commons Attribution 3.0 license (templated.co/license)
-->
<?php 
include("sub/db.php");

session_start();


if(!isset($_SESSION['email']))
   {
       header("location:login.php");
   }
   $email=$_SESSION['email'];
   //$a="SELECT company_name  FROM registration WHERE email =  ".$email" '";
   $query = mysqli_query($con,"SELECT * FROM `registration` WHERE `email` = '$email' ");
 
  
  $row = mysqli_fetch_assoc($query);
?>
<html>
    <head>
        <style>
            .irs-grid-pol {
                position: absolute;
    bottom: 10px;
    white-space: nowrap;
    text-align: center;
    font-size: 15px;
    line-height: 22px;
    padding: 0 3px;
    color: #e41616;
            }
            .irs-grid-pol-1 {
                position: absolute;
    bottom: 10px;
    white-space: nowrap;
    text-align: center;
    font-size: 15px;
    line-height: 22px;
    padding: 0 3px;
    color: #e41616;
            }
            
            .irs-grid-text {
        position: absolute;
        bottom: 22px;
        white-space: nowrap;
        text-align: center;
        font-size: 13px; line-height: 9px;
        padding: 0 3px;
        color: #000;
            }
            .irs-grid-text-1 {
        position: absolute;
        bottom: 22px;
        white-space: nowrap;
        text-align: center;
        font-size: 13px; line-height: 9px;
        padding: 0 3px;
        color: #000;
            }
    </style>
        

  <link rel="stylesheet" href="https://code.jquery.com/ui/1.10.3/themes/smoothness/jquery-ui.css" /> 
 
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>  
		<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>  

<title>Product</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
		<meta name="description" content="" />
		<meta name="keywords" content="" />
        <link rel="icon" type="image/png" href="images/d1.png">
		<link rel="stylesheet" href="assets/css/main.css" />
        

        
</head>
    
    
    <body >
    <!-- Header -->
			<header id="header">
				<a class="logo" href="index.php">Logout  <?php  echo @$row['contact_person']; ?></a>
				<nav>
					<a href="#menu">Menu</a>
				</nav>
			</header>

		<!-- Nav -->
			<nav id="menu">
				<ul class="links">
                <li><a href="index.php">Home</a></li>
					<li><a href="gallery.php">Gallery</a></li>
					<li><a href="product.php">Product</a></li>
					<li><a href="events.php">Events</a></li>
					<li><a href="about.php">About us</a></li>
				</ul>
			</nav>

		<!-- Heading -->
			<div id="heading" >
				<h1>Product Information</h1>
            </div>
            
        

        <!-- Main -->
           
  
  <h2></h2>
  <form >
  <div class="container-fluid">
  <div style="
    margin-left: 31px;
    margin-top: 22px;
    margin-bottom: 25px;"> 
  
            <div class="col-4 col-12-small">
				<input type="radio" id="radio-1" class="radi" name="radi" value="pear" checked>
					<label for="radio-1">Pear</label>
			     
		
				<input type="radio" id="radio-2" class="radi" value="heart" name="radi">
					<label for="radio-2">Heart</label>
				<input type="radio" id="radio-3" class="radi" value="round" name="radi">
					<label for="radio-3">Round</label>
		   
			    <input type="radio" id="radio-4" class="radi" value="marquise" name="radi">
                    <label for="radio-4">Marquise</label>
                <input type="radio" id="radio-5" class="radi" name="radi" value="oval">
					<label for="radio-5">Oval</label>
			     
		
				<input type="radio" id="radio-6" class="radi" value="emerald" name="radi">
					<label for="radio-6">Emerald</label>
				<input type="radio" id="radio-7" class="radi" value="cushion" name="radi">
					<label for="radio-7">Cushion</label>
		   
			    <input type="radio" id="radio-8" class="radi" value="princess" name="radi">
			        <label for="radio-8">Princess</label>
		</div>
    </div> 
    <div class="row">
		<div class="col-6 col-12-medium">
        <div style="margin-left:30px;">
        <h2 style="font-size:30px;font-weight: bold;">Price</h2>            
        <div id="rangedval">
               <div style="font-weight: 600;"> Range Value: $<span id="rangeval">800 - 6000</span></div>
            </div>
            </div>
            <div id="rangeslider" class="slide"></div> 
        </div>
        <div class="col-6 col-12-medium">
        <div style="margin-left:30px;font-weight:500;">
        <h2 style="font-size:30px;font-weight: bold;">Carat</h2>            
        <div id="rangedval1">
        <div style="font-weight: 600;">Range Value: <span id="rangeval1">3-15</span></div>
            </div>
            </div>
        <div id="rangeslider1" class="slide"></div> 
        </div>  
    </div> 
    <div class="row">
		<div class="col-6 col-12-medium">
        <div style="margin-left:30px;">
        <h2 style="font-size:30px;font-weight: bold;">Cut</h2>            
            </div>
            <div id="rangeslider2" class="slide">
                <div>
                    <span class="irs-grid-text" style="left:9%">Good</span>
                    <span class="irs-grid-text" style="left:30%">Very Good</span>
                    <span class="irs-grid-text" style="left:58%">Ideal</span>
                    <span class="irs-grid-text" style="left:80%">Very Ideal</span>

                </div>
                <div >
                <span class="irs-grid-pol-1" style="left:-0.5%">|</span>
                    <span class="irs-grid-pol" style="left:24%">|</span>
                    <span class="irs-grid-pol" style="left:49%">|</span>
                    <span class="irs-grid-pol" style="left:74%">|</span>
                    <span class="irs-grid-pol-1" style="left:98%">|</span>

                </div> 
            </div> 
        </div>
        <div class="col-6 col-12-medium">
        <div style="margin-left:30px;">
        <h2 style="font-size:30px;font-weight: bold;">Clarity</h2>            
            </div>
            <div id="rangeslider3" class="slide">
                <div>
                    <span class="irs-grid-text-1" style="left:5%">SI2</span>
                    <span class="irs-grid-text-1" style="left:22%">SI1</span>
                    <span class="irs-grid-text-1" style="left:38%">VS2</span>
                    <span class="irs-grid-text-1" style="left:55%">VS1</span>
                    <span class="irs-grid-text-1" style="left:71%">VVS2</span>
                    <span class="irs-grid-text-1" style="left:87%">VVS1</span>
                </div>
                <div>
                <span class="irs-grid-pol-1" style="left:-0.5%">|</span>                    
                <span class="irs-grid-pol-1" style="left:32%">|</span>
                    <span class="irs-grid-pol-1" style="left:48.5%">|</span>
                    <span class="irs-grid-pol-1" style="left:65.5%">|</span>
                    <span class="irs-grid-pol-1" style="left:82%">|</span>
                    <span class="irs-grid-pol-1" style="left:15.5%">|</span>
                    <span class="irs-grid-pol-1" style="left:98%">|</span>

                </div> 
            </div> 
        </div>
    </div>   
</div>
    
             
                   
                     
         <!--<input type="text" id="textbox1" /> -->
                       
</form>
                 
<div class="panel-body">
            

                                                <table  id="example" class="display table table-striped table-bordered" cellspacing="05" width="10%">
                                                    <thead  border="2px solid">
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
            $r=mysqli_query($con,"select * from product ");


while ($row = mysqli_fetch_assoc($r)){ ?>

                                                            <tr align="center">
                                                            <td><?php echo @$row['shape'] ?></td>
                                                            <td>$<?php echo @$row['price'] ?></td>
                                                            <td><?php echo @$row['carat']?></td>
                                                            <td><?php echo @$row['cut'] ?></td>
                                                            <td><?php echo @$row['color'] ?></td>
                                                            <td><?php echo @$row['clarity'] ?></td>
                                                            
                                                            <td><a href="viewproduct.php?user_id=<?php echo $row['id']?>"><i class="fa fa-eye" title="Edit Record"></i> </a>
                                                            </td>
</tr>
<?php } ?>
     
</tbody>
                                                </table></div>
              
  
  
             <div class="content1"></div>      
</div>
</div>
<!-- Footer -->
<footer id="footer">
				<div class="inner">
					<div class="content">
						<section>
                        	<h3><i class="fa fa-diamond"> Amrut Exports</i></h3>
							<p><b>Address</b><br />1. GE-4030, 4th Floor, Bharat Diamond Bourse, BKC, Bandra East, Mumbai-400 051
Tel : +91 22 42457777 / 09 / Fax : +91 22 23682006
<br/>
2. Vraj Shila, Kapodra Char Rasta, Varachha Road, Surat-395 006
Tel : +91 261 2572563 / 64 / 65 Fax : +91 261 2580789</p>
									
							<p><b>Contact</b><br />
                            Name :   MUKESHBHAI DHAMELIYA<br />
 						    Email : mukesh8803@gmail.com<br />
   							Phone No. : +91 9879508803</p>
									
						</section>
						<section>
							<h4>Menu</h4>
							<ul class="alt">
							<li><a href="index.php">Home</a></li>
							<li><a href="gallery.php">Gallery</a></li>
							<li><a href="product.php">Product</a></li>
							<li><a href="events.php">Events</a></li>
							<li><a href="about.php">About us</a></li>
							
								
							</ul>
						</section>
						<section>
							
							<ul class="plain">
								<li><a href="#"><i class="icon fa-twitter">&nbsp;</i>Twitter</a></li>
								<li><a href="#"><i class="icon fa-facebook">&nbsp;</i>Facebook</a></li>
								<li><a href="#"><i class="icon fa-instagram">&nbsp;</i>Instagram</a></li>
								<li><a href="#"><i class="icon fa-github">&nbsp;</i>Github</a></li>
							</ul>
						</section>
					</div>
					<div class="copyright">
						@2018 Amrut Exports
					</div>
				</div>
			</footer>

            <script>

            

  
  $('#rangeslider').slider({
    range: true,
    min: 300,
    max: 6000,
    step:5,
    animate:true,
   

    values: [600,1700],
    slide: function( event, ui ) {
      $('#rangeval').html(ui.values[0]+" - "+ui.values[1]);
    },
    
  });
  $('#rangeslider1').slider({
    range: true,
    min: 0.5,
    max: 30,
    values: [ 3,15],
    step:0.05,
    slide: function( event, ui ) {
      $('#rangeval1').html(ui.values[0]+" - "+ui.values[1]);
    },
    
  });

  { var arrCodes = [
    1,2,3,4,5
];
$("#rangeslider2").slider({
    
    orientation: "horizontal",
    range: true,
    min: 0,
    max: arrCodes.length - 1,
    values: [0, arrCodes.length - 1],
    slide: function (event, ui) {
        
        $("#rangevalue2").val("Min: " + arrCodes[ui.values[0]] + " - Max: " + arrCodes[ui.values[1]]);
    }
});

$('#rangevalue2').val(arrCodes[$("#rangeslider2").slider("values", 0)] + " - " + arrCodes[$("#slider-range").slider( "values", 1 )] );
}
{ var arrCodes = [
    1,2,3,4,5,6,7
];
$("#rangeslider3").slider({
    orientation: "horizontal",
    range: true,
    min: 0,
    max: arrCodes.length - 1,
    values: [0, arrCodes.length - 1],
    slide: function (event, ui) {
        

        $("#rangevalue3").val("Min: " + arrCodes[ui.values[0]] + " - Max: " + arrCodes[ui.values[1]]);

    }
});

$('#rangevalue3').val(arrCodes[$("#rangeslider3").slider("values", 0)] + " - " + arrCodes[$("#slider-range").slider( "values", 1 )] );

  

    
}
  
  
  //$('.radi').change(function() {
    //    $('#textbox1').val($(this).val());
      //  var shape = $(this).val();        
    //});
    



 
  
  
    var loader="<img src='images/ajax-loader.gif' />";

    $('.ui-slider-handle').click(function(){
       $('.content1').html(loader);
   
        var min_price=$( "#rangeslider" ).slider( "values", 0 );
        var max_price=$( "#rangeslider" ).slider( "values", 1 );
        var min_carat=$( "#rangeslider1" ).slider( "values", 0 );
        var max_carat=$( "#rangeslider1" ).slider( "values", 1 );
        var val1 = $("#rangeslider2").slider("values", 0);
        var val2 = $("#rangeslider2").slider("values", 1);
        var value1 = $("#rangeslider3").slider("values", 0);
        var value2 = $("#rangeslider3").slider("values", 1);
        if($('.radi').is(":checked"))
        {
            var shape = $("input[name='radi']:checked").val();
        }
        {
            var i,value3=[];
            var value4=['si2','si1','vs2','vs1','vvs2','vvs1'];
            var j=0;
            for(i=value1;i<value2;i++)
            {
                value3[j]=value4[i];
                j++;
            }
        }
        {
            var i,val3=[];
            var val4=['good','verygood','ideal','veryideal'];
            var k=0;
            for(i=val1;i<val2;i++)
            {
                val3[k]=val4[i];
                k++;
            }
        }
        aj(min_price,max_price,min_carat,max_carat,shape,value3,val3) ;      
         
 });
 $('.ui-slider-handle').click(function(){
       $('.content1').html(loader);
   
         var min_price=$( "#rangeslider" ).slider( "values", 0 );
         var max_price=$( "#rangeslider" ).slider( "values", 1 );
         var min_carat=$( "#rangeslider1" ).slider( "values", 0 );
         var max_carat=$( "#rangeslider1" ).slider( "values", 1 );
         var val1 = $("#rangeslider2").slider("values", 0);
         var val2 = $("#rangeslider2").slider("values", 1);
         var value1 = $("#rangeslider3").slider("values", 0);
         var value2 = $("#rangeslider3").slider("values", 1);
        if($('.radi').is(":checked")) 
        {
            var shape = $("input[name='radi']:checked").val();
        }
        {
            var i,value3=[];
            var value4=['si2','si1','vs2','vs1','vvs2','vvs1'];
            var j=0;
            for(i=value1;i<value2;i++)
            {
                value3[j]=value4[i];
                j++;
            }
        }
        {    
            var i,val3=[];
            var val4=['good','verygood','ideal','veryideal'];
            var k=0;
            for(i=val1;i<val2;i++)
            {
                val3[k]=val4[i];
                k++;
            }
        } 
        aj(min_price,max_price,min_carat,max_carat,shape,value3,val3) ;      
         
 });

    

    $('.radi').click(function(){
        var shape=   $("input[name='radi']:checked").val();
        var min_price=$( "#rangeslider" ).slider( "values", 0 );
        var max_price=$( "#rangeslider" ).slider( "values", 1 );
        var min_carat=$( "#rangeslider1" ).slider( "values", 0 );
        var max_carat=$( "#rangeslider1" ).slider( "values", 1 );
        var value1 = $("#rangeslider3").slider("values", 0);
        var value2 = $("#rangeslider3").slider("values", 1);
        var val1 = $("#rangeslider2").slider("values", 0);
        var val2 = $("#rangeslider2").slider("values", 1);
        {
            var i,value3=[];
            var value4=['si2','si1','vs2','vs1','vvs2','vvs1'];
            var j=0;
            for(i=value1;i<value2;i++)
            {
                value3[j]=value4[i];
                j++;
            }
        }
        {    
    
            var i,val3=[];
            var val4=['good','verygood','ideal','veryideal'];
            var k=0;
            for(i=val1;i<val2;i++)
            {
                val3[k]=val4[i];
                k++;
            }
        }    
         
        aj(min_price,max_price,min_carat,max_carat,shape,value3,val3) ;  

    });



   $('.ui-slider-handle').click(function(){
       $('.content1').html(loader);
   
        var min_price=$( "#rangeslider" ).slider( "values", 0 );
        var max_price=$( "#rangeslider" ).slider( "values", 1 );
        var min_carat=$( "#rangeslider1" ).slider( "values", 0 );
        var max_carat=$( "#rangeslider1" ).slider( "values", 1 );
        var value1 = $("#rangeslider3").slider("values", 0);
        var value2 = $("#rangeslider3").slider("values", 1);
        var val1 = $("#rangeslider2").slider("values", 0);
        var val2 = $("#rangeslider2").slider("values", 1);
        if($('.radi').is(":checked")) 
        {
            var shape = $("input[name='radi']:checked").val();
        }
        {
            var i,value3=[];
            var value4=['si2','si1','vs2','vs1','vvs2','vvs1'];
            var j=0;
            for(i=value1;i<value2;i++)
            {
            value3[j]=value4[i];
            j++;
            } 
        }
        {
            var i,val3=[];
            var val4=['good','verygood','ideal','veryideal'];
            var k=0;
            for(i=val1;i<val2;i++)
            {
                val3[k]=val4[i];
                k++;
            }
        } 
        aj(min_price,max_price,min_carat,max_carat,shape,value3,val3) ;  
 });



  

</script>
<script src="func1.js" type="text/javascript"></script>

    </body>
<style>
div.ui-slider-range.ui-widget-header {
    background: #ff3333;
    display: flex;
}
div.slide{
    margin: 30px;
    width: 483px;
}
div.set{
    display:inline-block;
}
</style> 
<!-- <script src="assets/js/jquery.min.js"></script> -->
			<script src="assets/js/browser.min.js"></script>
			<script src="assets/js/breakpoints.min.js"></script>
			<script src="assets/js/util.js"></script>
			<script src="assets/js/main.js"></script>
       
</html>

