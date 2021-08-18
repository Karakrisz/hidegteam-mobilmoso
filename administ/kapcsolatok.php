<?php require_once 'header.php';
require_once 'functions.php';
$getKacsolat = kapcsolat($dbc);
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
                                    <h3 class="basic-form-area__table__thead__h3 strong-font">Kapcsolat</h3>
                                    <tr>
                                        <th scope="col" class="color-white">Cím (address)</th>
                                        <th scope="col" class="color-white">Telefon</th>
                                        <th scope="col" class="color-white">E - mail</th>
                                        <th class="strong-font class=" color-white"" scope="col">Módosítási zóna</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php foreach ($getKacsolat as $kapcsolat) : ?>
                                        <tr>
                                            <td data-label="Cím (address)" class="color-white"><?php esc($kapcsolat["address"]) ?></td>
                                            <td data-label="Telefon" class="color-white"><?php esc($kapcsolat["telefon"]) ?></td>
                                            <td data-label="E - mail" class="color-white"><?php esc($kapcsolat["email"]) ?></td>
                                            <td>
                                                <a href="kapcsolat-modositas.php?kapcsolat_id=<?php esc($kapcsolat["kapcsolat_id"]) ?>">Módosítás</a>
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