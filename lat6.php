<?php
$angka = [24,57,9,34,2,44,75,99];
?>
<!Doctype html>
<html>
<head>
<title>Latihan Pengulangan foreach</title>
<style>
div{
    width: 45PX;
    height: 45px;
    background-color: cyan;
    text-align: center;
    line-height: 45px;
    margin: 3px;
    float: left;
}
</style>
</head>

<body>
<?php foreach ($angka as $key) { ?>
<div> <?php echo $key; ?></div>
<?php } ?>

</body>
</html>