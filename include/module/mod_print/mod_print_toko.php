<?php 
	$mediacss = 'amplop.css';
	include "header.php";
	isset($_GET['module'])    ? $module     = $_GET['module']     : $module     = NULL;
	isset($_GET['parameter']) ? $parameter  = $_GET['parameter']  : $parameter  = NULL;
	isset($_GET['action'])    ? $action     = $_GET['action']     : $action     = NULL;	
	$tabel 	= 't_toko';
	$field 	= 'kd_toko';
	$jprm 	= explode(",",$parameter);
	for($i=0;$i<count($jprm);$i++):
?>
	<div class='content-surat'>
		<div class='containerx'>
			<div class='col-md-6 from'>     
				<div class='row'>   
					<?php echo $data['fromRtl']; ?>
				</div>
			</div>
			<div class='col-md-6 to'>     
				<div class='row'>  
					<?php 
						$objects	= $generates->read_all_param($tabel,$field,$jprm[$i]);
						foreach($objects as $object_data):
							strtoupper($object_data['kd_toko']);
							echo "<div>Yth.,</div>";
							echo "<div class='nmctr'>" . strtoupper($object_data['nama_toko']) . '</div>';
							echo strtoupper($object_data['alamat_1']) . '<br />';
							echo strtoupper($object_data['alamat_2']) . ' ' . strtoupper($object_data['alamat_3']) . '<br />';
							echo strtoupper($object_data['Kota']);
						endforeach;
					?>
				</div>  
			</div> 
		</div>
	</div>
	<br/>
	<div class="page-break"></div>
<?php 
	endfor;
	include_once "footer.php";
?>