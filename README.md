IMS - Inventory Management System (PHP + MySQL)


This is a small inventory management system built with plain PHP, Bootstrap for UI, and MySQL for data storage. It provides pages to add, view, edit and delete products, view stock reports, and a simple dashboard. The project includes an SQL dump (tb_product.sql) with sample data.

Features
Add Product (name, code, category, unit, cost, stock quantity)
Product List (search by product code, list with edit/delete links)
Edit and Delete product pages (UI present)
Stock report and a simple Dashboard (UI present)
tb_product.sql - SQL dump with sample rows


Preview the UI without a server
If you want to see only the front-end layout without running a PHP server or MySQL:

Create a static/ folder and put copies of these pages as .html in it:
dashboard_static.html, add_pdt_static.html, view_static.html, edit_pdt_static.html, stock_static.html, report_static.html, index_static.html, delete_confirm_static.html
Make sure to link to the CSS inside css using relative paths (e.g. ../css/style.css).
Open any static HTML file in your browser (double-click) to view the layout. Note: forms and actions will be non-functional.


How to run the full app locally
You need PHP and a MySQL server. Three common ways:

1. XAMPP (Windows)
Download: https://www.apachefriends.org/
Copy the project to C:\xampp\htdocs\ims
Start Apache and MySQL in XAMPP control panel
Import tb_product.sql using phpMyAdmin (http://localhost/phpmyadmin) or MySQL client
Update conn.php credentials if needed ($user, $pass, $db)
Open: http://localhost/ims/dashboard.php or index.php

2. Docker (recommended if you don't want to install XAMPP)
Create a docker-compose.yml that runs a MySQL container and a PHP-Apache container with the project mounted.
Set DB credentials to match conn.php or update conn.php to use env vars.

3. PHP built-in server + MySQL
Install PHP and MySQL server / use an existing MySQL server
From project root run:
php -S localhost:8000
Visit http://localhost:8000/add_pdt.php (you still need to import the SQL into MySQL)

Importing the SQL
Using MySQL CLI:

Create DB and import:
mysql -u root -p
CREATE DATABASE db_ims;
USE db_ims;
SOURCE C:/path/to/tb_product.sql;
Or in one command:
mysql -u root -p db_ims < "C:\path\to\tb_product.sql"

Known issues and recommended fixes
Schema mismatch: The app expects a pdt_stock column but the provided CREATE TABLE may not define it. Add it if missing:
ALTER TABLE tb_product ADD COLUMN pdt_stock INT(11) NOT NULL DEFAULT 0 AFTER pdt_unit;
conn.php uses $pass = 'root' — change to your MySQL root password (XAMPP default is '' empty).
add_pdt.php form action uses absolute path insert_pdt.php. Use insert_pdt.php or adjust to your server path.
SQL injection risk: insert_pdt.php uses raw POST values in SQL. Use prepared statements (mysqli_prepare) or escape inputs with mysqli_real_escape_string.
Bootstrap mismatch: header includes Bootstrap 5 but footer adds Bootstrap 4 scripts and jQuery. Use Bootstrap 5 bundle consistently.

Security
This project is a demo and not production-ready. Add authentication, input sanitization, and secure DB credentials before exposing it.

