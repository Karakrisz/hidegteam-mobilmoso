<?php

require_once 'header.php';
require_once 'functions.php';

if (!isset($_SESSION['user'])) {
    header('Location: login.php');
}

$user = createUser();

?>

<body>
    <?php require_once 'nav.php'; ?>
    <?php require_once 'home.php'; ?>
    <?php require_once 'footer.php'; ?>
</body>

</html>