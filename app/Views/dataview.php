<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h1>Subject List</h1>
    <ul>
        <?php foreach ($subjects as $sub): ?>
            <li><?php echo $sub['subject'] ?> - <?php echo $sub['abbr'] ?></li>
        <?php endforeach; ?>
    </ul>
</body>

</html>