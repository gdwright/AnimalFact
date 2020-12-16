

<?php include("includes/a_config.php");
    $i = rand(0, count($bgr)-1); // generate random number size of the array

    $k = rand(0, count($fct[$i])-1); // generate placeholder rand for fact
    $selectedBgr = "$bgr[$i]"; // set variable equal to which random filename was chosen
    $selectedFct = $fct[$i][$k]; //$fct[$i][$k]
?>

<html>
  <head>
    <META http-equiv="refresh" content="0;URL=/AnimalFact/index.PHP">
  </head>
</html>



<style type="text/css">
    <!--
    body{
        background: url(images/<?php echo $selectedBgr; ?>) no-repeat;
        background-size: cover;
        background-position: center center;
    }
    -->
</style>

<body>
<div class = "container">
    <p style = "
        background-color: rgba(256, 256, 256, 0.7);
        font-family:  tahoma;
        margin-left:  auto;
        margin-right: auto;
        width: 36em;
        position: center;
    ">
        <?php echo $selectedFct; ?>
    </p>
</div>
</body>




