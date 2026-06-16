## 🚀 QUICK START - Roamly Travel Localhost

### Option 1: Using PHP Built-in Server (EASIEST)

**Windows (PowerShell):**
```powershell
cd C:\Users\PC\Desktop\Travel
php -S localhost:8000
```

**Then open:** http://localhost:8000

### Option 2: Using XAMPP

1. Start XAMPP Control Panel
2. Start Apache and MySQL
3. Copy project to `C:\xampp\htdocs\travel\`
4. Open: http://localhost/travel

---

## 📋 SETUP CHECKLIST

- [x] Create all PHP pages (16 pages)
- [x] Set up database connection
- [x] Create authentication functions
- [x] Set up responsive styling
- [ ] **Next: Import database schema**

---

## 🗄️ DATABASE SETUP (IMPORTANT!)

### 1. Create Database
```sql
CREATE DATABASE travel_db;
```

### 2. Import Schema
- Use phpMyAdmin at: **http://localhost/phpmyadmin**
- Import file: `database/schema.sql`

### 3. Load Sample Data (Optional)
- Import file: `database/sample_data.sql`

### 4. Update Credentials
Edit `config/db.php` with your MySQL credentials

---

## 📁 CREATED FILES

### Pages (16 total)
- ✅ index.php - Homepage
- ✅ destinations.php, destination.php
- ✅ packages.php, package.php
- ✅ hotels.php, hotel.php
- ✅ reviews.php
- ✅ login.php, register.php, logout.php
- ✅ profile.php, my-bookings.php
- ✅ about.php, contact.php, search.php

### Styling
- ✅ assets/css/style.css - Professional theme
- ✅ assets/css/responsive.css - Mobile-friendly

### JavaScript
- ✅ assets/js/script.js - Navigation & interactivity
- ✅ assets/js/validation.js - Form validation

### Database
- ✅ database/schema.sql - 7 tables
- ✅ database/sample_data.sql - Sample data
- ✅ database/README.md - Database docs

### Configuration
- ✅ config/db.php - Database connection
- ✅ includes/functions.php - Query functions
- ✅ includes/auth.php - Auth functions

### Server Scripts
- ✅ start-server.bat - Windows batch file
- ✅ start-server.ps1 - PowerShell script
- ✅ LOCALHOST_SETUP.md - Full guide

---

## 🔧 TROUBLESHOOTING

**"Cannot connect to database"**
→ Check config/db.php credentials and MySQL is running

**"404 Page Not Found"**
→ Make sure you're accessing http://localhost:8000 (not :80)

**"CSS/JS not loading"**
→ Clear browser cache (Ctrl+Shift+Delete)

---

## 📝 DEFAULT CREDENTIALS (for testing)

After importing sample_data.sql:
- Email: maya@example.com
- Password: (set your own in registration)

---

## 🎯 MAIN NAVIGATION

Home → Destinations → Packages → Hotels → Reviews → About → Contact → Search

Login/Register link in top-right corner

---

**📖 For full setup instructions, see: LOCALHOST_SETUP.md**
