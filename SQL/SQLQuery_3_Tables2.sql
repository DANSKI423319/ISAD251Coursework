CREATE TABLE trUsers -- Create user table.
(
    userID          INT NOT NULL,
    userName        VARCHAR(50) NOT NULL,
    userPassword    VARCHAR(50) NOT NULL,
    userType        VARCHAR (20) NOT NULL, 

    PRIMARY KEY (userID)
);

CREATE TABLE trMenu -- Create trMenu table.
(
    itemID      INT NOT NULL,
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
    userID          INT NOT NULL,
    itemID          INT NOT NULL,
    quantity        INT NOT NULL,
    itemPrice       FLOAT NOT NULL,

    FOREIGN KEY (userID) REFERENCES trUsers(userID),
    FOREIGN KEY (itemID) REFERENCES trMenu(itemID),

    PRIMARY KEY (tableID)
);

CREATE TABLE trCancelledOrders -- Create table for cancelled orders.
(
    orderID     INT NOT NULL,
    tableID     INT NOT NULL,
    reason      VARCHAR(150),
    totalCost   FLOAT NOT NULL ,

    FOREIGN KEY (tableID) REFERENCES trOrders(tableID),

    PRIMARY KEY (orderID)
);

