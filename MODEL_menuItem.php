<?php

class menuItem
{
    private $itemID;
    private $itemName;
    private $itemDesc;
    private $itemPrice;
    private $itemStock;

    // CONSTRUCTOR.
    public function __construct($itemID, $itemName, $itemDesc, $itemPrice, $itemStock)
    {
        $this->itemID = $itemID;
        $this->itemName = $itemName;
        $this->itemDesc = $itemDesc;
        $this->itemPrice = $itemPrice;
        $this->itemStock = $itemStock;
    }

    // GETS
    public function getItemID()
    {
        return $this->itemID;
    }

    public function getItemName()
    {
        return $this->itemName;
    }

    public function getItemDesc()
    {
        return $this->itemDesc;
    }

    public function getItemPrice()
    {
        return $this->itemPrice;
    }

    public function getItemStock()
    {
        return $this->itemStock;
    }

    // SETS
    public function setItemID($itemID)
    {
        $this->itemID = $itemID;
    }

    public function setItemName($itemName)
    {
        $this->itemName = $itemName;
    }

    public function setItemDesc($itemDesc)
    {
        $this->itemDesc = $itemDesc;
    }

    public function setItemPrice($itemPrice)
    {
        $this->itemPrice = $itemPrice;
    }

    public function setItemStock($itemStock)
    {
        $this->itemStock = $itemStock;
    }
}
