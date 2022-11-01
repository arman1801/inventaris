




 <!-- Begin Page Content -->
 <div class="container-fluid">

<!-- DataTales Example -->
<div class="card shadow mb-4">
  <div class="card-header py-3">
    <h6 class="m-0 font-weight-bold text-primary">Client List</h6>
  </div>
  <div class="card-body">
    <div class="table-striped">
      <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
      <thead>
                              <tr>
                                  <th>No</th>
                                  <th>Film Id</th>
                                  <th>Film Name</th>											
                                  <th></th>
                                  
                                  
                                  <th>Action</th>
                               
                              </tr>
                              </thead>
                              
     
        <tbody>
          <?php 
                          
                          $no = 1;
                          $sql = $koneksi->query("select * from almov");
                          while ($data = $sql->fetch_assoc()) {
                              
                          ?>
                          
                              <tr>
                                  <td><?php echo $no++; ?></td>
                                  <td><?php echo $data['kode_tiket'] ?></td>
                                  <td><?php echo $data['client'] ?></td>
                                  <td><?php echo $data['kelas'] ?></td>
                                  
                                 
                                  
                      

                                  <td>
                                  <a href="?page=almov&aksi=ubahalmov&kode_tiket=<?php echo $data['kode_tiket'] ?>" class="btn btn-success fa fa-edit" >  Edit</a>
                                  <a onclick="return confirm('Apakah anda yakin akan menghapus data ini?')" href="?page=almov&aksi=hapusalmov&kode_tiket=<?php echo $data['kode_tiket'] ?>" class="btn btn-danger fa fa-times-circle " >  Hapus</a>
                                  </td>
                              </tr>
                          <?php }?>

                                 </tbody>
                      </table>
                      <a href="?page=almov&aksi=tambahalmov" class="btn btn-primary fa fa-dot-circle" >   New</a>
        </tbody>
      </table>
    </div>
  </div>
</div>

</div>












