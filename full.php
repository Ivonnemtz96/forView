<!DOCTYPE html>
<html lang="en">
<?php
include('includes/head.php');



if (isset($_REQUEST['activo'])and($_REQUEST['activo']!='')) {
    extract($_REQUEST);

    $var54_1='';
    $var54_2='';
    $var54_3='';

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
         include('modules/full.php');
         include('includes/footer.php');
        ?>
    </div>
    <?php
        include('includes/scripts.php');
    ?>
</body>

</html>
