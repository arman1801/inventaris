




 <!-- Begin Page Content -->
        <div class="container-fluid">

          <!-- DataTales Example -->
          <div class="card shadow mb-4">
            <div class="card-header py-3">
              <h6 class="m-0 font-weight-bold text-primary">Pic Data</h6>
            </div>
            <div class="card-body">
              <div class="table-responsive">
                <table class="table table-striped" id="dataTable" width="100%" cellspacing="0">
                <thead>
                                        <tr>
											<th>No</th>
											<th>PIC ID</th>
											<th>PIC </th>
											<th>Division</th>
											<!-- <th>Telepon</th> -->
											<th>Action</th>
                                         
                                        </tr>
										</thead>
										
               
                  <tbody>
                    <?php 
									
									$no = 1;
									$sql = $koneksi->query("select * from tb_supplier");
									while ($data = $sql->fetch_assoc()) {
										
									?>
									
                                        <tr>
                                            <td><?php echo $no++; ?></td>
											<td><?php echo $data['kode_supplier'] ?></td>
											<td><?php echo $data['nama_supplier'] ?></td>
											<td><?php echo $data['alamat'] ?></td>
											<!-- <td><?php echo $data['telepon'] ?></td> -->
                                         

											<td>
											<a href="?page=supplier&aksi=ubahsupplier&kode_supplier=<?php echo $data['kode_supplier'] ?>" class="btn btn-success fa fa-edit" > Edit</a>
											<a onclick="return confirm('Apakah anda yakin akan menghapus data ini?')" href="?page=supplier&aksi=hapussupplier&id=<?php echo $data['kode_supplier'] ?>" class="btn btn-danger fa fa-times-circle" >  Delete</a>
											</td>
                                        </tr>
									<?php }?>

										   </tbody>
                                </table>
								<a href="?page=supplier&aksi=tambahsupplier" class="btn btn-info fa fa-dot-circle" > New</a>
                  </tbody>
                </table>
              </div>
            </div>
          </div>

        </div>












