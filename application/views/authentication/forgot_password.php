<body class="login-page" style="height:100vh; margin:0; padding:0;">

<!-- ========== CUSTOM UI STYLE ========== -->
<style>
  /* Background full screen */
  body.login-page {
    background: url('<?= base_url("assets/welcome/assets/img/background.png"); ?>') no-repeat center center;
    background-size: cover;
    position: relative;
  }

  /* Layer coklat transparan */
  body.login-page::before {
    content: "";
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    background: rgba(70, 45, 20, 0.55); 
    z-index: 1;
  }

  /* Let content appear above overlay */
  .login-box, 
  .card, 
  .login-logo {
    position: relative;
    z-index: 2;
  }

  /* Logo text color */
  .login-logo h2,
  .login-logo h6 {
    color: white !important;
  }

  /* Card style */
  .card {
    background: rgba(255, 255, 255, 0.92);
    border-radius: 10px;
    border: none;
  }

  /* Input styling */
  .form-control {
    border-radius: 6px;
  }

  /* Button orange */
  .btn-orange {
    background-color: #ef7f46;
    border-color: #ef7f46;
    color: #fff;
    font-weight: bold;
  }
  .btn-orange:hover {
    opacity: .95;
    color: #fff;
  }

  /* Login link styling */
  a {
    color: #000000;
  }
  a:hover {
    color: #ef7f46;
  }
</style>
<!-- ========== END CUSTOM UI ========== -->


<div class="login-box">

  <div class="login-logo mb-1 text-white">
      <img src="<?php echo base_url() . 'assets/dist/img/logo_ma.png'; ?>" style="height:auto;width:53px;" class="mb-2">
      <h2><b>E-Cuti</b></h2>
      <h6 class="mb-3"><b>Pengadilan Negeri Jakarta Utara Kelas I A Khusus</b></h6>
  </div>

  <div class="card card-outline card-default">
    <div class="card-body">

      <p class="login-box-msg">You forgot your password? Here you can easily retrieve a new password.</p>

      <?php echo $this->session->flashdata('message'); ?>

      <form action="<?php echo base_url() . 'authentication/forgot_password'; ?>" method="post">

          <div class="form-group">
            <div class="input-group mb-1">
                <input type="email" name="email" class="form-control" placeholder="Email">
                <div class="input-group-append">
                  <div class="input-group-text">
                    <span class="fas fa-envelope"></span>
                  </div>
                </div>
              </div>

              <?php echo form_error('email', '<small class="text-danger pl-1"><i class="fas fa-exclamation-circle fa-fw"></i> ', '</small>'); ?>

            </div>

            <div class="row">
              <div class="col-12">
                <button type="submit" class="btn btn-orange btn-block">Request New Password</button>
              </div>
            </div>

            <p class="mt-3 mb-1">
              <a href="<?php echo base_url() . 'authentication'; ?>">
                <i class="fas fa-arrow-left"></i> Login
              </a>
            </p>


      </form>
    </div>
  </div>

</div>

</body>
