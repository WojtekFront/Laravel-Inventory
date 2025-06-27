Inventory System

This is a Laravel-based application for managing products and shops, built as a portfolio project to showcase my skills in web and API development. It includes a web interface for CRUD operations and a RESTful API for managing products, secured with Laravel Sanctum. The project demonstrates my ability to work with Laravel, database relationships, authentication, and responsive frontends.

Web Interface:
- User authentication (login/register) powered by Laravel Breeze.
- Full CRUD functionality for products (create, read, update, delete) with form validation.
- Shop management (create and list shops).
- Responsive UI built with Bootstrap 5 for a clean user experience.
- Database seeding for categories, shops, and products, including custom timestamps.

RESTful API:
- Secure endpoints for adding (POST /api/products) and deleting (DELETE /api/products/{id}) products.
- Token-based authentication using Laravel Sanctum.
- JSON responses with appropriate HTTP status codes (201 for creation, 200 for deletion).

Database:
- Models (User, Category, Shop, Product) with relationships (belongsTo).
- MySQL database with migrations and seeders for initial data.
- Automatic and manual management of created_at and updated_at timestamps.

Technologies
- Backend: PHP 8, Laravel 12
- Frontend: Laravel Blade, Bootstrap 5
- API Authentication: Laravel Sanctum
- Database: MySQL

Setup Instructions Here's how to get the project running locally.

Prerequisites
PHP 8+
Composer
MySQL
Node.js and npm
Herd, Xampp (optional, for local PHP environment)

Installation Steps
Clone the repository: git clone https://github.com/WojtekFront/Laravel-Inventory.gitcd inventory-system
Install PHP dependencies: 
composer install
Install frontend dependencies: 
npm install

Set up environment file: copy .env.example .env Edit .env to include your database details: 
DB_CONNECTION=mysql 
DB_HOST=127.0.0.1 
DB_PORT=3306 
DB_DATABASE=inventory_system 
DB_USERNAME=root 
DB_PASSWORD= 
SANCTUM_STATEFUL_DOMAINS=127.0.0.1:8000,localhost:8000

Generate application key: 
php artisan key:generate

Run database migrations and seeders: 
php artisan migrate:fresh --seed

Build frontend assets: 
npm run build

Start the development server: 
php artisan serve 
npm run dev 

Endpoints
Create Product
Method: POST
URL: /api/products

Headers:
Authorization: Bearer
Content-Type: application/json
Body: { "name": "Test Product", "sku": "TEST-001", "description": "A test product", "price": 99.99, "quantity": 10, "category_id": 1, "shop_id": 1 }

Response (201 Created): { "message": "Product added successfully", "product": { "id": 1, "name": "Test Product", "sku": "TEST-001", "description": "A test product", "price": 99.99, "quantity": 10, "category_id": 1, "shop_id": 1, "created_at": "2025-06-25T15:00:00.000000Z", "updated_at": "2025-06-25T15:00:00.000000Z" } }



Delete Product
Method: DELETE
URL: /api/products/{id}

Headers:
Authorization: Bearer

Response (200 OK): { "message": "Product deleted successfully" }

Testing API Use Postman or cURL to test endpoints:

Create product

curl -X POST http://127.0.0.1:8000/api/products 
-H "Authorization: Bearer " 
-H "Content-Type: application/json" 
-d '{"name":"Test Product","sku":"TEST-001","description":"A test product","price":99.99,"quantity":10,"category_id":1,"shop_id":1}'

Delete product:
curl -X DELETE http://127.0.0.1:8000/api/products/1 
-H "Authorization: Bearer "

Future Improvements
- Add more API endpoints for listing and updating products.
- Implement API resources for cleaner JSON responses.
- Add pagination and filtering for product lists.
- Introduce unit tests using Pest.



Contact Feel free to reach out for feedback or questions:









GitHub: https://github.com/your-username
