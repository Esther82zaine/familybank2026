# 💻 Internet Banking System in PHP with MySQL

A simple yet powerful **Internet Banking System** built using PHP and MySQL. This project simulates the core functionality of online banking services, including customer registration, account management, transactions (deposit, withdraw, transfer), and admin/staff dashboards with financial reporting and analytics.

> 🧑‍💻 Ideal for second-year IT students or beginners learning PHP web applications with MySQL integration.

## 🔗 Repository Links

- **GitHub Repository**: [https://github.com/adarshk0070/Internet-Banking-Php](https://github.com/adarshk0070/Internet-Banking-Php)
- **Live Demo**: Coming soon...

---

## 📌 Project Overview

This Online Banking System provides a real-world simulation of internet banking services. It supports three user roles: **Admin**, **Staff**, and **Customer**, each with specific access and functionality.

The application is built with:

- **Backend**: PHP
- **Frontend**: HTML5, CSS3, Bootstrap
- **Database**: MySQL
- **PHP Version**: Compatible with PHP 5.6, 7.x, and 8.x

---

## ✅ Key Features

### 👤 Customer Panel

- Register/Login
- Apply for bank accounts (auto-generate account number)
- View and update profile
- Deposit, Withdraw, and Transfer funds
- View account balance
- Print balance sheet
- View transaction history and reports

### 👥 Staff Panel

- View all transactions
- Manage customer accounts and profiles
- Process deposits, withdrawals, and transfers
- Access transaction reports
- Receive real-time notifications

### 🛠️ Admin Panel

- Full system access
- Dashboard with financial analytics and charts
- Manage users (staff and customers)
- Add/manage account types and interest rates
- Oversee all financial activities
- System notifications

---

## 📊 Financial Operations

- **Deposits**: Add money to customer accounts
- **Withdrawals**: Process funds deduction
- **Transfers**: Transfer funds between accounts
- **Reports**: Generate deposit, withdrawal, and transfer history
- **Balance Inquiry**: View and print detailed balance sheet

---

## 🔐 User Roles & Permissions

| Role     | Permissions                                                      |
| -------- | ---------------------------------------------------------------- |
| Admin    | Full control, system settings, all analytics and user management |
| Staff    | Handle transactions, manage clients/accounts, view reports       |
| Customer | Manage personal accounts, view balances, and transact            |

---

## 🗂️ Project Structure

```plaintext
/InternetBanking-PHP/
├── admin/               # Admin dashboard and functionality
├── staff/               # Staff dashboard and functionality
├── client/              # Client/Customer dashboard and functionality
├── DATABASE FILE/       # MySQL database file (.sql)
├── dist/                # CSS, JS, fonts, and other assets
├── index.php            # Main entry point
└── README.md            # Project documentation
```

---

## 🚀 Installation & Setup

### Prerequisites

- XAMPP/WAMP/LAMP server
- PHP 5.6+ (recommended: PHP 7.x or 8.x)
- MySQL 5.7+
- Web browser

### Installation Steps

1. **Clone or Download the Repository**

   ```bash
   git clone https://github.com/Esther82zaine/familybank2026.git
   ```

2. **Move to XAMPP Directory**

   - Copy the project folder to `xampp/htdocs/InternetBanking-PHP`

3. **Database Setup**

   - Start XAMPP (Apache & MySQL)
   - Open phpMyAdmin (http://localhost/phpmyadmin)
   - Create a new database named `internetbanking`
   - Import the SQL file from `DATABASE FILE/internetbanking.sql`

4. **Configuration**

   - Update database connection settings in:
     - `admin/conf/config.php`
     - `staff/conf/config.php`
     - `client/conf/config.php`

5. **Access the Application**
   - Open your web browser
   - Go to: `http://localhost/InternetBanking-PHP`

---

## 🔑 Login credentials

The archive's demo login-details files are intentionally excluded from this repository. Set up your own accounts and change any default credentials before running the application.

---

## 🛠️ Technologies Used

- **Backend**: PHP, MySQL
- **Frontend**: HTML5, CSS3, Bootstrap 4
- **JavaScript Libraries**: jQuery, Chart.js, DataTables
- **Additional**: AJAX for dynamic interactions

---

## 📱 Responsive Design

The application is fully responsive and works seamlessly across:

- 💻 Desktop computers
- 📱 Mobile devices
- 📱 Tablets

---

## 🤝 Contributing

1. Fork the repository
2. Create your feature branch (`git checkout -b feature/AmazingFeature`)
3. Commit your changes (`git commit -m 'Add some AmazingFeature'`)
4. Push to the branch (`git push origin feature/AmazingFeature`)
5. Open a Pull Request

---

## 📄 License

This project is open source and available under the [MIT License](LICENSE).

---

## 📞 Support & Contact

If you encounter any issues or have questions about the project, please feel free to:

- Open an issue in this repository
- Contact the development team

---

## 🌟 Acknowledgments

- Bootstrap team for the responsive framework
- Chart.js for beautiful charts and analytics
- jQuery community for excellent JavaScript library
- All contributors who helped improve this project

---

**Happy Banking! 🏦💰**
