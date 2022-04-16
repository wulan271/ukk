<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</head>

<body>
<marquee behavior="" direction=""><h1>Data Profile</h1></marquee>
<hr>
<center><a class="btn btn-danger" href="<?= base_url('profile/tambah_data_profile') ?>">Tambah Data Profile</a></center>
<hr>
   <table class="table table-bordered">
        <thead>
            <tr class="">
                <th>No</th>
                <th>Nama Depan</th>
                <th>Nama Belakang</th>
                <th>Tempat Lahir</th>
                <th>Tanggal Lahir</th>
                <th>Jenis Kelamin</th>
                <th>Alamat</th>
                <th>Jenjang Pendidikan</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            <?php $no = 1;
            foreach ($profile as $p) { ?>
                <tr>
                    <td><?= $no ?></td>
                    <td><?= $p->nama_depan ?></td>
                    <td><?= $p->nama_belakang ?></td>
                    <td><?= $p->tempat_lahir ?></td>
                    <td><?= $p->tanggal_lahir ?></td>
                    <td><?= $p->jenis_kelamin ?></td>
                    <td><?= $p->alamat ?></td>
                    <td><?= $p->jenjang_pendidikan ?></td>
                    <td><a class="btn btn-warning" href="<?= base_url('profile/update_data/'.$p->id)?>"> Edit </a> 
                    <a class="btn btn-success" href="<?= base_url('profile/hapus_data/'.$p->id)?>"> Hapus </a></td>
                </tr>
            <?php $no++;
            } ?>
        </tbody>

    </table>
</body>

</html>