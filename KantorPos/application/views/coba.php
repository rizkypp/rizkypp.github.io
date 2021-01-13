<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html lang="id">
	<?php include 'template/head.php';?>
<body>
	<div id="wrapper">
		<?php include 'template/sidebar.php';?>	
		<div id="content-wrapper" class="d-flex flex-column">
			<div id="content">
				<?php include 'template/topbar2.php';?>
			
				

				<h1>Data <small> Koordinat!</small></h1>
				<table class="table table-borderes table-striped" id="mydata">
					<thead>
						<tr>
							<td>ID</td>
							<td>Nama Kantor</td>
							<td>Latitude</td>
							<td>Longtitude</td>
							<td>Wilayah Antaran</td>
						</tr>
					</thead>
					<tbody>
						<?php foreach ($data->result_array() as $i): 
							
							$id=$i['id'];
							$nama_kantor=$i['nama_kantor'];
							$latitude=$i['latitude'];
							$longtitude=$i['longtitude'];
							$Wilayah=$i['Wilayah'];
						?>
						<tr>
							<td><?php echo $id;?></td>
							<td><?php echo $nama_kantor;?></td>
							<td><?php echo $latitude;?></td>
							<td><?php echo $longtitude;?></td>
							<td><?php echo $Wilayah;?></td>

						</tr>
					<?php endforeach;?>
					</tbody>
				</table>
			</div>	
		</div>
	</div>
	<?php include 'template/js.php';?>	
</body>
</html>