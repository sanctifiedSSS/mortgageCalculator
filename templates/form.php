<html>

<head>
    <meta charset="utf-8">
    <title>Ипотечный калькулятор</title>
</head>

<body>
    <form action="" method="POST">
        <p>Ваш возраст: <input type="number" name="age"></p>
        <p>Являетесь ли вы зарплатным клиентом? <input type="checkbox" name="payrollCustomer"></p>
        <p>Стоимость недвижимости: <input type="number" name="propertyPrice"></p>
        <p>Первоначальный взнос: <input type="number" name="initialPayment"></p>
        <p>Срок кредитования: <input type="number" name="creditLines"></p>
        <p>
        <div>Тип недвижимости:
            <input type="radio" id="res" name="propertyType" value="residential">
            <label for="res">Жилая</label>

            <input type="radio" id="nonRes" name="propertyType" value="nonResidential">
            <label for="nonRes">Нежилая</label>
        </div>
        <p><input type="submit" value="Отправить"></p>
    </form>

</body>

</html>