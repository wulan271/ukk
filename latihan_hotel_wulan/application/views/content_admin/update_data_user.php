<div class="container-fluid">
    <div class="row">
        <div class="col-lg-6">
            <div class="card shadow mb-4">
                <div class="card-body">
                    <div class="table-responsive">
                        <h4>Edit Data user</h4>
                        <br>
                        <form action="<?= base_url('index.php/data_user/proses_update_data'); ?>" method="POST">
                            <input type="hidden" name="id_user" id="id_user" value="<?php echo $tbl_user['id_user']?>">
                            <table class="table">
                                <tr>
                                    <td>Email</td>
                                    <td>:</td>
                                    <td><input type="text"  class="form-control" name="email" id="email" value="<?php echo $tbl_user['email']?>"></td>
                                </tr>
                                <tr>
                                    <td>Password</td>
                                    <td>:</td>
                                    <td><input type="text"  class="form-control" name="password" id="password" value="<?php echo $tbl_user['password']?>"></td>
                                </tr>
                                <tr>
                                <td>Nama Lengkap</td>
                                    <td>:</td>
                                    <td><input type="text"  class="form-control" name="nama_lengkap" id="nama_lengkap" value="<?php echo $tbl_user['nama_lengkap']?>"></td>
                                   
                                </tr>
                                 <tr>
                                     <td>No Hp</td>
                                    <td>:</td>
                                    <td><input type="text"  class="form-control" name="no_hp" id="no_hp" value="<?php echo $tbl_user['no_hp']?>"></td>
                                </tr>
                                <tr>
                                    <td>Hak Akses</td>
                                    <td>:</td>
                                    <td><select name="hak_akses" id="hak_akses" class="form-control">
                                        <option value="admin">Admin</option>
                                        <option value="user">User</option></td>
                                </tr>  
                                <tr>
                                    <td colspan="3">
                                        <input type="submit" class="btn btn-warning" value="Update">
                                    </td>
                                </tr>
                            </table>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
                                    
                                    

                                   
                                   
                                    