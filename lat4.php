<?php
$angka = [24,57,9,34,2,44, 988];
?>
<!Doctype html>
<html>
<head>
<title>Latihan Pengulangan</title>
<style>
div{
    width: 45PX;
    height: 45px;
    background-color: yellow;
    text-align: center;
    line-height: 45px;
    margin: 3px;
    float: left;
}
</style>
</head>

<body>
<?php for( $i=0; $i< 7; $i++) { ?>
<div> <?php echo $angka[$i]; ?></div>
<?php } ?>

</body>
</html>