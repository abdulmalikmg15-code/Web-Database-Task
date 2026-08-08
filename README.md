# Web Database Task

## Project Description

This project is a simple web application that allows users to enter their name and age, save the data in a MySQL database, display the saved records in a table, and change the user status using a Toggle button.

## Technologies Used

* HTML
* CSS
* JavaScript
* PHP
* MySQL
* XAMPP
* phpMyAdmin

## Project Features

1. Add a user's name and age.
2. Store the data in a MySQL database.
3. Display all saved users in a table.
4. Show the user's status as 0 or 1.
5. Toggle the status between 0 and 1.
6. Update the status without refreshing the page.

## Project Structure

```text
database-project/
│
├── index.php
├── db.php
├── add.php
├── toggle.php
├── script.js
├── style.css
└── README.md
```

## Database

The project uses a MySQL database named:

`web_task`

The database contains a table named:

`users`

The table includes:

* `id` - Unique ID for each user.
* `name` - User's name.
* `age` - User's age.
* `status` - User status (0 or 1).

## How the Project Works

The user enters a name and age in the form and clicks the **Submit** button.

PHP receives the submitted data and stores it in the MySQL database.

The saved data is then displayed in the users table.

When the user clicks the **Toggle** button, JavaScript sends a request to PHP. PHP updates the status in the MySQL database from 0 to 1 or from 1 to 0.

The new status is displayed immediately without refreshing the page.

## Local Setup

1. Install XAMPP.
2. Start Apache and MySQL from the XAMPP Control Panel.
3. Create a MySQL database named `web_task`.
4. Create the `users` table.
5. Place the project folder inside:

`C:\xampp\htdocs\`

6. Open the project using:

`http://localhost/database-project`

## Database Table

```sql
CREATE TABLE users (
    id INT AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(100) NOT NULL,
    age INT NOT NULL,
    status TINYINT(1) NOT NULL DEFAULT 0
);
```

## Author

Abdulmalik Mohammed Qiqib

## Project Purpose

This project was developed as part of the Summer Training Program 2026 to practice Frontend, Backend, PHP, JavaScript, and MySQL integration.

## Live Website
[https://web-database-task.freehosting.dev/](https://web-database-task.freehosting.dev/)


