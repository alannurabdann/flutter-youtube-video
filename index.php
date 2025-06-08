<?php 
// File json yang akan dibaca
$file = "data.json";

// Mendapatkan file json
$dataAPI = file_get_contents($file);

// Mendecode json
$data = json_decode($dataAPI, true);

?>

<!DOCTYPE html>
<html>
<head>
    <title>Flutter Youtube</title>
</head>
<body>
<h1>Link Youtube Flutter</h1>
<h3>Last Update : 08/06/2025</h3>
<table border="1" style="width: 100%">
    <thead>
        <tr>
            <th>Title</th>
            <th>Description</th>
            <th>Link</th>
        </tr>
    </thead>
    <tbody>
        <?php foreach ($data["data"] as $row): ?>
            <tr>
                <td><?= $row["title"] ?></td>
                <td><?= $row["desc"] ?></td>
                <td><?= $row["url"] ?></td>
            </tr>
        <?php endforeach ?>

    </tbody>
</table>
</body>
</html>