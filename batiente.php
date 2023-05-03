<!DOCTYPE html>
<html lang="en">
<?php
$activo ="current-menu";
include('includes/head.php');

if (isset($_REQUEST['activo'])and($_REQUEST['activo']!='')) {
    extract($_REQUEST);

    $var_1='';
    $var_2='';
    $var_3='';
    if($activo==28){
        $var_1="active-block";
        $var_2="active";
        $var_3="display: block;";
    }


}

?>

<body>
    <div class="content-wrapper">
        <?php
         include('includes/header.php');
         include('modules/batiente.php');
         include('includes/footer.php');
         include('includes/redes.php');
        ?>
    </div>
    <?php
        include('includes/scripts.php');
    ?>
</body>

</html>