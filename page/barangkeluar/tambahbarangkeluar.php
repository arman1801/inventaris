  
   <script>
 function sum() {
	 var stok = document.getElementById('stok').value;
	 var jumlahkeluar = document.getElementById('jumlahkeluar').value;
	 var result = parseInt(stok) - parseInt(jumlahkeluar);
	 if (!isNaN(result)) {
		 document.getElementById('total').value = result;
	 }
 }
 </script>
  
  <?php 
  
  
$koneksi = new mysqli("localhost","root","","altiemedia");
$no = mysqli_query($koneksi, "select id_transaksi from barang_keluar order by id_transaksi desc");
$idtran = mysqli_fetch_array($no);
$kode = $idtran['id_transaksi'];


$urut = substr($kode, 8, 3);
$tambah = (int) $urut + 1;
$bulan = date("m");
$tahun = date("y");

if(strlen($tambah) == 1){
	$format = "TRK-".$bulan.$tahun."00".$tambah;
} else if(strlen($tambah) == 2){
	$format = "TRK-".$bulan.$tahun."0".$tambah;
	
} else{
	$format = "TRK-".$bulan.$tahun.$tambah;

}

  

$tanggal_keluar = date("Y-m-d");


?>
  
  <div class="container-fluid">

          <!-- DataTales Example -->
          <div class="card shadow mb-4">
            <div class="card-header py-3">
              <h6 class="m-0 font-weight-bold text-primary">Create Data</h6>
            </div>
            <div class="card-body">
              <div class="table-responsive">
							
							
							<div class="body">
							
							<form method="POST" enctype="multipart/form-data">
							
							 <!-- <label for="">Id Transaksi</label>  
                            <div class="form-group">
                               <div class="form-line">
                                <input type="text" name="id_transaksi" class="form-control" id="id_transaksi" value="<?php echo $format; ?>" readonly />  
							</div>
                            </div> -->
							
						
							
							<label for="">Out Date</label>
                            <div class="form-group">
                               <div class="form-line">
                                 <input type="datetime-local" name="tanggal_keluar" class="form-control" id="tanggal_keluar" value="<?php echo $tanggal_keluar; ?>" />
							</div>
                            </div>
							
					
							<label for="">Device Name</label>
                            <div class="form-group">
                               <div class="form-line">
                                <select name="barang" id="cmb_barang" class="form-control" />
								<option value="">-- Device Name --</option>
								<?php
								
								$sql = $koneksi -> query("select * from gudang order by kode_barang");
								while ($data=$sql->fetch_assoc()) {
									echo "<option value='$data[kode_barang].$data[nama_barang]'>$data[kode_barang] | $data[nama_barang]</option>";
								}
								?>
								
								</select>
                                     
									 
							</div>
                            </div>
							<div class="tampung"></div>
					
							<label for="">Amount</label>
                            <div class="form-group">
                               <div class="form-line">
                                <input type="text" name="jumlahkeluar" id="jumlahkeluar" onkeyup="sum()" class="form-control" />
							
                                     
									 
							</div>
                            </div>
							
							<label for="total"> Stock</label>
                            <div class="form-group">
                               <div class="form-line">
                               <input readonly="readonly" name="total" id="total" type="number" class="form-control">
                            

							</div>
                            </div>
							
							<div class="tampung1"></div>
							
							<label for="">Borrower</label>
                            <div class="form-group">
                               <div class="form-line">
                                <input type="text" name="tujuan" class="form-control" />	 
							</div>
                            </div>
						
						
							
							<input type="submit" name="simpan" value="Submit" class="btn btn-info">
							
							</form>
							
							
							
							<?php
							
								if (isset($_POST['simpan'])) {
								// $id_transaksi= $_POST['id_transaksi'];
								$tanggal= $_POST['tanggal_keluar'];

								$barang= $_POST['barang'];
								$pecah_barang = explode(".", $barang);
								$kode_barang = $pecah_barang[0];
								$nama_barang = $pecah_barang[1];
								$jumlah= $_POST['jumlahkeluar'];
								
								$satuan= $_POST['satuan'];
								$tujuan= $_POST['tujuan'];
								
								
								$total= $_POST['total'];
								$sisa2 = $total;
								if ($sisa2 < 0) {
									?>
									
										<script type="text/javascript">
										alert("Stok Barang Habis, Transaksi Tidak Dapat Dilakukan");
										window.location.href="?page=barangkeluar&aksi=tambahbarangkeluar";
										</script>
										
											<?php
								}else {
							
								
								$sql = $koneksi->query("insert into barang_keluar (id_transaksi, tanggal, kode_barang, nama_barang, jumlah, total, satuan, tujuan) values('$id_transaksi','$tanggal','$kode_barang','$nama_barang','$jumlah','$total','$satuan','$tujuan')");
								$sql2 = $koneksi-> query("update gudang set jumlah=(jumlah) where kode_barang='$kode_barang'");
								?>
								


									
									
									<script type="text/javascript">
										alert("Saved Data Succesfully");
										window.location.href="?page=barangkeluar";
										
										</script>
										<?php
								}
							}
							
							
							?>
								
								
								
								
								
