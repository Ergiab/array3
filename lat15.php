<?php
$mahasiswa = ['ergia','043','rpl','email'];

?>
<html>
<head>
<title></title>
</head>
<body>
    <h1>latihan daftar $mahasiswa</h1>
    <ul>
<?php foreach ($mahasiswa as $mhs) : ?>
<li><?= $mhs; ?></li>
<?php endforeach; ?>
    </ul>
</body>
</html>