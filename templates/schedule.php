<html>
<head>
    <meta charset="utf-8">
    <title><?php echo $title; ?></title>
</head>
<body>
<table border="1px" border-collapse="collapse">
    <tr>
        <th>№</th>
        <th>Дата</th>
        <th>Сумма, руб</th>
        <th>Погашение основного долга, руб</th>
        <th>Выплата процентов, руб</th>
        <th>Остаток</th>
    </tr>
    <?php
    foreach ($schedule as $month):
        ?>
        <tr>
            <td><?php echo $month['id']?></td>
            <td><?php echo $month['currentDate']?></td>
            <td><?php echo $month['payment']?></td>
            <td><?php echo $month['bodyPayment']?></td>
            <td><?php echo $month['interestPayment'] ?></td>
            <td><?php echo $month['remainder'] ?></td>
        </tr>
    <?php endforeach; ?>
</table>
</body>
</html>

