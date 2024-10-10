 <div class="card">
    <div class="card-body register-card-body">
      <p class="login-box-msg">Buat Akun Mahasiswa</p>

      <form action="<?= base_url('admin/registrasi') ?>" method="post">
        <div class="input-group mb-3">
          <input type="text" class="form-control" placeholder="Masukan Nama Lengkap" id="nama_lengkap" name="nama_lengkap">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-user"></span>
            </div>
          </div>
        </div>
        <small class="form-text text-danger"><?= form_error('nama_lengkap') ?></small>
        <div class="input-group mb-3">
          <input type="email" class="form-control" placeholder="Masukan Email" id="email" name="email">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-envelope"></span>
            </div>
          </div>
        </div>
        <small class="form-text text-danger"><?= form_error('email') ?></small>
        <div class="input-group mb-3">
          <input type="password" class="form-control" placeholder="Masukan Kata Sandi" id="password" name="password">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-lock"></span>
            </div>
          </div>
        </div>
        <small class="form-text text-danger"><?= form_error('password') ?></small>
        <div class="input-group mb-3">
          <input type="password" class="form-control" placeholder="Konfirmasi Ulang Kata Sandi" id="repassword" name="repassword">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-lock"></span>
            </div>
          </div>
        </div>
        <small class="form-text text-danger"><?= form_error('repassword') ?></small>
        <div class="row">
          <div class="col-8">
            
          </div>
          <!-- /.col -->
          <div class="col-4">
            <button type="submit" class="btn btn-primary btn-block">Daftar</button>
          </div>
          <!-- /.col -->
        </div>
      </form>

      
      <a href="<?= base_url('admin/login') ?>">Kembali Ke Login</a>
    </div>
    <!-- /.form-box -->
  </div><!-- /.card -->
</div>
<!-- /.register-box -->