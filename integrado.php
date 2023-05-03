<!DOCTYPE html>
<html lang="en">
<?php
include('includes/head.php');



if (isset($_REQUEST['activo'])and($_REQUEST['activo']!='')) {
    extract($_REQUEST);



    $var34_1='';
    $var34_2='';
    $var34_3='';

    $var54_1='';
    $var54_2='';
    $var54_3='';

    if($activo==38){
        $var38_1="active-block";
        $var38_2="active";
        $var38_3="display: block;";
    }
    if($activo==54){
        $var54_1="active-block";
        $var54_2="active";
        $var54_3="display: block;";
    }
}
?>


<body>
    <div class="content-wrapper">
        <?php
         include('includes/header.php');
         include('modules/integrado.php');
         include('includes/footer.php');
         include('includes/redes.php');
        ?>
    </div>
    <?php
        include('includes/scripts.php');
    ?>
</body>

</html>
