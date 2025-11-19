<head>
  <link rel="stylesheet" href="<?= base_url(); ?>assets/welcome/css/styles.css">

  <style>
    /* === GLOBAL PAGE STYLE === */
    body.login-page {
      height: 100vh;
      margin: 0;
      display: flex;
      justify-content: center;
      align-items: center;
      background: url('<?= base_url("assets/welcome/assets/img/background.png"); ?>') no-repeat center center/cover;
      position: relative;
      font-family: "Poppins", Arial, sans-serif;
    }

    /* Dark overlay */
    body.login-page::before {
      content: "";
      position: absolute;
      inset: 0;
      background: rgba(40, 20, 5, 0.55);
      z-index: 1;
    }

    /* === LOGIN CONTAINER === */
    .login-box {
      position: relative;
      z-index: 2;
      width: 420px;
      max-width: 92%;
      text-align: center;
    }

    .login-logo img {
      width: 60px;
      margin-bottom: 10px;
    }

    .login-logo h2 {
      font-size: 28px;
      font-weight: 700;
      color: #fff;
      margin: 0;
      letter-spacing: 1px;
    }

    .login-logo h6 {
      font-size: 14px;
      font-weight: 400;
      color: #eee;
      margin-top: 5px;
      opacity: 0.9;
    }

    /* === CARD STYLE === */
    .card-login-custom {
      background: rgba(255, 255, 255, 0.96);
      border-radius: 14px;
      padding: 30px 25px;
      box-shadow: 0 10px 25px rgba(0,0,0,0.35);
      margin-top: 20px;
    }

    .login-box-msg {
      font-size: 16px;
      margin-bottom: 20px;
      font-weight: 500;
      color: #333;
    }

    /* === INPUTS === */
    .input-group .form-control {
      border-radius: 10px 0 0 10px;
      padding: 12px;
      font-size: 14px;
    }

    .input-group-text {
      border-radius: 0 10px 10px 0;
      background: #ff7043;
      color: #fff;
      border: none;
    }

    /* === BUTTON === */
    .btn-primary {
      background: #ff7043;
      border: none;
      font-size: 15px;
      padding: 10px 0;
      border-radius: 10px;
      transition: 0.25s;
    }

    .btn-primary:hover {
      background: #ff5722;
    }

    /* === FORGOT PASSWORD LINK === */
    a {
      color: #000000;
      font-size: 14px;
      text-decoration: none;
    }

    a:hover {
      color: #ff5722;
      text-decoration: underline;
    }
  </style>
</head>

<body class="login-page">
<div class="login-box">

  <!-- LOGO -->
  <div class="login-logo">
    <img src="<?= base_url('assets/dist/img/logo_pa_sumber.png'); ?>">
    <h2><b>E-Cuti</b></h2>
    <h6><b>Pengadilan Agama Sumber Kelas 1A</b></h6>
  </div>

  <!-- LOGIN CARD -->
  <div class="card card-login-custom">
    <div class="card-body">
        
      <p class="login-box-msg">Sign in to start your session</p>

      <?= $this->session->flashdata('message'); ?>

      <form action="<?= base_url('authentication'); ?>" method="post">
        
        <!-- NIP -->
        <div class="input-group mb-3">
          <input type="text" name="nip" class="form-control" placeholder="NIP">
          <div class="input-group-append">
            <div class="input-group-text"><span class="fas fa-user"></span></div>
          </div>
        </div>
        <?= form_error('nip', '<small class="text-danger">', '</small>'); ?>

        <!-- PASSWORD -->
        <div class="input-group mb-3">
          <input type="password" name="password" class="form-control" placeholder="Password">
          <div class="input-group-append">
            <div class="input-group-text"><span class="fas fa-lock"></span></div>
          </div>
        </div>
        <?= form_error('password', '<small class="text-danger">', '</small>'); ?>

        <!-- ACTION ROW -->
        <div class="row align-items-center">
          <div class="col-7 text-left">
            <a href="<?= base_url('authentication/forgot_password'); ?>">I forgot my password</a>
          </div>
          <div class="col-5">
            <button type="submit" class="btn btn-primary btn-block">
              <i class="fas fa-sign-in-alt"></i> Login
            </button>
          </div>
        </div>

      </form>

    </div>
  </div>

</div>
</body>
