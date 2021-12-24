<html>

<head>
    <meta charset="utf-8">
    <title><?php echo $title; ?></title>
    <link rel="stylesheet" href="templates/css/formCSS.css">
</head>

<body>
    <form action="/search" method="POST" class="form">
        <span class="error"><?php echo $noProgramsError;  ?></span>
        <p>
            <?php if(!empty($errors) && isset($errors['age']) ): ?>
            <span class="error"><?php echo $errors['age'] ?></span>
            <?php endif; ?> <br />
            Ваш возраст: <input type="number" name="mortgage[age]"
                 <?php if(!isset($errors['age']) || isset($noProgramsError)): ?>
                    value="<?=$values['age']?>"
                 <?php endif; ?> >
        </p>
        <p>Являетесь ли вы зарплатным клиентом? <input type="checkbox" name="mortgage[payrollCustomer]" class="check"
                <?php echo (isset($values['payrollCustomer']) ? 'checked' : ''); ?>>
        </p>
        <p>
            <?php if(!empty($errors) && isset($errors['propertyPrice']) ): ?>
            <span class="error"><?php echo $errors['propertyPrice'] ?></span>
            <?php endif; ?> <br />
            Стоимость недвижимости: <input type="number" name="mortgage[propertyPrice]"
                <?php if(!isset($errors['propertyPrice']) || isset($noProgramsError)): ?>
                    value="<?=$values['propertyPrice']?>"
                <?php endif; ?> >
        </p>
        <p>
            <?php if(!empty($errors) && isset($errors['initialPayment']) ): ?>
            <span class="error"><?php echo $errors['initialPayment'] ?></span>
            <?php endif; ?><br />
            Первоначальный взнос: <input type="number" name="mortgage[initialPayment]"
                <?php if(!isset($errors['initialPayment']) || isset($noProgramsError)): ?>
                    value="<?=$values['initialPayment']?>"
                <?php endif; ?> >
        </p>
        <p>
            <?php if(!empty($errors) && isset($errors['creditLines']) ): ?>
            <span class="error"><?php echo $errors['creditLines'] ?></span>
            <?php endif; ?><br />
            Срок кредитования (в месяцах): <input type="number" name="mortgage[creditLines]"
                <?php if(!isset($errors['creditLines']) || isset($noProgramsError)): ?>
                    value="<?=$values['creditLines']?>"
                <?php endif; ?> >
        </p>
        <p>
            <?php if(!empty($errors) && isset($errors['propertyType']) ): ?>
                <span class="error"><?php echo $errors['propertyType'] ?></span>
            <?php endif; ?><br />
        <div>Тип недвижимости:
            <label>
                <input type="radio" name="mortgage[propertyType]" value="Жилая" class="radio"
                    <?php echo (($values['propertyType'] === "Жилая") ? 'checked' : ''); ?>>
            Жилая</label>

            <label>
                <input type="radio" id="nonRes" name="mortgage[propertyType]" value="Нежилая" class="radio"
                    <?php echo (($values['propertyType'] === "Нежилая") ? 'checked' : ''); ?>>
            Нежилая</label>
        </div>
        <br />
        <p><input type="submit" value="Отправить"></p>
    </form>

</body>

</html>

