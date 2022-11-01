<?php 



$koneksi = new mysqli("localhost","root","","altiemedia");
$no = mysqli_query($koneksi, "select kode_tiket from almov order by kode_tiket desc");
$kdtiket = mysqli_fetch_array($no);
$kode = $kdtiket['kode_tiket'];


$urut = substr($kode, 8, 3);
$tambah = (int) $urut + 1;
$bulan = date("m");
$tahun = date("y");

if(strlen($tambah) == 1){
	$format = "BAR-".$bulan.$tahun."00".$tambah;
} else if(strlen($tambah) == 2){
	$format = "BAR-".$bulan.$tahun."0".$tambah;
	
} else{
	$format = "BAR-".$bulan.$tahun.$tambah;

}



$jumlah = 0;

?>
							




 <div class="container-fluid">

          <!-- DataTales Example -->
          <div class="card shadow mb-4">
            <div class="card-header py-3">
              <h6 class="m-0 font-weight-bold text-primary">Tambah Data</h6>
            </div>
            <div class="card-body">
              <div class="table-striped">

							
							<div class="body">
							
							<form method="POST" enctype="multipart/form-data">
																																																																																																																																																
							<label for="">Kode tiket</label>
                            <div class="form-group">
                               <div class="form-line">
                                  <input type="text" name="kode_tiket" class="form-control" id="kode_tiket" >	 
							</div>
                            </div>
							
						
							
							<label for="">Client</label>
                            <div class="form-group">
                               <div class="form-line">
                                <input type="text" name="client" class="form-control" id="client">	 
							</div>
                            </div>
							
					
							
                            <label for="">Kelas</label>
                            <div class="form-group">
                               <div class="form-line">
                                <input type="text" name="kelas" class="form-control" id="kelas">
							</div>
                            </div>
                                     
						
							
						
                          
                              
				
							
							
							<input type="submit" name="simpan" value="Submit" class="btn btn-primary">
							
							</form>
							
							
							
							<?php
							
							if (isset($_POST['simpan'])) {
		
								$kode_tiket= $_POST['kode_tiket'];
								$client= $_POST['client'];
								$kelas= $_POST['kelas'];
								
								
								
								
								
								
								
								
								
						
								
								$sql = $koneksi->query("insert into almov (kode_tiket, client, kelas) values('$kode_tiket','$client','$kelas')");
								
								if ($sql) {
									?>
									
										<script type="text/javascript">
										alert("Data saved Succesfully");
										window.location.href="?page=almov";
										</script>
										
										<?php
								}
								}
							
							
							?>
										
										
										
								
								
								
								
								
