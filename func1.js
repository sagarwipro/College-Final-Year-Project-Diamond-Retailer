


function aj(min_price,max_price,min_carat,max_carat,shape,value3,val3){
    var qs="min_price="+min_price+"&max_price="+max_price+"&min_carat="+min_carat+"&max_carat="+max_carat+"&shape="+shape+"&value3="+value3+"&val3="+val3;
    $.ajax({
            url:'productaction.php',
             type:'GET',
             data:qs,
             success:function(output){
                    $('.panel-body').hide();
                     $('.content1').fadeOut('slow',function(){
                         $('.content1').html(output).fadeIn('fast');
                     
                     });
                     
                 
             } 
            }); 
}
