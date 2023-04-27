<!DOCTYPE html>
<html lang="en">
<?php
include('includes/head.php');



if (isset($_REQUEST['activo'])and($_REQUEST['activo']!='')) {
    extract($_REQUEST);


    $var17_1='';
    $var17_2='';
    $var17_3='';

    $var38_1='';
    $var38_2='';
    $var38_3='';

    $var54_1='';
    $var54_2='';
    $var54_3='';

    $varEs_1='';
    $varEs_2='';
    $varEs_3='';

    if($activo==17){
        $var17_1="active-block";
        $var17_2="active";
        $var17_3="display: block;";
    }
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
    if($activo==1){
        $varEs_1="active-block";
        $varEs_2="active";
        $varEs_3="display: block;";
    }

}


?>


<body>
    <div class="content-wrapper">
        <?php
         include('includes/header.php');
         include('modules/integrado.php');
         include('includes/footer.php');
        ?>
    </div>
    <?php
        include('includes/scripts.php');
    ?>
</body>

</html>
