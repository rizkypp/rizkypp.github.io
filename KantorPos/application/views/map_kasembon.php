<?php
defined('BASEPATH') OR exit('No direct script access allowed');

?>

<!DOCTYPE html>
<html lang="id">
	<?php include 'template/head.php';?>

	<link rel="stylesheet" href="<?php echo base_url()?>assets/css/BootSideMenu.css">
	<link rel="stylesheet" href="<?php echo base_url()?>assets/leaflet/leaflet.css">
	<link rel="stylesheet" href="<?php echo base_url()?>assets/routing/dist/leaflet-routing-machine.css">
	<script src="<?php echo base_url()?>assets/leaflet/leaflet.js"></script>
	<script src="<?php echo base_url()?>assets/routing/dist/leaflet-routing-machine.js"></script>
	<script src="<?php echo base_url()?>assets/routing/examples/Control.Geocoder.js"></script>

<body>
	<style type="text/css">
		.user{
			padding: 5px;
			margin-bottom: 5px;
		}
		#mapid{
			
			height: 500px;
			

		}
	</style>

	<div id="wrapper">
		<?php include 'template/sidebar.php';?>

		<div id="content-wrapper" class="d-flex flex-column">
			<?php include 'template/topbar2.php';?>

			<section class="content">
				<div class="row">
					<div class="col-md-12">
						<div class="box">
							<div class="box-header with-border">
								<h3 class="box-title">Maps</h3>
							</div>
							<div class="box-body">
								<div class="row">
									<div class="col-md-12">
										<h1>Wilayah Antaran Kasembon</h1>
									</div>
								</div>

								<div class="row">
									<div class="col-md-10">
										<div id="mapid"></div>
									</div>
								</div>

									<script src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
									<script src="https://netdna.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
									<script src="<?php echo base_url()?>assets/js/BootSideMenu.js"></script>
									<script src="<?php echo base_url()?>assets/leaflet/leaflet.js"></script>
									<script src="<?php echo base_url()?>assets/routing/dist/leaflet-routing-machine.js"></script>
									<script src="<?php echo base_url()?>assets/routing/examples/Control.Geocoder.js"></script>


									<script type="text/javascript">
										$('#test').BootSideMenu({side:"left",autoClose:false});

										var map = L.map('mapid').setView([-7.9833063, 112.630511], 20);
										console.log(map);

										L.tileLayer('https://api.mapbox.com/styles/v1/{id}/tiles/{z}/{x}/{y}?access_token=pk.eyJ1IjoicmFuZGMxOTEyIiwiYSI6ImNrYnN1c2FsYTAzb3EydW52bzRvbHI5cHAifQ.8yoHJ5_2HbpYYfFqVxQhcQ', { attribution: 'Wilayah Malang', id: 'mapbox/streets-v11'}).addTo(map);

										L.pusat = L.marker([-7.9836492,112.6304635],20).addTo(map)
													.bindPopup('Pos Pusat Malang')
													.openPopup();

										<?php foreach ($kmbn as $key => $value) { ?>
											L.marker([<?=$value->latitude?>,<?=$value->longtitude?>,20]).bindPopup("KANTOR POS : <?=$value->nama_kantor?>").addTo(map);
										
											L.Routing.control({
												waypoints: [
													L.latLng(-7.9836492,112.6304635),
													L.latLng(<?=$value->latitude?>,<?=$value->longtitude?>)
												],
												show : false,
												routeWhileDragging : false,
												showAlternatives : true,
												geocoder : L.Control.Geocoder.nominatim(),
												autoRoute : true
											}).addTo(map);

										<?php } ?>
									</script>
							</div>
						</div>
					</div>
				</div>
			</section>
		</div>
	</div>
	<?php include 'template/js.php';?>
</body>
</html>