# Silikit – Modern E-Commerce Store with AdminLTE CMS 🛍️

![PHP](https://img.shields.io/badge/PHP-8.0-blue?logo=php) ![Laravel](https://img.shields.io/badge/Laravel-10.x-red?logo=laravel) ![AdminLTE](https://img.shields.io/badge/AdminLTE-3.x-orange?logo=adminlte) ![MySQL](https://img.shields.io/badge/MySQL-8.x-green?logo=mysql) ![License](https://img.shields.io/badge/License-MIT-green)

Welcome to **Silikit**! 🚀 This is a full-featured e-commerce store built with Laravel, featuring a sleek customer-facing frontend for browsing and buying products, and a powerful AdminLTE-based CMS for store management. Think of it as a lightweight Shopify clone – easy for customers to shop, but with a robust dashboard for admins to handle inventory, orders, and users. Perfect for small to medium online stores looking for quick setup and scalability.

## 📋 Project Overview
As a web dev, imagine you're building an online shop like Etsy but with a focus on simple product management and clean UI. Silikit answers questions like:
- 🛒 What products are available, and can customers add them to cart easily?
- 📊 How do I track orders, update stock, and view sales reports from the admin panel?
- 🔧 Does the AdminLTE template integrate smoothly with Laravel's auth and routing?
- ⚠️ Are there any issues with user sessions or payment flows?

Powered by **Laravel** for the backend, **AdminLTE** for the admin dashboard (with its responsive Bootstrap-based design), and a custom frontend for shoppers, this app handles everything from product catalogs to order fulfillment.

## 🗃️ Database
The system uses **MySQL** with key tables like:
- **Products**: Stores item details (like `products` in WooCommerce). Columns: `id`, `name`, `price`, `stock`, `category_id`, `description`.
- **Orders**: Manages customer purchases. Columns: `id`, `user_id`, `total`, `status`, `shipping_address`.
- **Users**: Customers and admins. Columns: `id`, `name`, `email`, `role`, `password`.
- **Categories**: Product groupings. Columns: `id`, `name`, `slug`.

📂 Migrations and seeders are in `database/migrations/` and `database/seeders/`, using Eloquent for relationships (e.g., products belong to categories).

## 🛠️ Environment Requirements
To run Silikit, you need:
- **PHP**: 8.0 or higher (Laravel 10.x requires it) 🐘
- **Node.js**: 16.x or higher (for frontend assets) 🌐
- **MySQL**: 8.x or higher (or any Laravel-supported DB) 🗄️
- **Composer**: For PHP dependencies 📦
- **System**: Linux, macOS, or Windows (WSL works great) 💻
- **Dependencies** (in `composer.json` and `package.json`):
  - `laravel/framework`: Backend core.
  - `jeroennoten/laravel-adminlte`: AdminLTE integration for the CMS.
  - `laravel/breeze`: Simple auth scaffolding.
  - Frontend: Basic CSS/JS for the store UI.

## ⚙️ Setup Instructions
Follow these steps to get Silikit running, like deploying a fresh Laravel e-commerce site:

1. **Clone the Repository** 📥:
   ```bash
   git clone https://github.com/binhchay1/silikit.git
   cd silikit
   ```

2. **Install Backend Dependencies** 📦:
   Ensure [Composer](https://getcomposer.org/) is installed, then run:
   ```bash
   composer install
   ```

3. **Install Frontend Dependencies** 🌐:
   Ensure [Node.js](https://nodejs.org/) is installed, then run:
   ```bash
   npm install
   npm run dev
   ```

4. **Configure the Environment** 🛠️:
   - Copy `.env.example` to `.env`:
     ```bash
     cp .env.example .env
     ```
   - Update `.env` with database details:
     ```env
     DB_CONNECTION=mysql
     DB_HOST=127.0.0.1
     DB_PORT=3306
     DB_DATABASE=silikit
     DB_USERNAME=your_username
     DB_PASSWORD=your_password

     APP_NAME="Silikit Store"
     APP_URL=http://localhost:8000
     ```

5. **Generate Application Key** 🔑:
   ```bash
   php artisan key:generate
   ```

6. **Run Migrations and Seeders** 🗄️:
   Set up the database and seed sample products/users:
   ```bash
   php artisan migrate --seed
   ```

7. **Start the Application** 🚀:
   Run the Laravel dev server:
   ```bash
   php artisan serve
   ```
   Access the store at `http://localhost:8000` and admin at `http://localhost:8000/admin`.

## 🚀 How to Run
1. **Start the Server** 🌐:
   Use `php artisan serve` for dev or Apache/Nginx for production.

2. **Test the Storefront** ▶️:
   - Visit `http://localhost:8000` to browse products, add to cart, and checkout.
   - Register as a customer to place orders.

3. **Access the Admin CMS** 🛠️:
   - Go to `http://localhost:8000/admin` and login with seeded credentials (e.g., `admin@silikit.com` / `password`).
   - Manage products, view orders, and generate reports via the AdminLTE dashboard.

4. **Stop the Server** 🛑:
   Ctrl+C to stop `php artisan serve`.

## 📁 Project Structure
Like a standard Laravel e-commerce app with AdminLTE integration:
```
silikit/
├── app/                  # Core logic 🛠️
│   ├── Models/          # Eloquent models (Product, Order, User) 📊
│   └── Http/Controllers/
├── database/             # Migrations and seeders 🗄️
│   ├── migrations/
│   └── seeders/
├── resources/            # Frontend assets 🎨
│   ├── views/           # Storefront and admin templates
│   └── css/js/          # Assets for AdminLTE
├── public/               # Public directory 🌐
│   └── index.php
├── routes/               # Web, API, admin routes 🚏
├── vendor/               # Composer dependencies 📦
├── .env.example          # Environment config 📋
├── .gitignore            # Excludes storage/, vendor/ 🚫
├── composer.json         # Backend dependencies 📋
├── package.json          # Frontend dependencies 📋
├── README.md             # You're reading it! 📖
└── LICENSE               # MIT License 📜
```

## 📈 Key Features
- **Customer Storefront**: Responsive UI for product browsing, search, cart, and checkout 🛍️
- **AdminLTE CMS**: Intuitive dashboard for managing products, orders, users, and inventory 📊
- **Product Management**: CRUD operations with images, categories, and stock tracking 🔧
- **Order Processing**: Track status, update stock, generate invoices 🛒
- **User Roles**: Separate access for customers and admins (via Laravel Auth) 👥
- **Responsive Design**: Works on all devices, powered by AdminLTE's Bootstrap foundation 📱

## 💡 Recommendations
Like tweaking a web app for better UX:
- **Payments**: Integrate Stripe or PayPal for real transactions 💳
- **SEO**: Add meta tags and sitemaps for product pages 🌐
- **Analytics**: Hook up Google Analytics to track shopper behavior 📊
- **Security**: Enable CSRF and rate limiting for the admin panel 🔒
- **Extensions**: Add email notifications with Laravel Mail 📧

## 🛠️ Troubleshooting
- **Error: `Class not found`** ⚠️: Run `composer install` or `composer dump-autoload`.
- **AdminLTE Not Loading** 🚫: Ensure `jeroennoten/laravel-adminlte` is installed and published (`php artisan adminlte:install`).
- **Database Issues** 🚫: Verify MySQL connection in `.env` and run migrations.
- **Assets Missing** 🌐: Run `npm run dev` to compile frontend files.

## 🤝 Contributing
Feel free to fork, submit PRs, or open issues! Follow Laravel's [contribution guide](https://laravel.com/docs/contributions). 🌟

## 📜 License
MIT License (see `LICENSE`).

## 📞 Contact
Got questions? Reach out via [GitHub Issues](https://github.com/binhchay1/silikit/issues).
