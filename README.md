<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400" alt="Laravel Logo"></a></p>

<p align="center">
<a href="https://github.com/laravel/framework/actions"><img src="https://github.com/laravel/framework/workflows/tests/badge.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/dt/laravel/framework" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/v/laravel/framework" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/l/laravel/framework" alt="License"></a>
</p>

## About Laravel

Laravel is a web application framework with expressive, elegant syntax. We believe development must be an enjoyable and creative experience to be truly fulfilling. Laravel takes the pain out of development by easing common tasks used in many web projects, such as:

- [Simple, fast routing engine](https://laravel.com/docs/routing).
- [Powerful dependency injection container](https://laravel.com/docs/container).
- Multiple back-ends for [session](https://laravel.com/docs/session) and [cache](https://laravel.com/docs/cache) storage.
- Expressive, intuitive [database ORM](https://laravel.com/docs/eloquent).
- Database agnostic [schema migrations](https://laravel.com/docs/migrations).
- [Robust background job processing](https://laravel.com/docs/queues).
- [Real-time event broadcasting](https://laravel.com/docs/broadcasting).

Laravel is accessible, powerful, and provides tools required for large, robust applications.

## Learning Laravel

Laravel has the most extensive and thorough [documentation](https://laravel.com/docs) and video tutorial library of all modern web application frameworks, making it a breeze to get started with the framework.

You may also try the [Laravel Bootcamp](https://bootcamp.laravel.com), where you will be guided through building a modern Laravel application from scratch.

If you don't feel like reading, [Laracasts](https://laracasts.com) can help. Laracasts contains thousands of video tutorials on a range of topics including Laravel, modern PHP, unit testing, and JavaScript. Boost your skills by digging into our comprehensive video library.

## Laravel Sponsors

We would like to extend our thanks to the following sponsors for funding Laravel development. If you are interested in becoming a sponsor, please visit the [Laravel Partners program](https://partners.laravel.com).

### Premium Partners

- **[Vehikl](https://vehikl.com/)**
- **[Tighten Co.](https://tighten.co)**
- **[WebReinvent](https://webreinvent.com/)**
- **[Kirschbaum Development Group](https://kirschbaumdevelopment.com)**
- **[64 Robots](https://64robots.com)**
- **[Curotec](https://www.curotec.com/services/technologies/laravel/)**
- **[Cyber-Duck](https://cyber-duck.co.uk)**
- **[DevSquad](https://devsquad.com/hire-laravel-developers)**
- **[Jump24](https://jump24.co.uk)**
- **[Redberry](https://redberry.international/laravel/)**
- **[Active Logic](https://activelogic.com)**
- **[byte5](https://byte5.de)**
- **[OP.GG](https://op.gg)**

## Contributing

Thank you for considering contributing to the Laravel framework! The contribution guide can be found in the [Laravel documentation](https://laravel.com/docs/contributions).

## Code of Conduct

In order to ensure that the Laravel community is welcoming to all, please review and abide by the [Code of Conduct](https://laravel.com/docs/contributions#code-of-conduct).

## Security Vulnerabilities

If you discover a security vulnerability within Laravel, please send an e-mail to Taylor Otwell via [taylor@laravel.com](mailto:taylor@laravel.com). All security vulnerabilities will be promptly addressed.

## License

The Laravel framework is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).

# Blog Project

This is a simple blog application built with Laravel. Users can register, log in, and create or edit posts. The app uses a MySQL database to store user and post data.

## Features

- User Registration & Authentication
- Create, Edit, and Delete Blog Posts
- User-friendly Interface

## Requirements

Before running the app, ensure you have the following installed:

- PHP 7.4 or higher
- Composer
- MySQL or a compatible database server (e.g., XAMPP, MySQL Workbench)
- Laravel (via Composer)
- Any code editor (e.g., Visual Studio Code)

## How To Run The App

1. **Open your database server**  
   Use a database management tool like [MySQL Workbench](https://www.mysql.com/products/workbench/) or [XAMPP](https://www.apachefriends.org/index.html).

2. **Create a new database**  
   Create a new database named `blog`.

3. **Navigate to the project folder**  
   Open a terminal and run the following command to navigate to the folder where you want to store the project:
   ```bash
   cd path_where_you_want_store_project
   
4. **Open the project folder with a code editor**
    Open the project folder with your preferred code editor (e.g., Visual Studio Code, Sublime Text).

5. **Run the server**
    In the terminal, navigate to the project directory and run the following command to start the development server:
        php artisan serve

6. **Open the app in your browser**
    Copy the server address shown in the terminal (usually http://127.0.0.1:8000) and paste it into your browser.

7. **Run database migrations**
    To create all necessary tables in your database, run the following command in the terminal:
       php artisan migrate

8. **Run the SQL queries**
    Execute these queries on your database to modify the created_at and updated_at columns in the posts table:
       ALTER TABLE posts MODIFY created_at DATETIME DEFAULT CURRENT_TIMESTAMP;
       ALTER TABLE posts MODIFY updated_at DATETIME DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP;

9. **Register an account**
    Go to the app in your browser and register a new user account.

10. **Login to your account**
    After registering, log in to your account.

11. **Start creating posts**
    You can now create, edit, and manage your blog posts through the app.

