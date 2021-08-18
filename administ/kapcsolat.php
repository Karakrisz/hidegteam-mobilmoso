<?php require_once 'header.php';
require_once 'functions.php';
?>

<body>
  <?php require_once 'nav.php'; ?>
  <!-- Start Welcome area -->
  <div class="all-content-wrapper">
    <!-- Basic Form Start -->
    <div class="basic-form-area mg-tb-15">
      <div class="container-fluid">
        <div class="row">
          <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
            <div class="sparkline8-list mt-b-30">
              <div class="sparkline8-hd">
                <div class="main-sparkline8-hd">
                  <h1 class="color-white">Kapcsolat</h1>
                </div>
              </div>
              <div class="sparkline8-graph">
                <div class="basic-login-form-ad">
                  <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                      <div class="basic-login-inner">
                        <p class="basic-login-form-ad__p color-white">Tölts ki minden mezőt a rögzítéshez</p>
                        <form id="kapcsolatInsert" action="kapcsolat.php" method="POST">
                          <div class="form-group-inner">
                            <label class="form-group-inner__label color-white">Cím (address)</label>
                            <input name="address" id="address" type="text" class="form-control" placeholder="Cím (address)" required />
                          </div>
                          <div class="form-group-inner">
                            <label class="form-group-inner__label color-white">Telefon</label>
                            <input name="telefon" id="telefon" type="text" class="form-control" placeholder="Telefon" required />
                          </div>
                          <div class="form-group-inner">
                            <label class="form-group-inner__label color-white">E - mail</label>
                            <input name="admin_email" id="admin_email" type="text" class="form-control" placeholder="E - mail" required />
                          </div>
                          <div class="login-btn-inner">
                            <div class="inline-remember-me">
                              <input type="hidden" name="event" id="event" value="kapcsolatInsert">
                              <button class="btn btn-sm btn-primary pull-right login-submit-cs" type="submit">Rögzítés</button>
                            </div>
                          </div>
                          <div class="form-div-text-box">
                            <div class="alert alert-success form-div-text-box__alert-box">
                              <p class="form-div-text-box__alert-box__p">
                              </p>
                            </div>
                          </div>
                        </form>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <a href="kapcsolatok.php" class="btn btn-sm btn-primary pull-right login-submit-cs basic-form-area__link">Rögzített rekordok megtekintése</a>
          </div>
        </div>
      </div>
    </div>
  </div>
  <?php include 'footer.php'; ?>
  <script>
    // karaKrisz start

    // Ajax 
    $("#kapcsolatInsert").submit(function(event) {
      event.preventDefault();
      var event = 'kapcsolatInsert';
      var address = $("#address").val();
      var telefon = $("#telefon").val();
      var admin_email = $("#admin_email").val();

      $.ajax({
        type: "POST",
        url: "kis-auto.php",
        data: "address=" + address + "&event=" + event + "&telefon=" + telefon + "&admin_email=" + admin_email,
        success: function() {
          $('.form-div-text-box__alert-box').fadeIn();
          $('.form-div-text-box__alert-box__p').text('Adat rögzítve!');
          $("#beep__active").delay(50).get(0).play();
        }
      });
    });
  </script>
</body>

</html>