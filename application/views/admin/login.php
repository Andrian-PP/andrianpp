  <!-- /.login-logo -->
  <div class="card">
    <div class="card-body login-card-body">
      <p class="login-box-msg">PMK STMIK Palangkaraya</p>
      
      <?= $this->session->flashdata('messsage'); ?>
      <form action="<?= base_url('login/proses_login') ?>" method="post">
        <div class="input-group mb-3">
          <input type="email" class="form-control" id="email" name="email" placeholder="Masukan Email">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-envelope"></span>
            </div>
          </div>
        </div>
        <div class="input-group mb-3">
          <input type="password" class="form-control" id="password" name="password" placeholder="Masukan Kata Sandi">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-lock"></span>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-8">
          </div>
          <!-- /.col -->
          <div class="col-4">
            <button type="submit" class="btn btn-primary btn-block">Login</button>
          </div>
          <!-- /.col -->
        </div>
      </form>

    
      <p class="mb-1">
        <a href="<?= base_url('beranda') ?>">Kembali Ke Beranda</a>
      </p>
      <p class="mb-0">
        <a href="<?= base_url('admin/registrasi') ?>" class="text-center">Buat Akun Baru</a>
      </p>
    </div>
    <!-- /.login-card-body -->
  </div>
</div>
<!-- /.login-box -->

