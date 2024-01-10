<!Doctype html>
<html>
<head>
<title>Latihan array dalam array </title>
<style>
div{
    width: 100PX;
    height: 100px;
    background-color: red;
    text-align: center;
    line-height: 90px;
    margin: 3px;
    float: left;
    transition: 1s;
    font-size: 80px; 
    border-radius: 50%;
}
.kotak:hover{
    transform:rotate(360deg);
    border-radius: 0;
}
</style>
</head>

<body>

<?php 
$angka = ["E","K","A","S","U","P","E","R"];
?>
<?php foreach ($angka as $a) : ?>
<div class="kotak"> <?php echo $a; ?></div>
<?php endforeach; ?>

</body>
</html>