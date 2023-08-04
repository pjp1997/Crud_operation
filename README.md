# Crud_operation
 CRUD operation using PHP and MySQL to manage user records. It involves a "users" table with fields like first_name, last_name, email, password, and image. The project offers a user interface for listing, adding, updating, and deleting users.

## Project Structure

The project contains the following files and directories:

1. `dbcon.php`: This file handles the database connection. It contains PHP code to connect to the MySQL database using credentials like hostname, username, password, and database name.

2. `delete_page.php`: This file handles the deletion of a user record from the database. It uses the provided user ID to delete the corresponding user from the database.

3. `footer.php`: This file contains the HTML and PHP code for the footer section of your web pages.

4. `header.php`: This file contains the HTML and PHP code for the header section of your web pages.

5. `index.php`: This is the main entry point of your application. It displays the list of all users from the database. The list is fetched from the database and displayed using PHP.

6. `insert_data.php`: This file handles the insertion of new user data into the database. It receives user data via a form submission and inserts it into the "users" table.

7. `style.css`: This file contains the CSS code for styling your web pages.

8. `update_page.php`: This file handles the updating of user data in the database. It receives user data via a form submission and updates the corresponding user in the "users" table based on the provided user ID.



## Database Structure

The project uses a MySQL database with the following "users" table structure:


