<!DOCTYPE html>
<html lang="en">
<?php
include('includes/head.php');
?>
<?php
if (isset($_GET)) {
    include_once("php/msg.php");
}
?>
<body>
    <div class="content-wrapper">
        <?php
         include('includes/header.php');
         include('modules/index.php');
         include('includes/footer.php');
         include('includes/redes.php');
        ?>
    </div>
    <?php
        include('includes/scripts.php');
    ?>
</body>

</html>