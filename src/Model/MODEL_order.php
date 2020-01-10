<?php

class order
{
    private $tableID;
    private $orderID;
    private $totalPrice;
    
    // CONSTRUCTOR.
    public function __construct($orderID, $tableID, $totalPrice)
    {
        $this->orderID = $orderID;
        $this->tableID = $tableID;
        $this->totalPrice = $totalPrice;
    }

    // GETS.
    public function getOrderID()
    {
        return $this->orderID;
    }

    public function getTableID()
    {
        return $this->tableID;
    }

    public function getTotalPrice()
    {
        return $this->totalPrice;
    }

    // SETS.
    public function setOrderID($orderID)
    {
        $this->orderID = $orderID;
    }

    public function setTableID($tableID)
    {
        $this->tableID = $tableID;
    }

    public function setTotalPrice($totalPrice)
    {
        $this->totalPrice = $totalPrice;
    }
}
