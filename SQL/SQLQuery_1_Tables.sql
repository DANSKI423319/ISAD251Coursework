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
    price       FLOAT NOT NULL, 
    quantity    INT NOT NULL
                CHECK(Quantity <> 0),

    CONSTRAINT PK_itemID PRIMARY KEY (itemID)
);

CREATE TABLE trDrinkDetails -- Create drink details table.
(
    itemID      INT NOT NULL,
    drinkID     INT NOT NULL,
    drinkTitle  NVARCHAR(50) NOT NULL,
    drinkDesc   NVARCHAR(150) NOT NULL,

    CONSTRAINT PK_DrinkDetails PRIMARY KEY (itemID, drinkID),
    
    CONSTRAINT FK_DrinkDetailsID FOREIGN KEY (itemID) 
    REFERENCES trMenu(itemID)
);

CREATE TABLE trFoodDetails -- Create food details table.
(
    itemID      INT NOT NULL,
    foodID      INT NOT NULL,
    foodTitle   NVARCHAR(50) NOT NULL,
    foodDesc    NVARCHAR(150) NOT NULL,
    
    CONSTRAINT FK_FoodDetailsID FOREIGN KEY (itemID)
    REFERENCES trMenu(itemID),

    CONSTRAINT PK_FoodDetails PRIMARY KEY (itemID, foodID)
);

CREATE TABLE trOrders -- Create table orders table.
(
    tableID         INT NOT NULL,
    userID          INT NOT NULL,
    itemID          INT NOT NULL,
    drinkID         INT NOT NULL,
    drinkQuantity   INT NOT NULL,      
    foodID          INT NOT NULL,
    foodQuantity    INT NOT NULL,
    price           FLOAT NOT NULL,

    CONSTRAINT FK_UserOrderID FOREIGN KEY (userID)
    REFERENCES trUsers(userID),

    CONSTRAINT FK_OrderItemID FOREIGN KEY (itemID)
    REFERENCES trmenu(itemID),

    CONSTRAINT PK_trOrders PRIMARY KEY (tableID)
);