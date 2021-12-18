<html>

<head>
    <meta charset="utf-8">
    <title><?php echo $title; ?></title>
</head>

<body>
    <form action="/search" method="POST">
        <span style="color:red"><?php echo $noProgramsError; ?></span>
        <p>
            <?php if(!empty($errors) && isset($errors['age']) ): ?>
            <span style="color:red"><?php echo $errors['age'] ?></span>
            <?php endif; ?> <br />
            Ваш возраст: <input type="number" name="mortgage[age]" value="" >
        </p>
        <br />
        <p>Являетесь ли вы зарплатным клиентом? <input type="checkbox" name="mortgage[payrollCustomer]" value=""></p>
        <p>
            <?php if(!empty($errors) && isset($errors['propertyPrice']) ): ?>
            <span style="color:red"><?php echo $errors['propertyPrice'] ?></span>
            <?php endif; ?> <br />
            Стоимость недвижимости: <input type="number" name="mortgage[propertyPrice]" value="">
        </p>
        <p>
            <?php if(!empty($errors) && isset($errors['initialPayment']) ): ?>
            <span style="color:red"><?php echo $errors['initialPayment'] ?></span>
            <?php endif; ?><br />
            Первоначальный взнос: <input type="number" name="mortgage[initialPayment]" value="">
        </p>
        <p>
            <?php if(!empty($errors) && isset($errors['creditLines']) ): ?>
            <span style="color:red"><?php echo $errors['creditLines'] ?></span>
            <?php endif; ?><br />
            Срок кредитования (в месяцах): <input type="number" name="mortgage[creditLines]" value="">
        </p>
        <p>
            <?php if(!empty($errors) && isset($errors['propertyType']) ): ?>
                <span style="color:red"><?php echo $errors['propertyType'] ?></span>
            <?php endif; ?><br />
        <div>Тип недвижимости:
            <input type="radio" id="res" name="mortgage[propertyType]" value="Жилая">
            <label for="res">Жилая</label>

            <input type="radio" id="nonRes" name="mortgage[propertyType]" value="Нежилая">
            <label for="nonRes">Нежилая</label>
        </div>
        <br />
        <p><input type="submit" value="Отправить"></p>
    </form>

</body>

</html>

