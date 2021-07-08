<?php require_once 'header.php';
require_once 'functions.php';
$getKisAuto = kisAuto($dbc);
?>

<body>
    <?php require_once 'nav.php'; ?>
    <!-- Start Welcome area -->
    <div class="all-content-wrapper">
        <!-- Basic Form Start -->
        <div class="basic-form-area basic-form-area--formating mg-tb-15">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <div class="sparkline8-list mt-b-30">
                            <h3 class="basic-form-area__h3 color-white">Módosítható rekordok</h3>
                            <table class="basic-form-area__table">
                                <thead>
                                    <h3 class="basic-form-area__table__thead__h3 strong-font">Kis autó (3,8m)</h3>
                                    <tr>
                                        <th scope="col" class="color-white">Alap</th>
                                        <th scope="col" class="color-white">Prémium / Kozmikus</th>
                                        <th scope="col" class="color-white">Professzionális / Galaktikus</th>
                                        <th class="strong-font class=" color-white"" scope="col">Kis autó (3,8m)</th>
                                        <th class="strong-font class=" color-white"" scope="col">Módosítási zóna</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php foreach ($getKisAuto as $kisAuto) : ?>
                                        <tr>
                                            <td data-label="Alap" class="color-white"><?php esc($kisAuto["alap"]) ?></td>
                                            <td data-label="Prémium / Kozmikus" class="color-white"><?php esc($kisAuto["premium_kozmikus"]) ?></td>
                                            <td data-label="Professzionális / Galaktikus" class="color-white"><?php esc($kisAuto["professzionalis_galaktikus"]) ?></td>
                                            <td data-label="-" class="color-white"><?php esc($kisAuto["megjegyzes"]) ?></td>
                                            <td>
                                                <a href="kis-auto-modositas.php?kis_auto_id=<?php esc($kisAuto["kis_auto_id"]) ?>">Módosítás</a>
                                            </td>
                                        </tr>
                                    <?php endforeach; ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <?php include 'footer.php'; ?>
</body>

</html>