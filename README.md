# 🎓 RR Institute - Computer Training & Visa Consultancy Platform

<p align="center">
  <img src="public/images/rr-logo.png" alt="RR Institute Logo" width="200"/>
</p>

<p align="center">
  <strong>Empowering Your Future Global Career</strong>
</p>

<p align="center">
  A comprehensive web platform for computer education and visa consultancy services, built with Laravel and modern web technologies.
</p>

<p align="center">
  <img src="https://img.shields.io/badge/Laravel-11.x-FF2D20?style=for-the-badge&logo=laravel&logoColor=white" alt="Laravel"/>
  <img src="https://img.shields.io/badge/PHP-8.2+-777BB4?style=for-the-badge&logo=php&logoColor=white" alt="PHP"/>
  <img src="https://img.shields.io/badge/TailwindCSS-3.x-38B2AC?style=for-the-badge&logo=tailwind-css&logoColor=white" alt="Tailwind CSS"/>
  <img src="https://img.shields.io/badge/Alpine.js-3.x-8BC0D0?style=for-the-badge&logo=alpine.js&logoColor=white" alt="Alpine.js"/>
</p>

---

## 📋 Table of Contents

- [About](#about)
- [Features](#features)
- [Tech Stack](#tech-stack)
- [Installation](#installation)
- [Configuration](#configuration)
- [Usage](#usage)
- [Screenshots](#screenshots)
- [Contributing](#contributing)
- [License](#license)
- [Contact](#contact)

---

## 🎯 About

**RR Institute** is a premier educational institution based in Karnal, Haryana, dedicated to bridging the gap between academic learning and industry requirements. This web platform serves as the digital presence for:

- **Computer Training Courses**: Graphic Design, Web Development, Tally & Accounting, Programming, and more
- **Visa Consultancy Services**: Expert guidance for study and work visa applications globally
- **Student Management**: Comprehensive dashboard for institute administration
- **Enquiry Management**: Streamlined lead tracking and follow-up system

---

## ✨ Features

### 🌐 Public Website
- **Modern Landing Page** with hero slider and dynamic sections
- **Course Catalog** with detailed course pages for each program
- **Student Reviews Carousel** with authentic testimonials
- **Interactive FAQ Section** with accordion design
- **Contact Form** with enquiry management
- **Visa Services Overview** page
- **About Us** page with institute information
- **Legal Pages**: Privacy Policy, Terms & Conditions, Refund Policy

### 🎨 Design & UX
- **Responsive Design** - Mobile-first approach with Tailwind CSS
- **Modern Aesthetics** - Glassmorphism, gradients, and smooth animations
- **Interactive Components** - Alpine.js powered carousels and accordions
- **WhatsApp Integration** - Floating chat button for instant communication
- **Optimized Performance** - Fast loading times and smooth transitions

### 🔐 Authentication & Authorization
- **Role-Based Access Control** (Institute Admin & Student roles)
- **Secure Authentication** with Laravel Breeze
- **Email Verification** system
- **Password Reset** functionality

### 📊 Institute Dashboard
- **Statistics Overview** - Total students, enquiries, and new leads
- **Enquiry Management** - View, update status, and delete enquiries
- **Student Management** - CRUD operations for student records
- **Sidebar Navigation** - Clean, modern interface with active states

### 📧 Communication
- **Contact Form** with email notifications
- **Enquiry System** with status tracking
- **WhatsApp Integration** for instant messaging

---

## 🛠️ Tech Stack

### Backend
- **Framework**: Laravel 11.x
- **Language**: PHP 8.2+
- **Database**: MySQL
- **Authentication**: Laravel Breeze

### Frontend
- **CSS Framework**: Tailwind CSS 3.x
- **JavaScript**: Alpine.js 3.x
- **Build Tool**: Vite
- **Template Engine**: Blade

### Additional Tools
- **Version Control**: Git
- **Package Manager**: Composer, NPM
- **Development Server**: Laravel Herd / Valet

---

## 🚀 Installation

### Prerequisites
- PHP >= 8.2
- Composer
- Node.js & NPM
- MySQL Database

### Step-by-Step Setup

1. **Clone the repository**
   ```bash
   git clone https://github.com/yourusername/rrinstitute.git
   cd rrinstitute
   ```

2. **Install PHP dependencies**
   ```bash
   composer install
   ```

3. **Install NPM dependencies**
   ```bash
   npm install
   ```

4. **Create environment file**
   ```bash
   cp .env.example .env
   ```

5. **Generate application key**
   ```bash
   php artisan key:generate
   ```

6. **Configure database**
   
   Edit `.env` file with your database credentials:
   ```env
   DB_CONNECTION=mysql
   DB_HOST=127.0.0.1
   DB_PORT=3306
   DB_DATABASE=your_database_name
   DB_USERNAME=your_database_user
   DB_PASSWORD=your_database_password
   ```

7. **Run migrations**
   ```bash
   php artisan migrate
   ```

8. **Seed the database (optional)**
   ```bash
   php artisan db:seed
   ```

9. **Build assets**
   ```bash
   npm run build
   ```

10. **Start development server**
    ```bash
    php artisan serve
    ```

11. **Access the application**
    
    Open your browser and visit: `http://localhost:8000`

---

## ⚙️ Configuration

### Mail Configuration

Configure email settings in `.env` for contact form notifications:

```env
MAIL_MAILER=smtp
MAIL_HOST=your_smtp_host
MAIL_PORT=587
MAIL_USERNAME=your_email@example.com
MAIL_PASSWORD=your_app_password
MAIL_ENCRYPTION=tls
MAIL_FROM_ADDRESS=your_email@example.com
MAIL_FROM_NAME="${APP_NAME}"
```

### Creating Admin User

To create an institute admin account:

```bash
php artisan tinker
```

Then run:
```php
$user = new App\Models\User();
$user->name = 'Admin Name';
$user->email = 'admin@example.com';
$user->password = bcrypt('your_secure_password');
$user->role = 'institute';
$user->email_verified_at = now();
$user->save();
```

---

## 📖 Usage

### Public Pages
- **Homepage**: `/`
- **All Courses**: `/courses`
- **Individual Course**: `/courses/{course-slug}`
- **About Us**: `/about`
- **Contact**: `/contact`
- **Visa Services**: `/visa-services`

### Authentication
- **Login**: `/login`
- **Register**: `/register`
- **Password Reset**: `/forgot-password`

### Institute Dashboard
- **Dashboard**: `/institute/dashboard` (Institute role required)
- **Enquiries**: `/institute/enquiries`
- **Students**: `/institute/students`

### Student Dashboard
- **Dashboard**: `/student/dashboard` (Student role required)

---

## 📸 Screenshots

### Homepage
![Homepage Hero](screenshots/homepage-hero.png)
*Modern hero section with slider and call-to-action buttons*

### Course Catalog
![Course Catalog](screenshots/courses-page.png)
*Comprehensive course listing with featured prime course*

### Institute Dashboard
![Institute Dashboard](screenshots/institute-dashboard.png)
*Admin dashboard with statistics and recent enquiries*

### Mobile Responsive
![Mobile View](screenshots/mobile-view.png)
*Fully responsive design for all devices*

---

## 🤝 Contributing

Contributions are welcome! Please follow these steps:

1. Fork the repository
2. Create a feature branch (`git checkout -b feature/AmazingFeature`)
3. Commit your changes (`git commit -m 'Add some AmazingFeature'`)
4. Push to the branch (`git push origin feature/AmazingFeature`)
5. Open a Pull Request

---

## 📄 License

This project is licensed under the MIT License - see the [LICENSE](LICENSE) file for details.

---

## 📞 Contact

**RR Institute**

- 📍 Address: Karnal, Haryana, India
- 📞 Phone: Contact via website
- 📧 Email: Contact via website form
- 🌐 Website: [Visit our website](#)
- 💬 WhatsApp: Available on website

---

## 🙏 Acknowledgments

- Laravel Framework Team
- Tailwind CSS Team
- Alpine.js Team
- All contributors and supporters

---

<p align="center">
  Made with ❤️ by RR Institute Team
</p>

<p align="center">
  <a href="#top">⬆️ Back to Top</a>
</p>
