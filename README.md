#Laravel Manual Authentication

This project demonstrates manual user authentication in Laravel, covering:

1. User Registration

2. Login with Auth::attempt()

3. Session Regeneration

4. Secure Logout with Session Invalidation and CSRF Token Refresh


## 🚀 Prerequisites

- PHP ≥ 8.0  
- Composer  
- MySQL or another supported database  
- Node.js & npm (optional for UI assets)  
- Laravel 12 (or 8+)  

## 🛠️ Installation

1. **Clone the project**  

   git clone https://github.com/NareshG375/laravel-login.git
   
   cd laravel-login

2. Install dependencies

  composer install
  npm install # optional if using front-end
  npm run dev # optional

3. Configure environment


   APP_NAME="Laravel Login"
   DB_CONNECTION=mysql
   DB_HOST=127.0.0.1
   DB_PORT=3306
   DB_DATABASE=your_db
   DB_USERNAME=your_user
   DB_PASSWORD=your_pass
4. Generate App Key

   php artisan key:generate

5. Run Migrations

   php artisan migrate


6. Start the development server

   php artisan serve   

7. License

   MIT License © 2025

   Originally built by Naresh Garg