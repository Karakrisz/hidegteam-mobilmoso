<?php require_once 'header.php';
require_once 'functions.php';
?>

<body>
  <!--[if lt IE 8]>
            <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->

  <div class="color-line"></div>
  <div class="container-fluid">
    <div class="row">
      <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
        <div class="back-link back-backend">
          <!-- <a href="index.php" class="btn btn-primary">Back to Dashboard</a> -->
        </div>
      </div>
    </div>
  </div>
  <div class="container-fluid">
    <div class="row">
      <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12"></div>
      <div class="col-md-4 col-md-4 col-sm-4 col-xs-12">
        <div class="text-center m-b-md custom-login">
          <h3 class="color-white login__h3">KÉRJÜK JELENTKEZZ BE AZ APP -ba</h3>
        </div>
        <?php if ($containsError) : ?>
          <div class="alert alert-danger">
            Valamelyik megadott adat hibás, kérjük próbáld meg újra!
          </div>
        <?php endif ?>
        <div class="hpanel">
          <div class="panel-body">
            <form action="login.php" method="POST" id="loginForm">
              <div class="form-group">
                <label class="control-label" for="felhasználónév">Felhasználói email</label>
                <input type="text" placeholder="example@gmail.com" title="Please enter you username" required="" value="" name="useremail" id="useremail" class="form-control">
                <span class="help-block small">Az alkalmazás egyedi felhasználói email címe</span>
              </div>
              <div class="form-group">
                <label class="control-label" for="jelszó">Jelszó</label>
                <input type="password" title="Please enter your password" placeholder="******" required="" value="" name="password" id="password" class="form-control">
                <span class="help-block small">Erős jelszavad</span>
              </div>
              <!-- <div class="checkbox login-checkbox">
                <label>
                  <input type="checkbox" class="i-checks"> Remember me </label>
                <p class="help-block small">(if this is a private computer)</p>
              </div> -->
              <input type="hidden" name="event" id="event" value="loginUser">
              <button class="btn btn-success btn-block loginbtn">Bejelentkezés</button>
              <!-- <a class="btn btn-default btn-block" href="#">Register</a> -->
            </form>
          </div>
        </div>
      </div>
      <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12"></div>
    </div>
  </div>
  <?php include 'footer.php'; ?>
</body>

</html>