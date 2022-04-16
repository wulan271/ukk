
<div class="container-fluid">
    <div class="row">
        <div class="col-lg-6">
            <div class="card shadow mb-4">
                <div class="card-body">
                    <div class="table-responsive">
                        <h4>Tambah Data Konsumen</h4>
                        <br>
                        <form action="<?= base_url('index.php/data_konsumen/proses_tambah_data'); ?>" method="POST">
                            <table class="table">
                      
                                
                                <tr>
                                    <td>Nama Depan</td>
                                    <td>:</td>
                                    <td><input type="text"  class="form-control" name="nama_depan" id="nama_depan"></td>
                                </tr>
                                <tr>
                                    <td>Nama Tengah</td>
                                    <td>:</td>
                                    <td><input type="text"  class="form-control" name="nama_tengah" id="nama_tengah"></td>
                                </tr>   </tr>
                                <tr>
                                    <td>Nama Belakang</td>
                                    <td>:</td>
                                    <td><input type="text"  class="form-control" name="nama_belakang" id="nama_belakang"></td>
                                </tr>
                                </tr>
                                <tr>
                                    <td>Alamat</td>
                                    <td>:</td>
                                    <td><input type="text"  class="form-control" name="alamat" id="alamat"></td>
                                </tr>
                                </tr>
                                <tr>
                                    <td>Kota</td>
                                    <td>:</td>
                                    <td><input type="text"  class="form-control" name="kota" id="kota"></td>
                                </tr>
                                </tr>
                                <tr>
                                    <td>Provinsi</td>
                                    <td>:</td>
                                    <td><input type="text"  class="form-control" name="provinsi" id="provinsi"></td>
                                </tr>
                                </tr>
                                <tr>
                                    <td>Negara</td>
                                    <td>:</td>
                                    <td><input type="text"  class="form-control" name="negara" id="negara"></td>
                                </tr>
                                </tr>
                                <tr>
                                    <td>No Identitas</td>
                                    <td>:</td>
                                    <td><input type="text"  class="form-control" name="no_identitas" id="no_identitas"></td>
                                </tr>
                                </tr>
                                <tr>
                                    <td>No Telp</td>
                                    <td>:</td>
                                    <td><input type="text"  class="form-control" name="no_telp" id="no_telp"></td>
                                </tr>
                                </tr>
                                <tr>
                                    <td>email</td>
                                    <td>:</td>
                                    <td><input type="text"  class="form-control" name="email" id="email"></td>
                                </tr>
                         
                                <tr>
                                    <td colspan="3">
                                        <input type="submit" class="btn btn-warning" value="Simpan">
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
