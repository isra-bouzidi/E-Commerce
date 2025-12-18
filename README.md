# E-Commerce Project

This is a Laravel-based e-commerce application that allows users to browse products, add them to a cart, and place orders. It includes features for both customers and administrators.

## Features

- User authentication and registration
- Product browsing and details
- Shopping cart functionality
- Order placement and management
- Admin panel for product and category management
- Responsive design with Bootstrap and custom CSS

## Prerequisites

Before you begin, ensure you have the following installed on your system:

- PHP 8.1 or higher
- Composer
- Node.js and npm
- MySQL or another supported database
- Git

## Installation

Follow these steps to set up the project locally:

### Step 1: Clone the Repository

```bash
git clone <repository-url>
cd ecommerce_project
```

### Step 2: Install PHP Dependencies

```bash
composer install
```

### Step 3: Install Node.js Dependencies

```bash
npm install
```

### Step 4: Environment Configuration

1. Copy the `.env.example` file to `.env`:

```bash
cp .env.example .env
```

2. Generate an application key:

```bash
php artisan key:generate
```

3. Configure your database settings in the `.env` file:

```env
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=ecommerce_project
DB_USERNAME=your_username
DB_PASSWORD=your_password
```

### Step 5: Database Setup

1. Create a new database in your MySQL server with the name specified in your `.env` file.

2. Run the migrations to create the database tables:

```bash
php artisan migrate
```

3. (Optional) Seed the database with sample data:

```bash
php artisan db:seed
```

### Step 6: Build Assets

Compile the CSS and JavaScript assets:

```bash
npm run build
```

Or, for development with hot reloading:

```bash
npm run dev
```

### Step 7: Start the Development Server

```bash
php artisan serve
```

The application will be available at `http://localhost:8000`.

## Usage

### For Customers

1. **Registration/Login**: Create an account or log in to access cart and order features.

2. **Browse Products**: Navigate through the product catalog on the home page.

3. **View Product Details**: Click on a product to see more information.

4. **Add to Cart**: Use the "Add to Cart" button on product pages.

5. **View Cart**: Access your cart from the navigation menu to see items, remove products, and view the total.

6. **Checkout**: In the cart, fill out the order form with your name, address, and phone number, then click "Confirm Order".

### For Administrators

1. **Login**: Use admin credentials to access the admin panel at `/admin/dashboard`.

2. **Manage Categories**: Add, edit, or delete product categories.

3. **Manage Products**: Add new products with images, edit existing ones, or remove products.

4. **View Orders**: Monitor customer orders (if implemented).

## Project Structure

```
ecommerce_project/
├── app/
│   ├── Http/
│   │   ├── Controllers/
│   │   │   ├── HomeController.php
│   │   │   └── AdminController.php
│   │   └── Middleware/
│   ├── Models/
│   │   ├── User.php
│   │   ├── Product.php
│   │   ├── Category.php
│   │   ├── Cart.php
│   │   └── Order.php
│   └── Providers/
├── database/
│   ├── migrations/
│   └── seeders/
├── public/
│   ├── css/
│   ├── js/
│   ├── images/
│   └── products/
├── resources/
│   ├── views/
│   │   ├── home/
│   │   ├── admin/
│   │   └── layouts/
│   ├── css/
│   └── js/
├── routes/
│   └── web.php
├── storage/
├── tests/
├── composer.json
├── package.json
├── artisan
├── .env.example
└── README.md
```

## Key Routes

- `/` - Home page with product listing
- `/dashboard` - User dashboard (authenticated users)
- `/mycart` - Shopping cart
- `/product_details/{id}` - Product details page
- `/admin/dashboard` - Admin panel
- `/view_category` - Category management (admin)
- `/view_product` - Product management (admin)

## Database Schema

The application uses the following main tables:

- `users` - User accounts
- `categories` - Product categories
- `products` - Product information
- `carts` - Shopping cart items
- `orders` - Customer orders

## Contributing

1. Fork the repository
2. Create a feature branch (`git checkout -b feature/AmazingFeature`)
3. Commit your changes (`git commit -m 'Add some AmazingFeature'`)
4. Push to the branch (`git push origin feature/AmazingFeature`)
5. Open a Pull Request

## Troubleshooting

### Common Issues

1. **Permission Issues**: Ensure proper permissions on `storage` and `bootstrap/cache` directories.

2. **Database Connection**: Verify your `.env` database credentials are correct.

3. **Assets Not Loading**: Run `npm run build` or `npm run dev` to compile assets.

4. **Migrations Failing**: Ensure your database user has proper permissions to create tables.

### Getting Help

If you encounter issues:

1. Check the Laravel documentation: https://laravel.com/docs
2. Review error logs in `storage/logs/`
3. Ensure all prerequisites are installed correctly

## License

This project is licensed under the MIT License - see the [LICENSE](LICENSE) file for details.

## Acknowledgments

- Built with [Laravel](https://laravel.com/)
- Frontend styling with [Bootstrap](https://getbootstrap.com/)
- Icons from [Font Awesome](https://fontawesome.com/)
