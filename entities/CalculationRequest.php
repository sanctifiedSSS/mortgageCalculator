<?php

class CalculationRequest
{
    protected $age;
    protected $payrollCustomer;
    protected $propertyPrice;
    protected $initialPayment;
    protected $creditLines;
    protected $propertyType;

    public function __construct
    (
        $age,
        $payrollCustomer,
        $propertyPrice,
        $initialPayment,
        $creditLines,
        $propertyType
    )
    {
        $this->age = $age;
        $this->age = $age;
        $this->payrollCustomer = $payrollCustomer;
        $this->propertyPrice = $propertyPrice;
        $this->initialPayment = $initialPayment;
        $this->creditLines = $creditLines;
        $this->propertyType = $propertyType;
    }

}