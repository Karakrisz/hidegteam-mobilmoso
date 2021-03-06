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
                                    <h1 class="color-white">Családi autó (4.6M)</h1>
                                </div>
                            </div>
                            <div class="sparkline8-graph">
                                <div class="basic-login-form-ad">
                                    <div class="row">
                                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                            <div class="basic-login-inner">
                                                <p class="basic-login-form-ad__p color-white">Tölts ki minden mezőt a rögzítéshez</p>
                                                <form id="csaladiAutoInsert" action="csaladi-auto.php" method="POST">
                                                    <div class="form-group-inner">
                                                        <label class="form-group-inner__label color-white">Alap</label>
                                                        <input name="csaladi_auto_alap" id="csaladi_auto_alap" type="text" class="form-control" placeholder="Alap ár" required />
                                                    </div>
                                                    <div class="form-group-inner">
                                                        <label class="form-group-inner__label color-white">Prémium / Kozmikus</label>
                                                        <input name="csaladi_auto_premium_kozmikus" id="csaladi_auto_premium_kozmikus" type="text" class="form-control" placeholder="Prémium / Kozmikus ár" required />
                                                    </div>
                                                    <div class="form-group-inner">
                                                        <label class="form-group-inner__label color-white">Professzionális / Galaktikus</label>
                                                        <input name="csaladi_auto_professzionalis_galaktikus" id="csaladi_auto_professzionalis_galaktikus" type="text" class="form-control" placeholder="Professzionális / Galaktikus ár" required />
                                                    </div>
                                                    <div class="form-group-inner">
                                                        <label class="form-group-inner__label color-white">Megjegyzés</label>
                                                        <input name="csaladi_auto_megjegyzes" id="csaladi_auto_megjegyzes" type="text" class="form-control" placeholder="Külsö, belső..." required />
                                                    </div>
                                                    <div class="login-btn-inner">
                                                        <div class="inline-remember-me">
                                                            <input type="hidden" name="event" id="event" value="csaladiAutoInsert">
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
                        <a href="csaladi-autok.php" class="btn btn-sm btn-primary pull-right login-submit-cs basic-form-area__link">Rögzített rekordok megtekintése</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <?php include 'footer.php'; ?>
    <script>
        // karaKrisz start

        // Ajax 
        $("#csaladiAutoInsert").submit(function(event) {
            event.preventDefault();
            var event = 'csaladiAutoInsert';
            var csaladi_auto_alap = $("#csaladi_auto_alap").val();
            var csaladi_auto_premium_kozmikus = $("#csaladi_auto_premium_kozmikus").val();
            var csaladi_auto_professzionalis_galaktikus = $("#csaladi_auto_professzionalis_galaktikus").val();
            var csaladi_auto_megjegyzes = $("#csaladi_auto_megjegyzes").val();
            $.ajax({
                type: "POST",
                url: "csaladi-auto.php",
                data: "csaladi_auto_alap=" + csaladi_auto_alap + "&event=" + event + "&csaladi_auto_premium_kozmikus=" + csaladi_auto_premium_kozmikus + "&csaladi_auto_professzionalis_galaktikus=" + csaladi_auto_professzionalis_galaktikus + "&csaladi_auto_megjegyzes=" + csaladi_auto_megjegyzes,
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