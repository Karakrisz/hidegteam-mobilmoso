<?php require_once 'header.php';
require_once 'functions.php';
$eredmeny = kapcsolatById($dbc, $kapcsolat_id);

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
                                    <h1 class="color-white">Kapcsolat módosítása</h1>
                                </div>
                            </div>
                            <div class="sparkline8-graph">
                                <div class="basic-login-form-ad">
                                    <div class="row">
                                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                            <div class="basic-login-inner">
                                                <p class="basic-login-form-ad__p color-white">Tölts ki minden mezőt a módosításhoz</p>
                                                <form id="kapcsolatEdit" action="kapcsolat-modositas.php?kapcsolat_id=<?php esc($eredmeny['kapcsolat_id']) ?>" method="POST">
                                                    <div class="form-group-inner">
                                                        <label class="form-group-inner__label color-white">Cím (address)</label>
                                                        <input name="address" id="address" type="text" class="form-control" value="<?php esc($eredmeny['address'])  ?>" required />
                                                    </div>
                                                    <div class=" form-group-inner">
                                                        <label class="form-group-inner__label color-white">Telefon</label>
                                                        <input name="telefon" id="telefon" type="text" class="form-control" value="<?php esc($eredmeny['telefon'])  ?>" required />
                                                    </div>
                                                    <div class="form-group-inner">
                                                        <label class="form-group-inner__label color-white">E - mail</label>
                                                        <input name="admin_email" id="admin_email" type="text" class="form-control" value="<?php esc($eredmeny['email'])  ?>" required />
                                                    </div>
                                                    <div class="login-btn-inner">
                                                        <div class="inline-remember-me">
                                                            <input type="hidden" name="event" id="event" value="kapcsolatEdit">
                                                            <button class="btn btn-sm btn-primary pull-right login-submit-cs" type="submit">Módosítás</button>
                                                        </div>
                                                    </div>
                                                    <?php
                                                    // Üzenet 
                                                    if (isset($uzenet)) {
                                                    ?>
                                                        <div class="alert alert-success">
                                                            <p class="text-danger text-center"><?php print $uzenet; ?></p>
                                                        </div>
                                                    <?php
                                                    }
                                                    ?>
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
                    </div>
                </div>
            </div>
        </div>
    </div>
    <?php include 'footer.php'; ?>
    <!-- <script>
        $("#kisAutoEdit").submit(function(event) {
            event.preventDefault();
            var event = 'kisAutoEdit';
            var kis_auto_id = 'kis_auto_id';
            var kis_auto_alap = $("#kis_auto_alap").val();
            var kis_auto_premium_kozmikus = $("#kis_auto_premium_kozmikus").val();
            var kis_auto_professzionalis_galaktikus = $("#kis_auto_professzionalis_galaktikus").val();
            var kis_auto_megjegyzes = $("#kis_auto_megjegyzes").val();
            $.ajax({
                type: "POST",
                url: "kis-auto-modositas.php",
                data: "kis_auto_alap=" + kis_auto_alap + "&event=" + event + "&kis_auto_premium_kozmikus=" + kis_auto_premium_kozmikus + "&kis_auto_professzionalis_galaktikus=" + kis_auto_professzionalis_galaktikus + "&kis_auto_megjegyzes=" + kis_auto_megjegyzes + "&kis_auto_id=" + kis_auto_id,
                success: function() {
                    $('.form-div-text-box__alert-box').fadeIn();
                    $('#form-div-text-box__alert-box__p').text('Adat rögzítve!');
                    $("#beep__active").delay(50).get(0).play();
                }
            });
        });
    </script> -->
</body>

</html>