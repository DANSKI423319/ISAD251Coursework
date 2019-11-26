CREATE TABLE trMenu -- Create trMenu table.
(
    itemID      INT NOT NULL,
	itemType    BIT NOT NULL,
    itemName    VARCHAR(50) NOT NULL,
    itemDesc    VARCHAR(150) NOT NULL,
    itemPrice   FLOAT NOT NULL, 
    itemStock   INT NOT NULL
                CHECK(itemStock <> 0),

    PRIMARY KEY (itemID)
);

CREATE TABLE trOrders -- Create table orders table.
(
    tableID         INT NOT NULL,
    orderID         INT NOT NULL,
    itemID          INT NOT NULL,
    quantity        INT NOT NULL,
    itemPrice       FLOAT NOT NULL,
	completed 		BIT DEFAULT NULL,

    FOREIGN KEY (itemID) REFERENCES trMenu(itemID),

    PRIMARY KEY (tableID)
);

