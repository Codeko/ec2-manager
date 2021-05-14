# ec2-manager
AWS EC2 manager portal

## description
EC2 allows users to have machines on which they can run their own projects

## start-up
### Install git
1. sudo apt-get install git
### Create the folder where you want to put the project
2. mkdir name´s project
### Access the new folder 
3. cd name´s-proyect
### Clone the repository
4. git clone https://github.com/Codeko/ec2-manager.git
### Access the new project 
5. cd name´s-proyect
### To create user for phpMyAdmin
6. mysql -u root -P
### Now you can add a new MySQL user with the username of your choice.
7. CREATE USER 'USERNAME'@'%' IDENTIFIED BY 'PASSWORD';
### And finally grant superuser privileges to the user you just created
8. GRANT ALL PRIVILEGES ON *.* TO 'newuser'@'localhost';
9. FLUSH PRIVILEGES;
### Create database
10. CREATE DATABASE name´s database;
11. EXIT; 
### modify DB_PASSWORD and DB_DATABSE in .env file adding name´s database you created in step 10 and mysql password
12. DB_PASSWORD= PASSWORD
13. BD_DATABASE= name´s database
### give user permission
14. chmod -R 777 .
### Install administration panel
15. composer require orchid/platform
### Run the installation process by running the command
16. php artisan orchid:install
### To create a user with maximum permissions, you can run the following command with a username, email, and password
17. php artisan orchid:admin admin admin@admin.com password
### Start the server
18. php artisan serve

### To access the administration panel
http://127.0.0.1:8000/admin
### Emain and password that has been assigned in step 17
- email: admin@admin.com
- password: password
