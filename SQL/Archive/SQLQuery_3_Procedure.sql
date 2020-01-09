/* ADMIN ADD ITEM. */
CREATE PROCEDURE adminAddItem (addItemID INT, addItemName VARCHAR(50), addItemDesc VARCHAR(150), addItemPrice FLOAT, addItemStock INT) AS
BEGIN
INSERT INTO menu_table (itemID, itemName, itemDesc, itemPrice, itemStock)
VALUES (addItemID, addItemName, addItemDesc, addItemPrice, addItemStock)
END;

/* ADMIN DELETE ITEM. */
CREATE PROCEDURE adminDeleteItem (removeItemID INT) AS
BEGIN
DELETE FROM menu_table 
WHERE itemID = removeItemID
END;

/* ADMIN EDIT ITEM. */
CREATE PROCEDURE adminEditItem (editItemName VARCHAR(50), editItemDesc VARCHAR(150), editItemPrice FLOAT, editItemStock INT, editItemID INT) AS
BEGIN
UPDATE menu_table 
SET itemName = editItemName, itemDesc = editItemDesc, itemPrice = editItemPrice, itemStock = editItemStock 
WHERE itemID = editItemID
END;

/* ADMIN MENU */
CREATE PROCEDURE adminMenu AS
BEGIN
SELECT * FROM menu_table
END;

/* CUSTOMER MENU */
CREATE PROCEDURE customerMenu AS
BEGIN
SELECT itemID, itemName, itemDesc, itemPrice
FROM menu_table
END;

/* CUSTOMER PLACE ORDER */
CREATE PROCEDURE customerPlaceOrder (addOrderID INT, addTableID INT, addTotalPrice FLOAT) AS
BEGIN
INSERT INTO order_table
VALUES (addOrderID, addTableID, addTotalPrice)
END;

/* GET ORDER ID */
CREATE PROCEDURE getOrderID AS
BEGIN
SELECT MAX(orderID) 
FROM order_table
END;

/* VIEW ORDERS 1 */
CREATE PROCEDURE viewOrders1 AS
BEGIN
SELECT * FROM order_table
END;

/* VIEW ORDERS 2. NON-FUNCTIONAL. */
CREATE PROCEDURE viewOrders2 AS
BEGIN
SELECT order_item_table.orderID, tableID, totalPrice, order_item_table.orderItemNum, order_item_table.itemID, order_item_table.quantity
FROM order_table
JOIN order_item_table ON order_table.orderID = order_item_table.orderID
END;


/* ADMIN DELETE ORDER. PART OF NON-FUNCTIONAL AREA */
CREATE PROCEDURE adminDeleteOrder (removeOrderID INT) AS
BEGIN
DELETE FROM order_table
WHERE orderID = removeOrderID
END;

/* CUSTOMER VIEW ORDER. PART OF NON-FUNCTIONAL AREA */
CREATE PROCEDURE customerViewOrder (searchID INT) AS
BEGIN
SELECT * FROM order_table
WHERE searchID
END;
