<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="http://mvc-oop-toets.com/css/style.css">
    <title>Document</title>
</head>
<body>

   <h3><?= $data['title']; ?></h3> 

    <table border="1">
        <thead>
        <th>Naam</th>
        <th>Hoogte</th>
        <th>Land</th>
        <th>Kosten</th>
        <th>AantalPassagiers</th>
        </thead>
<tbody>
    <?= $data['rows']; ?>
</tbody>
    </table>

</body>
</html>