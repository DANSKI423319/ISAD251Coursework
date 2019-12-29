SELECT * FROM menu_table

SELECT itemID, itemName, itemDesc, itemPrice
FROM menu_table

SELECT order_item_table.orderID, tableID, totalPrice, order_item_table.orderitemNum, order_item_table.itemID, order_item_table.quantity
FROM order_table
JOIN order_item_table ON order_table.orderID = order_item_table.orderID
WHERE...