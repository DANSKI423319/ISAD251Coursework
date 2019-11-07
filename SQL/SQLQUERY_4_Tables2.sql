CREATE TABLE trUsers -- Create user table.
(
    userID          INT NOT NULL,
    username        NVARCHAR(50) NOT NULL,
    userPassword    NVARCHAR(50) NOT NULL,
    userType        NVARCHAR (20) NOT NULL, 

    CONSTRAINT PK_Users PRIMARY KEY (userID)
);

CREATE TABLE trMenu -- Create trMenu table.
(
    itemID      INT NOT NULL,
    itemPrice   FLOAT NOT NULL, 
    itemName    NVARCHAR(50) NOT NULL,
    itemDesc    NVARCHAR(150) NOT NULL,
    itemStock   INT NOT NULL
                CHECK(Quantity <> 0),

    CONSTRAINT PK_itemID PRIMARY KEY (itemID)
);

CREATE TABLE trOrders -- Create table orders table.
(
    tableID         INT NOT NULL,
    userID          INT NOT NULL,
    itemID          INT NOT NULL,
    quantity        INT NOT NULL,
    itemPrice       FLOAT NOT NULL,

    CONSTRAINT FK_UserOrderID FOREIGN KEY (userID)
    REFERENCES trUsers(userID),

    CONSTRAINT FK_OrderItemID FOREIGN KEY (itemID)
    REFERENCES trmenu(itemID),

    CONSTRAINT PK_trOrders PRIMARY KEY (tableID)
);
