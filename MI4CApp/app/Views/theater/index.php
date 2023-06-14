<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Theater JKT48</title>
</head>
<body>
    <h1>Data Theater JKT48</h1>
    <table border="1" cellspacing="0" cellpading="5">
        <tr>
            <th>No</th>
            <th>Nama Theater</th>
            <th>Shonichi</th>
            <th>Durasi</th>
        </tr>
        <?php $i = 1; ?>
        <?php foreach($data_theater as $row) : ?>
            <tr>
                <td><?= $i++; ?></td>
                <td><?php echo $row['nama_theater'] ?></td>
                <td><?php echo $row['sonichi'] ?></td>
                <td><?php echo $row['durasi'] ?></td>
            </tr>
        <?php endforeach; ?>
    </table>
</body>
</html>