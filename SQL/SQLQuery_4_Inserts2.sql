-- Starter data for user table.
INSERT INTO trUsers(userID, userName, userPassword, userType)
VALUES (1, 'John Doe', 'loveTea', 'User');
INSERT INTO trUsers(userID, userName, userPassword, userType)
VALUES (2, 'Jane Doe', 'hateTea', 'Admin');

-- Starter data for menu table.
INSERT INTO trMenu (itemID, itemName, itemDesc, itemPrice, ItemStock)
VALUES (1, 'Cappucino', 'Italian espress coffee', 2.75, 100);
INSERT INTO trMenu (itemID, itemName, itemDesc, itemPrice, ItemStock)
VALUES (2, 'Latte', 'Milky coffee', 2.75, 100);
INSERT INTO trMenu (itemID, itemName, itemDesc, itemPrice, ItemStock)
VALUES (3, 'Flat white', 'Coffee rich and foam topped coffee', 2.75, 100);
INSERT INTO trMenu (itemID, itemName, itemDesc, itemPrice, ItemStock)
VALUES (4, 'Tea', 'A classic cuppa', 2.75, 100);
INSERT INTO trMenu (itemID, itemName, itemDesc, itemPrice, ItemStock)
VALUES (5, 'Hot chocolate', 'Warm and sweet chocolate drink, topped with mini marshmellows', 2.10, 100);
INSERT INTO trMenu (itemID, itemName, itemDesc, itemPrice, ItemStock)
VALUES (6, 'Lemon sponge cake', 'Moist sponge cake, topped with lemon icing and caster sugar', 3.10, 12);
INSERT INTO trMenu (itemID, itemName, itemDesc, itemPrice, ItemStock)
VALUES (7, 'Chocolate cake', 'Chocolate sponge cake, covered in cocoa powder and spotted with choccy bits', 3.25, 24);
INSERT INTO trMenu (itemID, itemName, itemDesc, itemPrice, ItemStock)
VALUES (8, 'Shortbread', 'Crunchy scottis buttered shortbread', 1.80, 50);
INSERT INTO trMenu (itemID, itemName, itemDesc, itemPrice, ItemStock)
VALUES (9, 'Scone', 'Classic british tea-time desert, comes with butter and jam', 2.00, 50);
INSERT INTO trMenu (itemID, itemName, itemDesc, itemPrice, ItemStock)
VALUES (10, 'Doughnut', 'Delicous jam filled desert', 3.10, 50);
