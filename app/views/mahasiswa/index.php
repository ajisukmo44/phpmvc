<div class="container mt-5"> 



<div class="row">
<div class="col-lg-6">

<?php Flasher::flash(); ?>


</div>




</div>




<div class="row">
<div clas= "col-6">
<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#formModal">
  tambah data mahasiswa
</button>
<br><br>
<h3>Daftar Mahasiswa</h3>

<ul class="list-group">

<?php foreach ($data['mhs'] as $mhs) : ?>

  <li class="list-group-item float-right ml-7">
  <?= $mhs['nama']; ?> - <?= $mhs['nim']; ?> - <?= $mhs['jurusan']; ?>
  
<a href="<?= BASEURL; ?>/mahasiswa/hapus/<?= $mhs['id']; ?>" class="badge badge-danger  float-right ml-2 " onclick="return confirm('yakin?')" >hapus</a>

<a href="<?= BASEURL; ?>/mahasiswa/update/<?= $mhs['id']; ?>" class="badge badge-warning  float-right ml-2" data-toggle="modal" data-target="#formModal" >edit</a>

<a href="<?= BASEURL; ?>/mahasiswa/detail/<?= $mhs['id']; ?>" class="badge badge-success  float-right ml-4" >detail</a>
  
  </li>

  <?php endforeach; ?></ul>

</div>
</div>
</div>


<!-- Modal -->
<div class="modal fade" id="formModal" tabindex="-1" role="dialog" aria-labelledby="judulmodal" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="judulmodal">Tambah Data mahasiswa</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
       <form action="<?= BASEURL; ?>/mahasiswa/tambah" method="post">
       <div class="form-group">
    <label for="nama">Nama</label>
    <input type="text" class="form-control" id="nama" name="nama">
  </div>
  <div class="form-group">
    <label for="nim">NIM</label>
    <input type="number" class="form-control" id="nim" name="nim">
  </div>
  <div class="form-group">
    <label for="jurusan">Jurusan</label>
    <select class="form-control" id="jurusan" name="jurusan">
      <option value="Sistem Informasi">Sistem Informasi</option>
      <option value="Teknik Informatika">Teknik Informatika</option>
      <option value="Akutansi">Manajemen</option>
      <option value="Manajemen">Akutansi</option>
    </select>
  </div>
      </div>
      <div class="modal-footer">
        <button type="submit" class="btn btn-danger" data-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary">tambah Data</button>
        </form>
      </div>
    </div>
  </div>
</div>