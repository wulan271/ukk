<section class="page-section bg-light" id="team">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h2 class="section-subheading text-uppercase">Profile</h2>
                    <h3 class="section-subheading text-uppercase text-muted">Selamat Datang Di Hotel Riska</h3>

                    <table class="table table-bordered table-hover">
                        <tbody>
                            <tr>
                                <td class="text-start" width="15%">Email</td>
                                <td>:</td>
                                <td class="text-start"><?= $user['email'] ?></td>
                            </tr>
                            <tr>
                                <td class="text-start"width="15%">Nama Lengkap</td>
                                <td>:</td>
                                 <td class="text-start"><?= $user['nama_lengkap']?></td>
                            </tr> 
                             <tr>
                                <td class="text-start"width="15%">No Hp</td>
                                <td>:</td>
                                 <td class="text-start"><?= $user['no_hp'] ?></td>
                             </tr>             
                                                
    </tbody>
</table>
Klik <a href="<?= base_url('index.php/profile/update_profile') ?>"> Disini</a>Untuk Update Profile Anda<br>
Klik <a href=" <?= base_url('index.php/profile/ganti_password') ?>">Disini</a>Untuk Menganti Password Anda<br>




                </div>
            </div>
        </div>
</section>
