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
                                    <h1 class="color-white">Telefonszám rögzítése</h1>
                                </div>
                            </div>
                            <div class="sparkline8-graph">
                                <div class="basic-login-form-ad">
                                    <div class="row">
                                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                            <div class="basic-login-inner">
                                                <p class="basic-login-form-ad__p color-white">Tölts ki minden mezőt a rögzítéshez</p>
                                                <form id="telefonszamInsert" action="belso-extrak.php" method="POST">
                                                    <div class="form-group-inner">
                                                        <label class="form-group-inner__label color-white">Telefonszám</label>
                                                        <input name="telefonszam" id="telefonszam" type="text" class="form-control" placeholder="Telefonszám" required />
                                                    </div>
                                                    <div class="login-btn-inner">
                                                        <div class="inline-remember-me">
                                                            <input type="hidden" name="event" id="event" value="telefonszamInsert">
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
                        <a class="btn btn-sm btn-primary pull-right login-submit-cs basic-form-area__link" href="telefonszamok.php">Rögzített rekordok megtekintése</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <?php include 'footer.php'; ?>
    <script>
        // karaKrisz start

        // Ajax 
        $("#telefonszamInsert").submit(function(event) {
            event.preventDefault();
            var event = 'telefonszamInsert';
            var telefonszam = $("#telefonszam").val();

            $.ajax({
                type: "POST",
                url: "telefonszam.php",
                data: "telefonszam=" + telefonszam + "&event=" + event,
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