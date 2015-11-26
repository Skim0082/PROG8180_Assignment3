## PROG8180 Web Technologies - Assignment 3

- I have tested using **Google Chrome Browser**, Please review my works with Chrome Browser.

##Part 1

  - **Development Environment** : WAMP Server
  - **Database name** : assignment3
  - **Table names** : articles, users, comments, tags, articles_tags
  - **Database access user**  : user : **root**  / password : **root**
    - Configuration for connection of database was already set in app.php in config folder of CakePHP 
    - Database schema are located in the the folder of 'config/schema' in CakePHP structure
      - **Schema files name** : **Assignment3_DB.sql** which includes creating Database, Tables, and insert data already exist
  - I did not allow customer to sign up, only employees as admin can access to Order List after Login.
    - Because my concept and understanding about the requirements is as below;
    - Customer can only make an order with order page and ask for employee when customer wnat to change order infomation
  - I did not implement to validate specific details such as the wrong url address.

####Blog Articles Url 
  - **Articles List** : ```http://localhost/Assignment3/Articles/index```
  - **Add new article** : ```http://localhost/Assignment3/articles/add```
  - **Log in** : ```http://localhost/Assignment3/users/login```
    - **login access as admin** : user name / password --> **admin** / **admin**
      - above Assignment3_DB.sql includes admin data in the users table
      - if users table has no data of admin, can add the add page as below;
        - http://localhost/Assignment3/users/add
      - another Author login: all Authors password are same with 'aaa'


