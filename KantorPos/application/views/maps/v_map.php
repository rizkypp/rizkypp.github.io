<?php
defined('BASEPATH') OR exit('No direct script access allowed');

?>

<!DOCTYPE html>
<html lang="id">
	<?php include 'template/head.php';?>

	<link href="<?php echo base_url()?>assets/css/BootSideMenu.css" rel="stylesheet">
	<link href="<?php echo base_url()?>assets/leaflet/leaflet.css" rel="stylesheet">
	<script src="<?php echo base_url()?>assets/leaflet/leaflet.js"></script>

	<style type="text/css">
		.user{
			padding: 5px;
			margin-bottom: 5px;
		}
		#mapid{height: 480px;}
	</style>
<body>
	<div class="wrapper">
		<?php include 'template/sidebar.php';?>
		<div class="container">
			<?php include 'template/topbar2.php';?>
		</div>
	</div>
</body>
</html>