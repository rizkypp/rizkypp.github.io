<?php
defined('BASEPATH') OR exit('No direct script access allowed');

?>

<!DOCTYPE html>
<html lang="id">
	<?php include 'template/head.php';?>



	<link href="<?php echo base_url()?>assets/css/BootSideMenu.css" rel="stylesheet">
	<link href="<?php echo base_url()?>assets/leaflet/leaflet.css" rel="stylesheet">
	<script src="<?php echo base_url()?>assets/leaflet/leaflet.js"></script>


	
<body>
	<style type="text/css">
		.user{
			padding: 5px;
			margin-bottom: 5px;
		}
		#mapid{height: 480px;}
		#mapSearchContainer{
			position: fixed;
			top: 20px;
			right: 40px;
			height: 30px;
			width: 180px;
			z-index: 110;
			font-size: 10pt;
			color: #5d5d5d;
			border: solid 1px #bbb;
			background-color: #f8f8f8;
		}
		.pointer{
			position: absolute;
			top: 86px;
			left: 60px;
			z-index: 99999;
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
											<h1>Wilayah Antaran</h1>
										</div>
									</div>

									<div class="row">
										<div class="col-md-10">
											<div id="mapid"></div>
											<div class='pointer'> Click search button </div>
										</div>
									</div>

									<script src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
									<script src="https://netdna.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
									<script src="<?php echo base_url()?>assets/js/BootSideMenu.js"></script>
									<script src="<?php echo base_url()?>assets/leaflet/leaflet.js"></script>

									<script type="text/javascript">
										$('#test').BootSideMenu({side:"left", autoClose:false});

										var map = L.map('mapid').setView([-7.9833063, 112.630511], 20);
										//L.control.scale().addTo(map);

										L.tileLayer('https://api.mapbox.com/styles/v1/{id}/tiles/{z}/{x}/{y}?access_token=pk.eyJ1IjoicmFuZGMxOTEyIiwiYSI6ImNrYnN1c2FsYTAzb3EydW52bzRvbHI5cHAifQ.8yoHJ5_2HbpYYfFqVxQhcQ', { attribution: 'Wilayah Malang', id: 'mapbox/streets-v11'}).addTo(map);

										//var searchControl = new;
										//L.esri.Controls.Geosearch().addTo(map);

										//var results = new;
										//L.LayerGroup().addTo(map);

										//searchControl.on('results', function(data){
										//	results.clearLayers();
										//	for (var i = data.results.length - 1; i >= 0; i--){
										//		results.addLayer(L.marker(data.results[i].latlng));
										//	}
										//});

										//setTimeout(function(){$('.pointer').fadeOut('slow');},3400);

										L.pusat = L.marker([-7.9836492,112.6304635],20).addTo(map)
													.bindPopup('Pos Pusat Malang')
													.openPopup();


										<?php foreach ($peta as $key => $value) { ?>
											L.marker([<?=$value->latitude?>,<?=$value->longtitude?>,20]).bindPopup("KANTOR POS : <?=$value->nama_kantor?>").addTo(map);
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