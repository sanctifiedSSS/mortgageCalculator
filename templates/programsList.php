<html>
<head>
<title><?php echo $title; ?></title>
</head>
<body>
<table border="1px solid black" border-collapse="collapse">
<tr>
    <th>Банк</th>
    <th>Программа</th>
    <th>Максимальный размер кредита, руб</th>
    <th>Процентная ставка, %</th>
    <th>Ежемесячный платеж</th>
    <th>График платежей</th>
</tr>
<?php
    foreach ($programs as $program):
?>
<tr>
    <td><?php echo $program['bankName']?></td>
    <td><?php echo $program['programName']?></td>
    <td><?php echo $program['maxLoanAmount']?></td>
    <td><?php echo $program['interestRate'] ?></td>
    <td><?php echo "" ?></td>
    <td><?php echo "" ?></td>
</tr>
<?php endforeach; ?>
</table>
</body>
</html>