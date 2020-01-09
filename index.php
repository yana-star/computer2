<?
session_start();
	if(!isset($_SESSION['member'])){
		header("location:login.php");
	}
	$load_page = "home";
	include 'include/header.php';
?>



<?
		include 'include/top-menu.php';
?>
<!----------------------------------------------------------------->
  <? if($_SESSION['user_role']=="admin"){ ?>
<div class="container-fluid" style="background-color:#FFF;">


<div class="row">
	
	<div class="col-lg-12">
<?
include 'start-page.php';
echo '</div></div></div>';
}
else {
	header("location:repaire.php");
}
	include 'include/footer.php';
?>
