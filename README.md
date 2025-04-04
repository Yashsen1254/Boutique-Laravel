# Online Clothing Store - Laravel Project

## Introduction
This is an Online Clothing Store built using Laravel, providing users with a seamless shopping experience. The platform allows customers to browse products, add items to their cart, proceed with checkout, and manage their orders efficiently.

## Features
- User authentication (Register/Login)
- Browse products by category
- Add products to the cart
- Checkout with payment integration
- Order management for users
- Admin dashboard for product and order management
- Responsive design for mobile and desktop

## Technologies Used
- **Backend:** Laravel (PHP Framework)
- **Frontend:** Blade Templating, Bootstrap/CSS
- **Database:** MySQL
- **Authentication:** Laravel Breeze / Laravel Sanctum (Optional for API-based auth)
- **Payment Gateway:** Stripe / Razorpay (Optional)

## Installation Guide

### Prerequisites
- PHP (>=8.0)
- Composer
- MySQL
- Laravel (Latest Version)

### Steps to Setup the Project
1. **Clone the Repository**
   ```sh
   git clone https://github.com/your-repository/online-clothing-store.git
   cd online-clothing-store
   ```

2. **Install Dependencies**
   ```sh
   composer install
   npm install  # If using frontend assets like Vue/React
   ```

3. **Set Up Environment**
   - Copy the `.env.example` file and rename it to `.env`
   - Update database credentials in `.env`
   ```env
   DB_CONNECTION=mysql
   DB_HOST=127.0.0.1
   DB_PORT=3306
   DB_DATABASE=your_database
   DB_USERNAME=your_username
   DB_PASSWORD=your_password
   ```

4. **Generate Application Key**
   ```sh
   php artisan key:generate
   ```

5. **Run Migrations & Seed Database**
   ```sh
   php artisan migrate --seed
   ```

6. **Run the Application**
   ```sh
   php artisan serve
   ```
   The project will be accessible at `http://127.0.0.1:8000`

## Admin Panel
- URL: `/admin`
- Default Credentials:
  - Email: `admin@example.com`
  - Password: `password`

## API Endpoints (If Applicable)
- `GET /api/products` - Fetch all products
- `POST /api/cart` - Add items to the cart
- `POST /api/checkout` - Checkout order

## Contribution
Feel free to fork this repository, make changes, and submit pull requests.

## License
This project is open-source and available under the MIT License.

