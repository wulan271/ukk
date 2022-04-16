
<!-- Begin page content -->
<div class="container-fluid">
    <!-- Page Heading -->
    <hi class="h3 mb-2 text-gray-800">
        Tabel Data Transaksi
</hi>
<!-- Datatales Example -->
<div class="card shadow mb-4">
    <div class="card header py-3">
    <h6 class="m-0 font-weight-bold text-primary">Data Transaksi
        <a href="<?= base_url('index.php/data_transaksi/tambah_data'); ?>">
            <button class="btn btn-primary">Tambah Data</button>
</a>
</h6>
</div>
<div class="card-body">
    <div class="table-responsive">
        <table class="table table-bordered" id="datatable" width="100%" cellpacing="0">
             <thead>
                </tr>
            </tr>
                <th>Id Transaksi</th>
                <th>Jenis Id</th>
                <th>Atas Nama</th>
                <th>Tanggal</th>
                <th>Waktu Sewa</th>
                <th>Kamar Id</th>
                <th>Jenis Pembayaran</th>
                <th>Aksi</th>
            </tr>
        </thead>
            </tr>
        <tfoot>
          <tr>
                <th>Id Transaksi</th>
                <th>Jenis Id</th>
                <th>Atas Nama</th>
                <th>Tanggal</th>
                <th>Waktu Sewa</th>
                <th>Kamar Id</th>
                <th>Jenis Pembayaran</th>
                <th>Aksi</th>


        </tr>
      </tfoot>
     <tbody>
            <?php
        $no = 1;

foreach ($tbl_transaksi as $tt) :
?>
    
    <tr>
        <td><?php echo $no++; ?></td>
        <td><?php echo $tt["jenis_id"] ?></td>
        <td><?php echo $tt["atas_nama"] ?></td>
        <td><?php echo $tt["tanggal"] ?></td>
        <td><?php echo $tt["waktu_sewa"] ?></td>
        <td><?php echo $tt["kamar_id"] ?></td>
        <td><?php echo $tt["jenis_pembayaran"] ?></td>
        
        <td>
            <a href="<?= base_url('index.php/data_transaksi/update_data/') ?><?php echo $tt['id_transaksi']?>" class="btn btn-primary btn-circle">
                 <i class="fas fa-edit"></i>

           </a>

            <a href="<?= base_url('index.php/data_transaksi/hapus_data/') ?><?php echo $tt['id_transaksi'] ?>" class="btn btn-danger btn-circle">
                  <i class="fas fa-trash"></i>
                  
          </a>
      </td>
</tr>
<?php endforeach; ?>
      
        

</tbody>   

        </table>
      </div>
      </div>
     </div>

             



