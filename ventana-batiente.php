<!DOCTYPE html>
<html lang="en">
<?php
include('includes/head.php');


if (isset($_REQUEST['activo'])and($_REQUEST['activo']!='')) {
    extract($_REQUEST);

    $var28_1='';
    $var28_2='';
    $var28_3='';
    if($activo==28){
        $var28_1="active-block";
        $var28_2="active";
        $var28_3="display: block;";
    }

}

?>

<body>
    <div class="content-wrapper">
        <?php
         include('includes/header.php');
         include('modules/ventana-batiente.php');
         include('includes/footer.php');
         include('includes/redes.php');
        ?>
    </div>
    <?php
        include('includes/scripts.php');
    ?>
</body>

</html>