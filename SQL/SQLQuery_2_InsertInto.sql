-- Insert into User table.
INSERT INTO trUsers (userID, username, userPassword, userType) -- User 1: Customer
VALUES      (1, 'johnDoe', 'loveTea', 'Customer');
INSERT INTO trUsers (userID, username, userPassword, userType) -- User 2: Admin
VALUES      (2, 'janeDoe', 'hateTea', 'Admin');

-- Insert into menu table
-- Drinks
INSERT INTO trMenu (itemID, price, quantity) -- Cappucino
VALUES      (1, 2.75, 100);
INSERT INTO trMenu (itemID, price, quantity) -- Latte
VALUES      (2, 2.75, 100);
INSERT INTO trMenu (itemID, price, quantity) -- Flat white
VALUES      (3, 2.70, 100);
INSERT INTO trMenu (itemID, price, quantity) -- Tea
VALUES      (4, 2.10, 100);
INSERT INTO trMenu (itemID, price, quantity) -- Hot chocolate
VALUES      (5, 2.95, 100);
-- Food
INSERT INTO trMenu (itemID, price, quantity) -- Lemon sponge cake
VALUES      (6, 3.10, 12);
INSERT INTO trMenu (itemID, price, quantity) -- Chocolate cake
VALUES      (7, 3.25, 24);
INSERT INTO trMenu (itemID, price, quantity) -- Shortbread
VALUES      (8, 1.80, 50);
INSERT INTO trMenu (itemID, price, quantity) -- Scone with jam
VALUES      (9, 2.00, 50);
INSERT INTO trMenu (itemID, price, quantity) -- Doughnut
VALUES      (10, 3.10, 75);

-- Insert into drink table
INSERT INTO trDrinkDetails (itemID, drinkID, drinkTitle, drinkDesc) -- Cappucino
VALUES      (1, 1, 'Cappucino', 'Italian espresso coffee');
INSERT INTO trDrinkDetails (itemID, drinkID, drinkTitle, drinkDesc) -- Latte
VALUES      (2, 2, 'Latte', 'Hot milky coffee');
INSERT INTO trDrinkDetails (itemID, drinkID, drinkTitle, drinkDesc) -- Flat white
VALUES      (3, 3, 'Flat white', 'Coffee rich and foam topped coffee');
INSERT INTO trDrinkDetails (itemID, drinkID, drinkTitle, drinkDesc) -- Tea
VALUES      (4, 5, 'Tea', 'A classic cuppa');
INSERT INTO trDrinkDetails (itemID, drinkID, drinkTitle, drinkDesc) -- Hot Chocolate
VALUES      (5, 5, 'Hot chocolate', 'Warm and sweet chocolate topped with marshmellows')

-- Insert into food table
INSERT INTO trFoodDetails (itemID, foodID, foodTitle, foodDesc) -- Lemon sponge cake
VALUES      (6, 1, 'Lemon sponge cake', 'Moist sponge cake, topped with lemon icing and caster sugar')
INSERT INTO trFoodDetails (itemID, foodID, foodTitle, foodDesc) -- Chocolate cake
VALUES      (7, 2, 'Chocolate cake', 'Chocolate sponge cake, covered in cocoa powder and spotted with choccy bits')
INSERT INTO trFoodDetails (itemID, foodID, foodTitle, foodDesc) -- Shortbread
VALUES      (8, 3, 'Shortbread', 'Crunchy scottish buttered shortbread')
INSERT INTO trFoodDetails (itemID, foodID, foodTitle, foodDesc) -- Scone with jam
VALUES      (9, 4, 'Scone', 'Classic british tea-time desert, comes with butter and jam')
INSERT INTO trFoodDetails (itemID, foodID, foodTitle, foodDesc) -- Doughnut
VALUES      (10, 5, 'Doughnut', 'Delicous jam filled desert')

