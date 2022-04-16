<!-- Begin page content -->
<div class="container-fluid">
    <!-- Page Heading -->
    <hi class="h3 mb-2 text-gray-800">
        Tabel Data User
</hi>
<!-- Datatales Example -->
<div class="card shadow mb-4">
    <div class="card header py-3">
    <h6 class="m-0 font-weight-bold text-primary">Data User
        <a href="<?= base_url('index.php/data_user/tambah_data'); ?>">
            <button class="btn btn-primary">Tambah Data</button>
</a>
</h6>
</div>
<div class="card-body">
    <div class="table-responsive">
        <table class="table table-bordered" id="datatable" width="100%" cellpacing="0">
         <thead>
             </tr>
                <th>Id User</th>
                <th>Email</th>
                <th>Password</th>
                <th>Nama Lengkap</th>
                <th>No Hp</th>
                <th>Hak Akses</th>
                <th>Aksi</th>
             </tr>
        </thead>
        <tfoot>    
                <th>Id User</th>
                <th>Email</th>
                <th>Password</th>
                <th>Nama Lengkap</th>
                <th>No Hp</th>
                <th>Hak Akses</th>
                <th>Aksi</th>
                

        </tr>
        </thead>
        <tfoot>
        <tbody>
            <?php
        $no = 1;

foreach ($tbl_user as $tu) :
?>
    
    <tr>
        <td><?php echo $no++; ?></td>
        <td><?php echo $tu["email"] ?></td>
        <td><?php echo $tu["password"] ?></td>
        <td><?php echo $tu["nama_lengkap"] ?></td>
        <td><?php echo $tu["no_hp"] ?></td>
        <td><?php echo $tu["hak_akses"] ?></td>
        <td>
            <a href="<?= base_url('index.php/data_user/update_data/') ?><?php echo $tu['id_user']?>" class="btn btn-primary btn-circle">
                 <i class="fas fa-edit"></i>

           </a>

            <a href="<?= base_url('index.php/data_user/hapus_data/') ?><?php echo $tu['id_user'] ?>" class="btn btn-danger btn-circle">
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

             



