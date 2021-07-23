<?php require_once 'header.php';
require_once 'functions.php';
$getKishaszonjarmuvek = kishaszonjarmuvek($dbc);
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
                                    <h3 class="basic-form-area__table__thead__h3 strong-font">KISHASZONJÁRMŰ</h3>
                                    <tr>
                                        <th scope="col" class="color-white">Alap</th>
                                        <th scope="col" class="color-white">Prémium / Kozmikus</th>
                                        <th scope="col" class="color-white">Professzionális / Galaktikus</th>
                                        <th class="strong-font class=" color-white"" scope="col">KISHASZONJÁRMŰ</th>
                                        <th class="strong-font class=" color-white"" scope="col">Módosítási zóna</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php foreach ($getKishaszonjarmuvek as $kishaszonjarmu) : ?>
                                        <tr>
                                            <td data-label="Alap" class="color-white"><?php esc($kishaszonjarmu["alap"]) ?></td>
                                            <td data-label="Prémium / Kozmikus" class="color-white"><?php esc($kishaszonjarmu["premium_kozmikus"]) ?></td>
                                            <td data-label="Professzionális / Galaktikus" class="color-white"><?php esc($kishaszonjarmu["professzionalis_galaktikus"]) ?></td>
                                            <td data-label="-" class="color-white"><?php esc($kishaszonjarmu["megjegyzes"]) ?></td>
                                            <td>
                                                <a href="kishaszonjarmu-modositas.php?kishaszonjarmu_id=<?php esc($kishaszonjarmu["kishaszonjarmu_id"]) ?>">Módosítás</a>
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