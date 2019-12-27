CREATE TABLE menu_table
(
    itemID      INT NOT NULL,
    itemName    VARCHAR(50) NOT NULL,
    itemDesc    VARCHAR(150) NOT NULL,
    itemPrice   FLOAT NOT NULL, 
    itemStock   INT NOT NULL
                CHECK(itemStock <> 0),

    PRIMARY KEY (itemID)
);

CREATE TABLE order_table
(
    orderID     INT NOT NULL,
	tableID     INT NOT NULL,
    totalPrice	FLOAT NOT NULL,

    PRIMARY KEY (orderID)
);

CREATE TABLE order_item_table
(
	orderitemNum	INT NOT NULL,
	orderID			INT NOT NULL,
	itemID			INT NOT NULL,
	quantity		INT NOT NULL,
	
	PRIMARY KEY (orderitemNum),
	
	FOREIGN KEY (itemID) REFERENCES menu_table(itemID),
	
	FOREIGN KEY (orderID) REFERENCES order_table(orderID)
);

