<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h1>Hai ini adalah biodata saya</h1>
    <a href="<?= base_url('profile/tambah_data') ?>"> ~ Tambah Data ~ </a>
    <p>Nama Depan : <?= $namadepan ?></p>
    <p>Nama Belakang :<?= $namabelakang ?></p>
    <p>Tempat Lahir :<?= $temlahir ?></p>
    <p>Tanggal Lahir :<?= $tgllahir ?></p>
    <p>Jenis Kelamin : <?= $jk ?> </p>
    <p>Alamat : <?= $alm ?> </p>
    <P>Jenjang Pendidikan : <?= $jp ?></P>

</body>

</html>