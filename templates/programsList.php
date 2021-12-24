<html>
<head>
<title><?php echo $title; ?></title>
</head>
<body>
<table border="1px" border-collapse="collapse">
<tr>
    <th>Банк</th>
    <th>Программа</th>
    <th>Стоимость недвижимости, руб</th>
    <th>Процентная ставка, %</th>
    <th>Аннуитетный платеж</th>
    <th>График диффернцированных платежей</th>
</tr>
<?php
    foreach ($programs as $program):
?>
<tr>
    <td><?php echo $program['bankName']?></td>
    <td><?php echo $program['programName']?></td>
    <td><?php echo $values['propertyPrice']?></td>
    <td><?php echo $program['interestRate'] ?></td>
    <td><?php echo $monthlyPayment[$program['id']] ?></td>
    <td>
        <a href="/show?programID=<?php echo $program['id']?>
        &propertyPrice=<?php echo $values['propertyPrice']?>
        &initialPayment=<?php echo $values['initialPayment']?>
        &propertyType=<?php echo $values['propertyType']?>
        &creditLines=<?php echo $values['creditLines']?>">Ссылка</a>
    </td>
</tr>
<?php endforeach; ?>
</table>
</body>
</html>