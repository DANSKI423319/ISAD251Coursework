<?php
include 'MODEL_menuItem.php';
include 'MODEL_order.php';
include 'MODEL_orderItems.php';

class databank
{
    private $DB_SERVER = 'Proj-mysql.uopnet.plymouth.ac.uk';
    private $DB_USER = 'ISAD251_DSkillman';
    private $DB_PASSWORD = 'ISAD251_22205389';
    private $DB_DATABASE = 'ISAD251_DSkillman';
    private $dbConnection;
    private $dataSourceName;

    public function __construct(PDO $dbConnection = null)
    {
        $this->dataSourceName = 'mysql:dbname=' . $this->DB_DATABASE . ';host=' . $this->DB_SERVER;
        try {
            $this->dbConnection = new PDO($this->dataSourceName, $this->DB_USER, $this->DB_PASSWORD);
        } catch (PDOException $err) {
            echo 'Connection failed: ', $err->getMessage();
        }
        return $dbConnection;
    }

    // Used by admins and customers, 
    // dbQuery value swapped for different procedure calls that have specific (or all) fields from the menu table.
    public function getMenu($dbQuery)
    {
        $dbOutput = $this->dbConnection->prepare($dbQuery);
        $dbOutput->execute();

        $resultSet = $dbOutput->fetchAll(PDO::FETCH_ASSOC);
        return $resultSet;
    }

    // Show all fields from order table.
    public function getOrders()
    {
        $dbQuery = "CALL viewOrders1";
        $dbOutput = $this->dbConnection->prepare($dbQuery);
        $dbOutput->execute();

        $resultSet = $dbOutput->fetchAll(PDO::FETCH_ASSOC);
        return $resultSet;
    }

    // Used to print all order IDs, and to get a new one for the customer menu.
    public function getOrderNo()
    {
        $dbQuery = "SELECT orderID FROM order_table";
        $dbOutput = $this->dbConnection->prepare($dbQuery);
        $dbOutput->execute();

        $resultSet = $dbOutput->fetchAll(PDO::FETCH_ASSOC);
        return $resultSet;
    }

    // Function to place an order (to order_table, this is the order without items)
    public function customerPlaceOrder($order)
    {
        // Variables take values from storage in model class.
        $orderID = $order->getOrderID();
        $tableID = $order->getTableID();
        $totalPrice = $order->getTotalPrice();

        // Create SQL query, sets changing fields/parameters.
        $dbQuery = "CALL customerPlaceOrder(:orderID, :tableID, :totalPrice)";
        $dbOutput = $this->dbConnection->prepare($dbQuery);

        // Executes the SQL query, assigns variable values to the changing fields.
        $dbOutput->bindParam(':orderID', $orderID, PDO::PARAM_INT);
        $dbOutput->bindParam(':tableID', $tableID, PDO::PARAM_INT);
        $dbOutput->bindParam(':totalPrice', $totalPrice, PDO::PARAM_STR);
        $dbOutput->execute();
    }

    // Function for admins to edit items.
    public function adminEditItem($menuItem)
    {
        $itemID = $menuItem->getItemID();
        $itemName = $menuItem->getItemName();
        $itemDesc = $menuItem->getItemDesc();
        $itemPrice = $menuItem->getItemPrice();
        $itemStock = $menuItem->getItemStock();

        $dbQuery = "CALL adminEditItem(:itemName, :itemDesc, :itemPrice, :itemStock, :itemID)";
        $dbOutput = $this->dbConnection->prepare($dbQuery);

        $dbOutput->bindParam(':itemID', $itemID, PDO::PARAM_INT);
        $dbOutput->bindParam(':itemName', $itemName, PDO::PARAM_STR);
        $dbOutput->bindParam(':itemDesc', $itemDesc, PDO::PARAM_STR);
        $dbOutput->bindParam(':itemPrice', $itemPrice, PDO::PARAM_STR);
        $dbOutput->bindParam(':itemStock', $itemStock, PDO::PARAM_INT);
        $dbOutput->execute();
    }

    // Function for admins to add items.
    public function adminAddItem($menuItem)
    {
        $itemID = $menuItem->getItemID();
        $itemName = $menuItem->getItemName();
        $itemDesc = $menuItem->getItemDesc();
        $itemPrice = $menuItem->getItemPrice();
        $itemStock = $menuItem->getItemStock();

        $dbQuery = "CALL adminAddItem(:itemID, :itemName, :itemDesc, :itemPrice, :itemStock)";
        $dbOutput = $this->dbConnection->prepare($dbQuery);

        $dbOutput->bindParam(':itemID', $itemID, PDO::PARAM_INT);
        $dbOutput->bindParam(':itemName', $itemName, PDO::PARAM_STR);
        $dbOutput->bindParam(':itemDesc', $itemDesc, PDO::PARAM_STR);
        $dbOutput->bindParam(':itemPrice', $itemPrice, PDO::PARAM_STR);
        $dbOutput->bindParam(':itemStock', $itemStock, PDO::PARAM_INT);

        $dbOutput->execute();
    }

    // Function for admins to delete items.
    public function adminDeleteItem($itemID)
    {
        $dbQuery = "CALL adminDeleteItem(:itemID)";
        $dbOutput = $this->dbConnection->prepare($dbQuery);

        $dbOutput->bindParam(':itemID', $itemID, PDO::PARAM_INT);
        $dbOutput->execute();
    }

    // Function for admins to delete/cancel orders.
    public function adminDeleteOrder($orderID)
    {
        $dbQuery = "CALL adminDeleteOrder(:orderID)";
        $dbOutput = $this->dbConnection->prepare($dbQuery);

        $dbOutput->bindParam(':orderID', $orderID, PDO::PARAM_INT);
        $dbOutput->execute();
    }

    // Function to find orders with an order id. NOT WORKING.
    function searchOrders($orderID)
    {
        $dbQuery = "CALL customerViewOrder(:orderID)";
        $dbOutput = $this->dbConnection->prepare($dbQuery);

        $dbOutput->bindParam(':orderID', $orderID, PDO::PARAM_INT);
        $dbOutput->execute();
    }
}
