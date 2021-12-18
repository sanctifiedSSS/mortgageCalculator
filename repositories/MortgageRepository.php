<?php

class mortgageRepository
{
    protected $connection = null;



    public function __construct(PDO $connection)
    {
        $this->connection = $connection;
    }

    public function getAll($propertyPrice, $minInitialPayment, $propertyType)
    {
        $statement = $this->connection->prepare("SELECT * FROM programs 
            WHERE maxLoanAmount >= {$propertyPrice} 
            AND minInitialPayment <= {$minInitialPayment} 
            AND propertyType = '{$propertyType}'");
        $statement->execute([
            "propertyPrice" => $propertyPrice,
            "minInitialPayment" => $minInitialPayment,
            "propertyType" => $propertyType
        ]);

        return $statement->fetchAll();
    }




}