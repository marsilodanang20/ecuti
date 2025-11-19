<?php
$email = $_GET['email'] ?? '';
$token = $_GET['token'] ?? '';

// Jika email / token tidak ada
if (!$email || !$token) {
    echo "<h3 style='color:red;text-align:center;margin-top:30px;'>Invalid reset link!</h3>";
    exit;
}

// Simpan ke session agar bisa dipakai di controller
$this->session->set_userdata('reset_email', $email);
?>

<body class="login-page" style="height:100vh; margin:0; padding:0;">

<!-- ========== CUSTOM UI STYLE ========== -->
<style>
  body.login-page {
    background: url('<?php echo base_url("assets/welcome/assets/img/background.png"); ?>')
                no-repeat center center fixed;
    background-size: cover;
    position: relative;
  }

  body.login-page::before {
    content: "";
    position: absolute;
    top: 0; left: 0;
    width: 100%; height: 100%;
    background: rgba(70, 45, 20, 0.55);
    z-index: 1;
  }

  .login-box, .card, .login-logo {
    position: relative;
    z-index: 2;
  }

  .login-logo h2,
  .login-logo h6 {
    color: white !important;
  }

  .card {
    background: rgba(255, 255, 255, 0.92);
    border-radius: 10px;
    border: none;
  }

  .btn-orange {
    background-color: #ef7f46 !important;
    border-color: #ef7f46 !important;
    color: #fff !important;
    font-weight: bold;
    transition: 0.2s;
  }
  .btn-orange:hover {
    opacity: .95;
  }
</style>
<!-- ========== END CUSTOM UI STYLE ========== -->


<div class="login-box">

  <div class="login-logo mb-1 text-white">
    <img src="<?php echo base_url() . 'assets/dist/img/logo_ma.png'; ?>" style="height:auto;width:53px;" class="mb-2">
    <h2><b>E-Cuti</b></h2>
    <h6 class="mb-3"><b>Pengadilan Agama Sumber Kelas I A</b></h6>
  </div>

  <div class="card card-outline card-default">
    <div class="card-body">

      <p class="login-box-msg">
        Change your password for <br>
        <small class="text-gray"><b><?php echo $email; ?></b></small>
      </p>

      <?php echo $this->session->flashdata('message'); ?>

      <form action="<?php echo base_url('authentication/change_password'); ?>" method="post">

        <!-- Hidden input untuk email & token -->
        <input type="hidden" name="email" value="<?php echo $email; ?>">
        <input type="hidden" name="token" value="<?php echo $token; ?>">

        <!-- New Password -->
        <div class="form-group">
          <div class="input-group mb-1">
              <input type="password" name="password1" class="form-control" placeholder="New Password">
              <div class="input-group-append">
                <div class="input-group-text">
                  <span class="fas fa-lock"></span>
                </div>
              </div>
          </div>
          <?php echo form_error('password1', '<small class="text-danger pl-1"><i class="fas fa-exclamation-circle fa-fw"></i> ', '</small>'); ?>
        </div>

        <!-- Repeat Password -->
        <div class="form-group">
          <div class="input-group mb-1">
              <input type="password" name="password2" class="form-control" placeholder="Repeat Password">
              <div class="input-group-append">
                <div class="input-group-text">
                    <span class="fas fa-lock"></span>
                </div>
              </div>
          </div>
          <?php echo form_error('password2', '<small class="text-danger pl-1"><i class="fas fa-exclamation-circle fa-fw"></i> ', '</small>'); ?>
        </div>

        <div class="row">
          <div class="col-12">
            <button type="submit" class="btn btn-orange btn-block">Change Password</button>
          </div>
        </div>

      </form>

    </div>
  </div>

</div>

</body>
