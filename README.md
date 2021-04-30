# ec2-manager
AWS EC2 manager portal

## description
EC2 allows users to have machines on which they can run their own projects

## start-up
### Install git
1. sudo apt-get install git
### Create the directory where you want to put the project
2. mkdir name´s-proyect
### Access the new directory 
3. cd name´s-proyect
### Clone the repository
4. git clone https://github.com/Codeko/ec2-manager.git
### Run mysql
5. /etc/init.d/mysql start
### Login database
6. mysql -u root -p
### Create database
7. CREATE DATABASE name´s-proyect
### Start the server
7. php artisan serve

### To access the administration panel
http://127.0.0.1:8000/admin
- email: admin@admin.com
- password: password