 <?php
	
	$koneksi = new mysqli("localhost","root","","altiemedia");

	
	
	header("Content-type: application/vnd-ms-excel");
	header("Content-Disposition: attachment; filename=DeviceList_Report(".date('d-m-Y').").xls");

?>	
<center>
<h2>Device Report</h2>
</center>
<table border="1">
	<center>
	  <tr>
											<th>No</th>
											<th>Device ID</th>
											<th>Device Name</th>											
											<th>Device Model</th>
											
											<th>Amount</th>
											<th>Brand</th>
										
                                         
                                        </tr>
										</center>
	
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
								

								

										
                                        </tr>
									<?php }?>

                                </table>