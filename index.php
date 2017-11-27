<?php include('include/link.php');?>
<?php include('include/menu.php');?>

<script>
	

		$(function(){
			
			
			$(".dropdownContent").click(function(){
				
				windowsize = $(window).width();
  if (windowsize < 730) {  //you can put the size that you are working with
   	 $(".mainHeader nav").toggle();
  }
				
				
				
			
			
			});
			
			
			$("#hamburgerMenu").click(function(){
				
				$(".mainHeader nav").toggle();
				
			
			
			});

			$(window).resize(function() {
  windowsize = $(window).width();
  if (windowsize > 730) {  //you can put the size that you are working with
   	 $(".mainHeader nav").css("display","block");
  }else
   	 $(".mainHeader nav").css("display","none");
})
			
			
		}); 
		</script>
<?php
session_start();



if(isset($_SESSION['user']))
{
	$user=$_SESSION['user'];
	
}
else
{
	
}



?>


<?php include('include/carousal.php');?>

<?php include('include/content1.php');?>
<?php include('include/content.php');?>
<?php include('include/youtube.php');?>
<?php include('include/footer.php');?>
<?php include('include/footer1.php');?>