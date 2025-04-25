# Final-submission
# 🐾 Pet Essentials E-Commerce Web Application

## 📄 Description

This is a PHP-based e-commerce platform tailored for a pet store, offering a smooth shopping experience for users looking to purchase pet products. It features user authentication, dynamic cart management, product browsing, and order tracking.

## 🚀 Features

- 🛍️ Add-to-cart and checkout functionality
- 🔐 User login, registration, and logout system
- 🧾 Order confirmation and tracking
- 🐶 Product recommendation and categorization
- 🖼️ Image-rich product listings
- 📩 Contact form and About Us pages

## 🏗️ Project Structure

```
chathumal/
│
├── auth/                    # User authentication (login, register, logout)
├── css/                     # Stylesheets
├── includes/                # Database connection (db_connect.php)
├── reso/                    # Image resources for products and UI
│
├── AboutUs.php              # About page
├── ContactUs.php            # Contact form
├── index.php                # Homepage
├── product.php              # Product details
├── cart.php                 # View cart
├── add_to_cart.php          # Add to cart functionality
├── checkout.php             # Checkout page
├── order_confirmation.php   # Order success page
├── cancel_order.php         # Cancel an order
├── orders.php               # View placed orders
├── Categories.php           # Category page
├── sale-products.php        # Discounted items
├── recommended-products.php # Product suggestions
├── flash-deals.php          # Limited-time offers
├── profile.php              # User profile
├── database.sql             # MySQL setup script
```

## 🛠️ Technologies Used

- **Frontend:** HTML, CSS
- **Backend:** PHP
- **Database:** MySQL
- **Environment:** XAMPP / WAMP / MAMP

## ⚙️ Installation

1. **Clone the Repository**
   ```bash
   git clone https://github.com/YourUsername/pet-shop.git
   ```

2. **Navigate into the Project Folder**
   ```bash
   cd pet-shop
   ```

3. **Set Up the Database**
   - Use phpMyAdmin or MySQL CLI to import `database.sql`.

4. **Configure Database**
   - Update DB credentials in `includes/db_connect.php`.

5. **Launch Locally**
   - Place the project in your server root (e.g., `htdocs` in XAMPP).
   - Start Apache and MySQL.

6. **Open in Browser**
   ```
   http://localhost/chathumal/index.php
   ```

## 🤝 Contribution

Contributions are welcome! Submit a PR or open an issue for improvements.

## 📄 License

Licensed under the **MIT License**. See [LICENSE](LICENSE) for more details.

## 👤 Author

Developed by **Chathumal**  
__
