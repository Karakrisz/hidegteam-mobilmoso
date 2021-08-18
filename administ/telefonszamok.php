<?php require_once 'header.php';
require_once 'functions.php';
$getTelefonszam = telefonszam($dbc);
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
                                    <h3 class="basic-form-area__table__thead__h3 strong-font">Telefonszámok</h3>
                                    <tr>
                                        <th scope="col" class="color-white">Telefonszám</th>
                                        <th class="strong-font class=" color-white"" scope="col">Módosítási zóna</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php foreach ($getTelefonszam as $telefonszam) : ?>
                                        <tr>
                                            <td data-label="Telefonszám" class="color-white"><?php esc($telefonszam["telefonszam"]) ?></td>
                                            <td>
                                                <a href="telefonszam-modositasa.php?telefonszam_id=<?php esc($telefonszam["telefonszam_id"]) ?>">Módosítás</a>
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