<!-- Begin page content -->
<div class="container-fluid">
    <!-- Page Heading -->
    <hi class="h3 mb-2 text-gray-800">
        Tabel Data Kamar
</hi>
<!-- Datatales Example -->
<div class="card shadow mb-4">
    <div class="card header py-3">
    <h6 class="m-0 font-weight-bold text-primary">Data Kamar
        <a href="<?= base_url('index.php/data_kamar/tambah_data'); ?>">
            <button class="btn btn-primary">Tambah Data</button>
</a>
</h6>
</div>
<div class="card-body">
    <div class="table-responsive">
        <table class="table table-bordered" id="datatable" width="100%" cellpacing="0">
             <thead>
                </tr>
                
                <th>Id Kamar</th>
                <th>Nomor Kamar</th>
                <th>Id Jenis</th>
                <th>Keterangan</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tfoot>
          <tr>
                <th>Id Kamar</th>
                <th>Nomor Kamar</th>
                <th>Id Jenis</th>
                <th>Keterangan</th>
                <th>Aksi</th>

        </tr>
        </thead>
        <tbody>

               <?php
        $no = 1;

foreach ($tbl_kamar as $tk) :
?>
    
    <tr>
        <td><?php echo $no++; ?></td>
        <td><?php echo $tk["nomor_kamar"] ?></td>
        <td><?php echo $tk["id_jenis"] ?></td>
        <td><?php echo $tk["keterangan"]?></td>
        <td>
            <a href="<?= base_url('index.php/data_kamar/update_data/') ?><?php echo $tk['id_kamar']?>" class="btn btn-primary btn-circle">
                 <i class="fas fa-edit"></i>

           </a>

            <a href="<?= base_url('index.php/data_kamar/hapus_data/') ?><?php echo $tk['id_kamar'] ?>" class="btn btn-danger btn-circle">
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

             



