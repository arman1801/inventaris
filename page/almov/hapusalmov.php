<?php
 
 $kode_tiket = $_GET['kode_tiket'];
 $sql = $koneksi->query("delete from almov where kode_tiket = '$kode_tiket'");

 if ($sql) {
 
 ?>
 
 
	<script type="text/javascript">
	alert("Data Berhasil Dihapus");
	window.location.href="?page=almov";
	</script>
	
 <?php
 
 }
 
 ?>