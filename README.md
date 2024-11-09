<p align="center"> <a href="https://www.duckcloud.info" target="_blank"> <img src="https://www.duckcloud.info/assets/images/duckcloud-logo.png" width="400" alt="Duck Cloud Logo"> </a> </p> <p align="center"> <a href="https://github.com/DuckCloud/DC-FD-Laravel/actions"><img src="https://github.com/DuckCloud/DC-FD-Laravel/workflows/tests/badge.svg" alt="Build Status"></a> <a href="https://packagist.org/packages/duckcloud/dc-fd-laravel"><img src="https://img.shields.io/packagist/dt/duckcloud/dc-fd-laravel" alt="Total Downloads"></a> <a href="https://packagist.org/packages/duckcloud/dc-fd-laravel"><img src="https://img.shields.io/packagist/v/duckcloud/dc-fd-laravel" alt="Latest Stable Version"></a> <a href="https://opensource.org/licenses/MIT"><img src="https://img.shields.io/badge/license-MIT-brightgreen.svg" alt="License"></a> </p>

# About DC-FD-Laravel

DC-FD-Laravel is a specially designed repository for the Duck Cloud Full-Stack Development Course (DC-FD Course), focused on Laravel-based web development. This repository provides a robust starting point for learners to explore Laravel concepts and build hands-on projects that reinforce essential development skills.

Visit the official Duck Cloud website for more information on courses and resources.

# Key Features

Comprehensive Laravel Setup: Pre-configured project to jump-start Laravel learning.
Practical Exercises and Examples: Real-world scenarios covering the core and advanced features of Laravel.
Hands-On Projects: Build fully functional applications as part of the learning process.

# Getting Started

##Prerequisites
Ensure the following software is installed:

PHP >= 7.4
Composer
MySQL or a compatible database
Node.js and npm (optional for front-end)

## Installation Steps
Clone the Repository:

bash
Copy code
git clone https://github.com/DuckCloud/DC-FD-Laravel.git
cd DC-FD-Laravel
Install Dependencies:

bash
Copy code
composer install
Configure Environment:

bash
Copy code
cp .env.example .env
Update .env with the appropriate database credentials:

env
Copy code
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=dc-fd-laravel
DB_USERNAME=root
DB_PASSWORD=testing123
Generate Application Key:

bash
Copy code
php artisan key:generate
Run Migrations:

bash
Copy code
php artisan migrate
Serve the Application:

bash
Copy code
php artisan serve
Access the application at http://localhost:8000.

## Course Overview
DC-FD-Laravel covers the following Laravel concepts:

#### Routing and Controllers: Organize request handling and define routes.
#### Models and Eloquent ORM: Work with databases in an intuitive, object-oriented way.
#### Views and Blade Templates: Create dynamic, data-driven HTML views.
#### Authentication and Authorization: Secure your applications.
#### RESTful APIs: Build API endpoints for integration.

# Learning Resources
Explore Duck Cloud's course materials for video tutorials, documentation, and examples tailored to each section of the DC-FD-Laravel repository.

# Contributing
We welcome contributions from the community! To contribute:

# Fork this repository.
Create a feature branch.
Submit a pull request detailing the changes.

# License
This project is licensed under the MIT License.

