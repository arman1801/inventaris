



<!-- CSS -->
<link rel="stylesheet" href="css/dlist.css">
 <!-- Begin Page Content -->
        <div class="container-fluid">

          <!-- DataTales Example -->
          <div class="card shadow mb-4">
            <div class="card-header py-3">
              <h6 class="m-0 font-weight-bold text-primary">Device List</h6>
            </div>
            <div class="card-body">
              <div class="table-striped">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead>
                                        <tr>
											<th>No</th>
											<th>Device Number</th>
											<th>Device Name</th>											
											<th>Device Type</th>
											
											<th>Amount</th>
											<th>Brand</th>
											<th>Action</th>
                                         
                                        </tr>
										</thead>
										
               
                  <tbody>
                    <?php 
									
									$no = 1;
									$sql = $koneksi->query("select * from gudang");
									while ($data = $sql->fetch_assoc()) {
										
									?>
									
                                        <tr>
                                            <td><?php echo $no++; ?></td>
											<td><?php echo $data['kode_barang'] ?></td> 
											<td><?php echo $data['nama_barang'] ?></td>
											<td><?php echo $data['jenis_barang'] ?></td>
											
											<td><?php echo $data['jumlah'] ?></td>
											<td><?php echo $data['satuan'] ?></td>
								

											<td>
											<a href="?page=gudang&aksi=ubahgudang&kode_barang=<?php echo $data['kode_barang'] ?>" class="btn btn-warning fa fa-edit" >  Edit</a>
											<a onclick="return confirm('Apakah anda yakin akan menghapus data ini?')" href="?page=gudang&aksi=hapusgudang&kode_barang=<?php echo $data['kode_barang'] ?>" class="btn btn-danger fa fa-times-circle " >  Delete</a>
											</td>
                                        </tr>
									<?php }?>

										   </tbody>
                                </table>
								<a href="?page=gudang&aksi=tambahgudang" class="btn btn-info fa fa-dot-circle" >   New</a>
                <a href="page/laporan/export_laporan_gudang_excel.php"  class="btn btn-success" style="margin-top:8 px"><i class="fa fa-print"></i>  Export</a>
								
                  </tbody>
                </table>
              </div>
            </div>
          </div>

        </div>












