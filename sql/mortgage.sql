CREATE TABLE  IF NOT EXISTS programs(
    id int (10) NOT NULL AUTO_INCREMENT PRIMARY KEY,
    bankName varchar (255) not null,
    programName varchar (255) not null,
    propertyType varchar (7) not null,
    interestRate decimal (4,2) not null,
    minInitialPayment decimal (4,2) not null,
    maxLoanAmount decimal (9,0) not null
    ) ENGINE=InnoDB;

INSERT INTO programs (bankName, programName, propertyType, interestRate, minInitialPayment, maxLoanAmount) VALUES ('Росбанк', 'Новостройка', 'Жилая', 7.85, 10, 120000000);
INSERT INTO programs (bankName, programName, propertyType, interestRate, minInitialPayment, maxLoanAmount) VALUES ('Росбанк', 'Гараж/машиноместо', 'Нежилая', 8.15, 25, 3000000);
INSERT INTO programs (bankName, programName, propertyType, interestRate, minInitialPayment, maxLoanAmount) VALUES ('Росбанк', 'Готовый дом', 'Жилая', 8.85, 30, 120000000);
INSERT INTO programs (bankName, programName, propertyType, interestRate, minInitialPayment, maxLoanAmount) VALUES ('Росбанк', 'Семейная ипотека', 'Жилая', 3.5, 15, 12000000);
INSERT INTO programs (bankName, programName, propertyType, interestRate, minInitialPayment, maxLoanAmount) VALUES ('Росбанк', 'Льготная ипотека', 'Жилая', 4.49, 15, 3000000);
INSERT INTO programs (bankName, programName, propertyType, interestRate, minInitialPayment, maxLoanAmount) VALUES ('Росбанк', 'Апартаменты', 'Жилая', 7.85, 15, 120000000);
INSERT INTO programs (bankName, programName, propertyType, interestRate, minInitialPayment, maxLoanAmount) VALUES ('Росбанк', 'Комната', 'Жилая', 8.35, 25, 120000000);
INSERT INTO programs (bankName, programName, propertyType, interestRate, minInitialPayment, maxLoanAmount) VALUES ('Сбербанк', 'На новостройку от 0,1%', 'Жилая', 8.5, 15, 60000000);
INSERT INTO programs (bankName, programName, propertyType, interestRate, minInitialPayment, maxLoanAmount) VALUES ('Сбербанк', 'Приобретение готового жилья', 'Жилая', 8.7, 10, 60000000);
INSERT INTO programs (bankName, programName, propertyType, interestRate, minInitialPayment, maxLoanAmount) VALUES ('Сбербанк', 'Ипотека с господдержкой для семей с детьми', 'Жилая', 4.7, 15, 12000000);
INSERT INTO programs (bankName, programName, propertyType, interestRate, minInitialPayment, maxLoanAmount) VALUES ('Сбербанк', 'Господдержка', 'Жилая', 6.05, 15, 3000000);
INSERT INTO programs (bankName, programName, propertyType, interestRate, minInitialPayment, maxLoanAmount) VALUES ('Сбербанк', 'Загородная недвижимость и земля', 'Нежилая', 8.8, 25, 60000000);
INSERT INTO programs (bankName, programName, propertyType, interestRate, minInitialPayment, maxLoanAmount) VALUES ('Сбербанк', 'Загородная недвижимость и земля', 'Жилая', 8.8, 25, 60000000);
INSERT INTO programs (bankName, programName, propertyType, interestRate, minInitialPayment, maxLoanAmount) VALUES ('Сбербанк', 'По двум документам', 'Жилая', 5, 20, 60000000);
INSERT INTO programs (bankName, programName, propertyType, interestRate, minInitialPayment, maxLoanAmount) VALUES ('Сбербанк', 'Строительство жилого дома', 'Жилая', 9.6, 25, 60000000);
INSERT INTO programs (bankName, programName, propertyType, interestRate, minInitialPayment, maxLoanAmount) VALUES ('Сбербанк', 'Ипотека плюс', 'Жилая', 8.3, 20, 60000000);
INSERT INTO programs (bankName, programName, propertyType, interestRate, minInitialPayment, maxLoanAmount) VALUES ('Сбербанк', 'Гараж/машиноместо', 'Нежилая', 9.7, 25, 30000000);
INSERT INTO programs (bankName, programName, propertyType, interestRate, minInitialPayment, maxLoanAmount) VALUES ('Сбербанк', 'Ипотека для участников программы реновации', 'Жилая', 8.8, 20, 60000000);
INSERT INTO programs (bankName, programName, propertyType, interestRate, minInitialPayment, maxLoanAmount) VALUES ('Альфа-Банк', 'Семейная ипотека', 'Жилая', 4.99, 15, 12000000);
INSERT INTO programs (bankName, programName, propertyType, interestRate, minInitialPayment, maxLoanAmount) VALUES ('Альфа-Банк', 'Готовое жилье', 'Жилая', 7.99, 15, 50000000);
INSERT INTO programs (bankName, programName, propertyType, interestRate, minInitialPayment, maxLoanAmount) VALUES ('Альфа-Банк', 'Ипотека с господдержкой', 'Жилая', 5.99, 15, 3000000);
INSERT INTO programs (bankName, programName, propertyType, interestRate, minInitialPayment, maxLoanAmount) VALUES ('Альфа-Банк', 'Строящееся жилье', 'Жилая', 8.49, 10, 50000000);
INSERT INTO programs (bankName, programName, propertyType, interestRate, minInitialPayment, maxLoanAmount) VALUES ('Альфа-Банк', 'Жилой дом с земельным участком', 'Жилая', 9.49, 50, 50000000);
INSERT INTO programs (bankName, programName, propertyType, interestRate, minInitialPayment, maxLoanAmount) VALUES ('Банк ВТБ', 'Вторичное жилье', 'Жилая', 8.9, 10, 60000000);
INSERT INTO programs (bankName, programName, propertyType, interestRate, minInitialPayment, maxLoanAmount) VALUES ('Банк ВТБ', 'Господдержка 2020', 'Жилая', 5.75, 15, 3000000);
INSERT INTO programs (bankName, programName, propertyType, interestRate, minInitialPayment, maxLoanAmount) VALUES ('Банк ВТБ', 'Новостройка', 'Жилая', 8.9, 10, 60000000);
INSERT INTO programs (bankName, programName, propertyType, interestRate, minInitialPayment, maxLoanAmount) VALUES ('Банк ВТБ', 'Семейная ипотека', 'Жилая', 4.7, 15, 12000000);
INSERT INTO programs (bankName, programName, propertyType, interestRate, minInitialPayment, maxLoanAmount) VALUES ('Банк ВТБ', 'Свой дом', 'Жилая', 9.4, 10, 20000000);
INSERT INTO programs (bankName, programName, propertyType, interestRate, minInitialPayment, maxLoanAmount) VALUES ('Банк ВТБ', 'Строительство дома', 'Жилая', 10, 20, 20000000);
INSERT INTO programs (bankName, programName, propertyType, interestRate, minInitialPayment, maxLoanAmount) VALUES ('Банк Открытие', 'Вторичное жилье', 'Жилая', 8.3, 10, 50000000);
INSERT INTO programs (bankName, programName, propertyType, interestRate, minInitialPayment, maxLoanAmount) VALUES ('Банк Открытие', 'Новостройка', 'Жилая', 8.3, 10, 50000000);
INSERT INTO programs (bankName, programName, propertyType, interestRate, minInitialPayment, maxLoanAmount) VALUES ('Банк Открытие', 'Апартаменты', 'Жилая', 8.2, 40, 30000000);
INSERT INTO programs (bankName, programName, propertyType, interestRate, minInitialPayment, maxLoanAmount) VALUES ('Банк Открытие', 'Загородный дом', 'Жилая', 9.4, 30, 15000000);







