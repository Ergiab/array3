<!Doctype html>
<html>
<head>
<title>Latihan array dalam array </title>
<style>
div{
    width: 120PX;
    height: 120px;
    background-color: yellow;
    text-align: center;
    line-height: 90px;
    margin: 3px;
    float: left;
    transition: 1s;
    font-size: 80px; 
}
.kotak:hover{
    transform:rotate(360deg);
    border-radius: 50%;
}
</style>
</head>

<body>

<?php 
$angka = [
    [1,2,3],
    [4,5,6],
    [7,8,9]
];
?>

<?php foreach ($angka as $a) : ?>
    <?php foreach ($a as $b) : ?>
    <div class="kotak"> <?php echo $b; ?></div>
    <?php endforeach; ?>
<?php endforeach; ?>

</body>
</html>