# Roamly Travel - Local Development Setup

## Prerequisites

- **PHP 7.4+** installed and accessible from command line
- **MySQL/MariaDB** server running
- **Apache/Nginx** or PHP built-in server

## Quick Start (Using PHP Built-in Server)

### 1. Start PHP Server
```powershell
cd C:\Users\PC\Desktop\Travel
php -S localhost:8000
```

Then open your browser to: **http://localhost:8000**

## Setup with XAMPP (Recommended)

### 1. Install XAMPP
Download from: https://www.apachefriends.org/

### 2. Copy Project to htdocs
```
C:\xampp\htdocs\travel\
```

### 3. Start Apache and MySQL
- Open XAMPP Control Panel
- Click "Start" for Apache
- Click "Start" for MySQL

### 4. Access the Site
Open browser to: **http://localhost/travel**

## Database Setup

### 1. Create Database

**Option A: Using phpMyAdmin (Recommended)**
- Go to: http://localhost/phpmyadmin
- Click "New" database
- Name: `travel_db`
- Click "Create"

**Option B: Using MySQL Command**
```bash
mysql -u root -p
CREATE DATABASE travel_db;
```

### 2. Import Database Schema

**Using phpMyAdmin:**
- Select `travel_db` database
- Click "Import" tab
- Choose `database/schema.sql` file
- Click "Go"

**Using MySQL Command:**
```bash
mysql -u root -p travel_db < database/schema.sql
```

### 3. Load Sample Data (Optional)

**Using phpMyAdmin:**
- Click "Import" tab
- Choose `database/sample_data.sql` file
- Click "Go"

**Using MySQL Command:**
```bash
mysql -u root -p travel_db < database/sample_data.sql
```

## Update Database Connection

Edit `config/db.php`:
```php
$host = 'localhost';      // or your MySQL host
$dbName = 'travel_db';
$username = 'root';       // your MySQL username
$password = '';           // your MySQL password (empty for XAMPP default)
```

## Project Structure

```
Travel/
├── admin/              # Admin panel (future)
├── api/                # API endpoints (future)
├── assets/
│   ├── css/
│   │   ├── style.css
│   │   └── responsive.css
│   ├── images/
│   ├── js/
│   │   ├── script.js
│   │   └── validation.js
│   └── uploads/
├── config/
│   ├── db.php          # Database connection
│   ├── config.php      # Site configuration
│   └── session.php     # Session management
├── database/
│   ├── schema.sql      # Database tables
│   ├── sample_data.sql # Sample data
│   └── README.md       # Database docs
├── includes/
│   ├── header.php      # Page header
│   ├── navbar.php      # Navigation
│   ├── footer.php      # Page footer
│   ├── functions.php   # Database & utility functions
│   ├── auth.php        # Authentication functions
│   └── session.php     # Session setup
├── index.php           # Homepage
├── destinations.php    # Destinations list
├── destination.php     # Destination details
├── packages.php        # Packages list
├── package.php         # Package details
├── hotels.php          # Hotels list
├── hotel.php           # Hotel details
├── reviews.php         # Reviews list
├── login.php           # Login page
├── register.php        # Registration page
├── profile.php         # User profile
├── my-bookings.php     # User bookings
├── logout.php          # Logout handler
├── about.php           # About page
├── contact.php         # Contact page
└── search.php          # Search results
```

## Main Pages

| Page | URL | Purpose |
|------|-----|---------|
| Home | `/` | Homepage with featured destinations |
| Destinations | `/destinations.php` | All destinations list |
| Destination Details | `/destination.php?id=1` | Individual destination page |
| Packages | `/packages.php` | All packages list |
| Package Details | `/package.php?id=1` | Individual package page |
| Hotels | `/hotels.php` | All hotels list |
| Hotel Details | `/hotel.php?id=1` | Individual hotel page |
| Reviews | `/reviews.php` | Guest reviews |
| Login | `/login.php` | User login |
| Register | `/register.php` | New user registration |
| Profile | `/profile.php` | User account profile |
| My Bookings | `/my-bookings.php` | User's travel bookings |
| About | `/about.php` | About company page |
| Contact | `/contact.php` | Contact form |
| Search | `/search.php?q=query` | Search results |

## Core Functions

### Database Queries
```php
getAllDestinations()
getDestinationById($id)
getAllHotels($destinationId)
getHotelById($id)
getAllPackages($destinationId)
getPackageById($id)
getReviews($destinationId, $limit)
getUserBookings($userId)
createBooking($userId, $packageId, $hotelId, $checkIn, $checkOut, $guests, $totalPrice)
createReview($userId, $rating, $title, $text, $destinationId, $packageId)
```

### Authentication
```php
registerUser($name, $email, $password, $phone)
loginUser($email, $password)
logoutUser()
requireLogin()
currentUser()
isLoggedIn()
```

## Troubleshooting

### "Cannot find module"
- Ensure all `include_once` paths are correct
- Check file paths use `__DIR__` properly

### Database Connection Failed
- Verify MySQL is running
- Check credentials in `config/db.php`
- Ensure `travel_db` database exists

### "404 Page not found"
- Verify PHP files exist in project root
- Check Apache/PHP server is running
- Try accessing `http://localhost:8000` directly

### Session/Login not working
- Check cookies are enabled in browser
- Verify `session.php` is loaded in header
- Clear browser cache and cookies

### Styling looks broken
- Check CSS files are loading (F12 → Network tab)
- Verify `assets/css/style.css` exists
- Clear browser cache (Ctrl+Shift+Delete)

## Performance Notes

- Uses PDO with prepared statements (SQL injection safe)
- Implements password hashing with `password_hash()`
- Uses session-based authentication
- Responsive design works on mobile and desktop

## Next Steps

1. ✅ Database connected
2. ✅ All pages created
3. ⭕ Add booking system
4. ⭕ Add payment integration
5. ⭕ Build admin panel
6. ⭕ Add email notifications

## Support

For issues or questions, check:
- `database/README.md` for database documentation
- PHP error logs in browser console (F12)
- MySQL error logs for database issues
