<?php

class orderItems
{
    private $orderItemNum;
    private $orderID;
    private $itemID;
    private $quantity;

    public function __construct($orderItemNum, $orderID, $itemID, $quantity)
    {
        $this->orderItemNum = $orderItemNum;
        $this->orderID = $orderID;
        $this->itemID = $itemID;
        $this->quantity = $quantity;
    }

    public function getOrderItemNum()
    {
        return $this->OrderItemNum;
    }

    public function getOrderID()
    {
        return $this->orderID;
    }

    public function getItemID()
    {
        return $this->itemID;
    }

    public function getQuantity()
    {
        return $this->quantity;
    }

    public function setOrderItemNum($orderItemNum)
    {
        $this->tableID = $orderItemNum;
    }

    public function setOrderID($orderID)
    {
        $this->orderID = $orderID;
    }

    public function setItemID($itemID)
    {
        $this->itemID = $itemID;
    }

    public function setQuantity($quantity)
    {
        $this->quantity = $quantity;
    }
}
