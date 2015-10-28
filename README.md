### Web Application Using Zend 2 and Doctrine ORM

Use **Zend 2 Framework** for Creating Web Application Include CURD Application for Books By Following the Steps into **Pluralsight course** [Building PHP Applications with the Zend Framework](http://www.pluralsight.com/courses/building-php-applications-zend-framework),
And CURD Application for Albums By Following the Steps into [The Official Zend 2 Framework Getting Started](http://framework.zend.com/manual/2.2/en/user-guide/overview.html).

But The steps is not the Same like **Pluralsight Course** Steps and **Official Zend 2 Framework Getting started** Steps.

Extra Steps is:

 1. Using **Doctrine ORM  Drive** Instead of **TableGateway** in working with Database.
 2. Using **Services** for writing logic instead of writing logic into **Controllers**.
    * [Use The Official Zend 2 Tutorial about Services and service manager](http://framework.zend.com/manual/current/en/in-depth-guide/services-and-servicemanager.html)
 3. Using **Dependency Injection** (Constructor Dependency Injection) with **Services** and **Controllers**.
    * [Use The Official Zend 2 Tutorial about Dependency Injection](http://framework.zend.com/manual/current/en/tutorials/quickstart.di.html)


To Run Web Application First Clone the project :
```
git clone https://github.com/ahmed-hamdy90/build_web_app_using_Zend_2_and_ORM.git
```

Then install project dependencies using Composer :

```
php composer.phar install
```

Also import [database.sql file](https://github.com/ahmed-hamdy90/build_web_app_using_Zend_2_and_ORM/blob/master/database.sql) for creating Database of web application
