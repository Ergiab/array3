<?php
$barangtoko =[ 
    ['buku','043','tulis','2000'],
    ['pulpen','043','tulis','2000'],
    ['penghapus','043','tulis','2000']
];
?>
<html>
<head>
<title></title>
</head>
<body>
    <h1>daftar barang toko</h1>
    <ul>
<?php foreach ($barangtoko as $brg) : ?>
<li><?= $brg[0]; ?></li>
<li><?= $brg[1]; ?></li>
<li><?= $brg[2]; ?></li>
<li><?= $brg[3]; ?></li>
<?php endforeach; ?>
    </ul>
</body>
</html>