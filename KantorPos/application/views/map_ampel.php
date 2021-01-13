<?php
defined('BASEPATH') OR exit('No direct script access allowed');

?>

<!DOCTYPE html>
<html lang="id">
<?php include 'template/head.php';?>


<script src="https://api.mapbox.com/mapbox-gl-js/v1.12.0/mapbox-gl.js"></script>
<link href="https://api.mapbox.com/mapbox-gl-js/v1.12.0/mapbox-gl.css" rel="stylesheet" />
<body>
	<style type="text/css">
		.user{
			padding: 5px;
			margin-bottom: 5px;
		}
		#map{
			height: 500px;
		}
		#marker{
			cursor: pointer;
		}
		
	</style>

	<div id="wrapper">
		<?php include 'template/sidebar.php';?>

		<div id="content-wrapper" class="d-flex flex-column">
			<div id="content">
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
											<h1>Wilayah Antaran Ampel Gading</h1>
										</div>
									</div>

									<div class="row">
										<div class="col-md-10">
											<div id="map"></div>
										</div>
									</div>

									<script src="https://api.mapbox.com/mapbox-gl-js/v1.12.0/mapbox-gl.js"></script>
									<script src="https://api.mapbox.com/mapbox-gl-js/plugins/mapbox-gl-geocoder/v4.5.1/mapbox-gl-geocoder.min.js"></script>
									<link
									rel="stylesheet"
									href="https://api.mapbox.com/mapbox-gl-js/plugins/mapbox-gl-geocoder/v4.5.1/mapbox-gl-geocoder.css"
									type="text/css">

									<script src="https://cdn.jsdelivr.net/npm/es6-promise@4/dist/es6-promise.min.js"></script>
									<script src="https://cdn.jsdelivr.net/npm/es6-promise@4/dist/es6-promise.auto.min.js"></script>

									<script src="https://api.mapbox.com/mapbox-gl-js/plugins/mapbox-gl-directions/v4.1.0/mapbox-gl-directions.js"></script>
									<link
									rel="stylesheet"
									href="https://api.mapbox.com/mapbox-gl-js/plugins/mapbox-gl-directions/v4.1.0/mapbox-gl-directions.css"
									type="text/css">

									<script>
										mapboxgl.accessToken = 'pk.eyJ1IjoicmFuZGMxOTEyIiwiYSI6ImNrYnN1c2FsYTAzb3EydW52bzRvbHI5cHAifQ.8yoHJ5_2HbpYYfFqVxQhcQ';

										var map = new mapboxgl.Map({
										container: 'map',
										style:'mapbox://styles/mapbox/streets-v11', 
										center:[112.6304635,-7.9836492],
										zoom: 12
									});

										var geocoder = new MapboxGeocoder({
											accessToken: mapboxgl.accessToken,
											language: 'id,in',
											mapboxgl: mapboxgl
										});
										map.addControl(geocoder);

										map.addControl(
											new MapboxDirections({
												accessToken: mapboxgl.accessToken,
												language: 'id,in'
											}),
											'top-left'
											);

										map.addControl(
											new mapboxgl.GeolocateControl({
												positionOptions: {
													enableHighAccuracy: true
												},
												trackUserLocation: true
											})
											);

									map.addControl(new mapboxgl.NavigationControl());
									var popup = new mapboxgl.Popup({offset:25}).setText('Kantor Pos Pusat');

									var marker = new mapboxgl.Marker().setLngLat([112.6304635,-7.9836492]).setPopup(popup).addTo(map);



									<?php foreach ($ampel as $key => $value) { ?>
										var pos = new mapboxgl.Popup({offset:25}).setText('Kantor Pos : <?=$value->nama_kantor?>');

										var marker = new mapboxgl.Marker().setLngLat([<?=$value->longtitude?>,<?=$value->latitude?>]).setPopup(pos).addTo(map);

									<?php } ?>
								</script>						


							</div>
						</div>
					</div>
				</div>

			</section>
		</div>
	</div>
</div>
<?php include 'template/js.php';?>
</body>
</html>