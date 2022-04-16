<section class="page-section bg-light" id="login">
    <div class="container">
        <center>
        <h3 class="section-heading text-uppercase">Register Disini</h3>
        <a href="<?= base_url('index.php/auth'); ?>">Kembali</a>
</center>
        <form action="<?=base_url('index.php/auth/proses_register')?>"method="post">
      
  <div class="container">
    <label for="exampleInputEmail1" class="form-label">Email Address</label>
    <input name="email" type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
    <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
  </div>
  <div class="container">
    <label for="exampleInputPassword1" class="form-label">Password</label>
    <input name="password" type="password" class="form-control" id="exampleInputPassword1">
  </div>
  <div class="container">
      <label for="exampleinputpassword1" class="form-label">Nama Lengkap</label>
      <input name="nama_lengkap" type="nama_lengkap" class="form-control" id="exampleinputpassword1">
</div>
<div class="container">
      <label for="exampleinputpassword1" class="form-label">No Hp</label>
      <input name="no_hp" type="varchar" class="form-control" id="exampleinputpassword1">
  <div class="container form-check">
    <input type="checkbox" class="form-check-input" id="exampleCheck1">
    <label class="form-check-label" for="exampleCheck1">Check me out</label>
  </div>
  <center><button type="submit" class="btn btn-primary">Submit</button></center>
</form>
</div>
</section>
        
   

        
        
        


     

 