# ISAD251 CW (The Cozy Team Room) Fact Sheet

### The Application (Fact sheet)
The Cozy Team Room application is a prototype product to simulate a user interface for placing and viewing orders as a customer in a team room environment. Including the system functionality to be maintained by an admin user as well. The admin can view or cancel previous orders or edit the menu to their desire with new food items or drinks. With this they can set the price and amount of stock as well.

### The System Specifics (Fact sheet)
The application runs primarily through HTML and Java views, which are adapted by PHP controller files. The PHP controller files communicate with PHP model files. These model files are linked to a remote myPhpAdmin SQL server with stored procedures and table values that are called on the Admin and Customer user interactions. This application has been primarily tested on Google Chrome and Opera with no issues. (Screenshots of Google Chrome).

### The Capabilities and Functions (Fact sheet)
- Customers can select a table ID (between 1 and 100).
- Customers can view a menu table.
- Customers can place an order.
- Admins can view orders that have been placed.
- Admins can remove/cancel current orders.
- Admins can edit menu items.
- Admins can add menu items.
- Admins can remove menu items.

(FACTSHEET WC: 201)

### Links
- Video demo : https://youtu.be/24fRWnZVJUs
- Style sheet : https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css
- API output 1 : http://cent-5-534.uopnet.plymouth.ac.uk/ISAD251/dskillman/ISAD251Coursework/src/API/API_printMenu.php
- API output 2 : http://cent-5-534.uopnet.plymouth.ac.uk/ISAD251/dskillman/ISAD251Coursework/src/API/API_printOrders.php
- Application Start Point : http://cent-5-534.uopnet.plymouth.ac.uk/ISAD251/dskillman/ISAD251Coursework/src/View/VIEW_index.php

### Screenshots
**Main Menu : Choose between Customer or Admin** by clicking either button.
![MainMenu.png](https://i.imgur.com/JYayND0.png)

#### CUSTOMER
**Customer : Place an order or View an order** by clicking either button.
![CustomerMainMenu.png](https://i.imgur.com/3zREAf2.png)
**Customer : View of menu**, to place an order, simply start adding items to your basket by pressing the green button.</br>
You can also remove items with the red button. When you are satisfied with your order press the blue button and your order will be confirmed and put into the system.
![CustomerMenu.png](https://i.imgur.com/R1SZzxU.png)
**Customer : View a previous order** (not functional).
![CustomerOrders.png](https://i.imgur.com/DlLOl15.png)

#### ADMIN
**Admin : View orders or Ammend the menu** by clicking either button.
![AdminMainMenu.png](https://i.imgur.com/RR4VhT7.png)
**Admin : View past orders**, the red button will put the order ID into the text box at the bottom of the table.</br> Here you confirm your removal of the order with the blue button. Pressing this will remove an order from the application.
![AdminOrders.png](https://i.imgur.com/UdsNpe1.png)
**Admin : Ammend menu.** Here you can edit, add and remove items.</br> 
To **edit an item** you must click on the green button in the table. It will load up a set of text boxes with strings.</br>
Here you must unlock the strings with the yellow button to confirm these are the values you're changing.</br>
When satisfied confirm the changes with the blue button.</br>
To **add an item**, you type into the top set of input boxes the set of information on the new item being added. Then press the blue button.</br>
To **remove an item**, simply press the red button on the table. And go to the short form at the bottom of the page. Check the item ID in the box, then click on the blue button to confirm the removal of the item.
![AdminMenu.png](https://i.imgur.com/6p0Qjny.png)
