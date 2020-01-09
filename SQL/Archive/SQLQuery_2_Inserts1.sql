INSERT INTO menu_table (itemID, itemName, itemDesc, itemPrice, ItemStock)
VALUES (1, 'Cappucino', 'Italian espresso coffee', 2.79, 100);
INSERT INTO menu_table (itemID, itemName, itemDesc, itemPrice, ItemStock)
VALUES (2, 'Latte', 'Milky coffee', 2.79, 100);
INSERT INTO menu_table (itemID, itemName, itemDesc, itemPrice, ItemStock)
VALUES (3, 'Flat white', 'Rich and foam topped coffee', 2.79, 100);
INSERT INTO menu_table (itemID, itemName, itemDesc, itemPrice, ItemStock)
VALUES (4, 'Tea', 'Classic british cuppa', 2.79, 100);
INSERT INTO menu_table (itemID, itemName, itemDesc, itemPrice, ItemStock)
VALUES (5, 'Hot chocolate', 'Warm and sweet chocolate drink, topped with mini marshmallows', 2.10, 100);
INSERT INTO menu_table (itemID, itemName, itemDesc, itemPrice, ItemStock)
VALUES (6, 'Lemon sponge cake', 'Moist sponge cake, topped with lemon icing and caster sugar', 3.10, 12);
INSERT INTO menu_table (itemID, itemName, itemDesc, itemPrice, ItemStock)
VALUES (7, 'Chocolate cake', 'Chocolate sponge cake, covered in cocoa powder and spotted with choccy bits', 3.25, 24);
INSERT INTO menu_table (itemID, itemName, itemDesc, itemPrice, ItemStock)
VALUES (8, 'Shortbread', 'Crunchy scottis buttered shortbread', 1.80, 50);
INSERT INTO menu_table (itemID, itemName, itemDesc, itemPrice, ItemStock)
VALUES (9, 'Scone', 'Classic british tea-time desert, comes with butter and jam', 2.00, 50);
INSERT INTO menu_table (itemID, itemName, itemDesc, itemPrice, ItemStock)
VALUES (10, 'Doughnut', 'Delicous jam filled desert', 3.10, 50);

INSERT INTO order_table (orderID, tableID, totalPrice)
VALUES (1, 1, 11.16);
INSERT INTO order_table (orderID, tableID, totalPrice)
VALUES (2, 6, 6.58);
INSERT INTO order_table (orderID, tableID, totalPrice)
VALUES (3, 12, 4.98);
INSERT INTO order_table (orderID, tableID, totalPrice)
VALUES (4, 21, 8.96); 

INSERT INTO order_item_table (orderItemNum, orderID, itemID, quantity)
VALUES (1, 1, 1, 4);
INSERT INTO order_item_table (orderItemNum, orderID, itemID, quantity)
VALUES (2, 2, 7, 2);
INSERT INTO order_item_table (orderItemNum, orderID, itemID, quantity)
VALUES (3, 3, 4, 2);
INSERT INTO order_item_table (orderItemNum, orderID, itemID, quantity)
VALUES (4, 4, 4, 2);
INSERT INTO order_item_table (orderItemNum, orderID, itemID, quantity)
VALUES (5, 4, 8, 2);