# Randomize API

[https://api.randomize.co](https://api.randomize.co)

The **ultimate** person randomizer. 

This project does not put into practice [TDD](https://en.wikipedia.org/wiki/Test-driven_development), but it does have plenty of **FDD** (Fad Driven Development). Have you ever wondered how many technologies can be successfully squeezed into a single side project? We're about to find out. 

## Endpoints

TBD

## ERD 

![ERD](./Randomize_ERD.png?raw=true)

Source: https://www.draw.io 

## Version History

#### v0.1.4

- Create routes

#### v0.1.3

- Integrate Auth0 to lock down API endpoints

#### v0.1.2

- Create and run migrations to build database tables

#### v0.1.1

- Determine API endpoints required
- Create ERD for tables and relationships
- Set up development database
- Set up production database

#### v0.1.0

- Set up domain, host and SSL 
- Set up Git repo
- Initialized Lumen framework
- Set up Git web hooks for deployment to production

## Technologies

* [Lumen PHP Framework](https://lumen.laravel.com/)
* [MySQL](https://www.mysql.com/)
* [Eloquent ORM](https://laravel.com/docs/5.0/eloquent)
* [Auth0](https://auth0.com/)
* [Socket.IO](http://socket.io/)
* [Vagrant](https://www.vagrantup.com/)

## How to Contribute

* Fork this repo and then clone it to your machine
* Follow the [Laravel documentation](https://laravel.com/docs/5.2/homestead) to install Laravel Homestead, which will set up your development environment and dependencies
* [Install Composer](https://getcomposer.org/) to manage dependencies if you don't already have it
* [Configure your environment](https://lumen.laravel.com/docs/5.2/configuration#environment-configuration). Use **.env.example** in the repo to create a new file called **.env** with the environment variables relevant to your dev environment
* Create a new feature branch and do your magic
* Push the branch back to your forked GitHub repo
* Submit a pull request
