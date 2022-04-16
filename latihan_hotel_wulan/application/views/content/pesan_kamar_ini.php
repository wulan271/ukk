<section class="page-section bg-light" id="team">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h2 class="section-subheading text-uppercase">Profile</h2>
                    <h3 class="section-subheading text-uppercase text-muted">Selamat Datang Di Hotel Riska</h3>
                    <form action="<?=base_url('index.php/pesan_kamar/proses_pesan_kamar')?>"method="post">
                    <table class="table table-bordered table-hover">
                      
                                
                                <tr>
                                    <td>Jenis Id</td>
                                    <td>:</td>
                                    <td><input type="text"  class="form-control" name="jenis_id" id="jenis_id"></td>
                                </tr>
                                <tr>
                                    <td>Atas Nama</td>
                                    <td>:</td>
                                    <td><input type="text"  class="form-control" name="atas_nama" id="atas_nama"></td>
                                </tr>   </tr>
                                <tr>
                                    <td>Tanggal</td>
                                    <td>:</td>
                                    <td><input type="date"  class="form-control" name="tanggal" id="tanggal"></td>
                                </tr>
                                </tr>
                                <tr>
                                    <td>Waktu Sewa</td>
                                    <td>:</td>
                                    <td><input type="text"  class="form-control" name="waktu_sewa" id="waktu_sewa"></td>
                                </tr>
                                </tr>
                                <tr>
                                    <td>Kamar Id</td>
                                    <td>:</td> 
                                    <td><input type="text"  class="form-control" name="kamar_id" id="kamar_id"></td>
                                </tr>
                                </tr>
                                <tr>
                                    <td>Jenis Pembayaran</td>
                                    <td>:</td>
                                    <td><select name="jenis_pembayaran" id="jenis_pembayaran" class="form-control">
                                        <option value="cash">Cash</option>
                                        <option value="debit">Debit</option>
                                    </select></td>
                                </tr>

                                </tr>
            
                                    <td colspan="3">
                                        <input type="submit" class="btn btn-warning" value="Simpan">
                                    </td>
                                </tr>
                            </table>
                        </form>
                        </div>
            </div>
        </div>
</section>
