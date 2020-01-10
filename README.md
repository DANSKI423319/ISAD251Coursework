# ISAD251 CW (The Cozy Team Room)

### The Application
The cozy team room application is a prototype product to simulate a user interface for placing and viewing orders as a customer. Including the system functionality to be maintained by an admin user as well. The admin can view previous orders, and edit the menu to their desire.

### The System Specifics
The application runs primarily through HTML and Java views, which are adapted by PHP controller files. The PHP controller files communicate with PHP model files. These model files communicate to a remote myPhpAdmin SQL server with stored procedures that are called on the Admin and Customer user interactions. This application has been primarily tested on Google Chrome and Opera with no issues.

### The Capabilities and Functions
- Customers can select a table ID (between 1 and 100).
- Customers can view a menu table.
- Customers can place an order.
- Admins can view orders that have been placed.
- Admins can remove/cancel current orders.
- Admins can edit menu items.
- Admins can add menu items.
- Admins can remove menu items.

### Links
- Video demo : https://youtu.be/24fRWnZVJUs
- Style sheet : https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css
- API output 1 : http://cent-5-534.uopnet.plymouth.ac.uk/ISAD251/dskillman/ISAD251Coursework/API_printMenu.php
- API output 2 : http://cent-5-534.uopnet.plymouth.ac.uk/ISAD251/dskillman/ISAD251Coursework/API_printOrders.php
- Application Start Point : http://cent-5-534.uopnet.plymouth.ac.uk/ISAD251/dskillman/ISAD251Coursework/VIEW_index.php

### Screenshots
**Main Menu :** Choose between Customer or Admin.
![MainMenu.png](https://i.imgur.com/JYayND0.png)
#### CUSTOMER
**Customer :** Place an order / View an order.
![CustomerMainMenu.png](https://i.imgur.com/3zREAf2.png)
**Customer :** View of menu, capable of placing an order.
![CustomerMenu.png](https://i.imgur.com/R1SZzxU.png)
**Customer :** View a previous order (not functional).
![CustomerOrders.png](https://i.imgur.com/DlLOl15.png)
#### ADMIN
**Admin :** View orders / Ammend the menu.
![AdminMainMenu.png](https://i.imgur.com/RR4VhT7.png)
**Admin :** View past orders.
![AdminOrders.png](https://i.imgur.com/UdsNpe1.png)
**Admin :** Ammend menu.
![AdminMenu.png](https://i.imgur.com/6p0Qjny.png)
