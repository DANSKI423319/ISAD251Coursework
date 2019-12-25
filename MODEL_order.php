<?php

class orderItems
{

    private $tableID;
    private $orderID;
    private $itemID;
    private $quantity;
    private $itemPrice;
    private $completed;

    public function __construct($tableID, $orderID, $itemID, $quantity, $itemPrice, $completed)
    {
        $this->tableID = $tableID;
        $this->orderID = $orderID;
        $this->itemID = $itemID;
        $this->quantity = $quantity;
        $this->itemPrice = $itemPrice;
        $this->completed = $completed;
    }

    public function getTableID()
    {
        return $this->tableID;
    }

    public function setTableID($tableID)
    {
        $this->tableID = $tableID;
    }

    public function getOrderID()
    {
        return $this->orderID;
    }

    public function setOrderID($orderID)
    {
        $this->orderID = $orderID;
    }

    public function getItemID()
    {
        return $this->itemID;
    }

    public function setItemID($itemID)
    {
        $this->itemID = $itemID;
    }

    public function getQuantity()
    {
        return $this->quantity;
    }

    public function setQuantity($quantity)
    {
        $this->quantity = $quantity;
    }

    public function getItemPrice()
    {
        return $this->itemPrice;
    }

    public function setItemPrice($itemPrice)
    {
        $this->itemPrice = $itemPrice;
    }

    public function getCompleted()
    {
        return $this->compelted;
    }

    public function setCompleted($completed)
    {
        $this->completed = $completed;
    }
}
