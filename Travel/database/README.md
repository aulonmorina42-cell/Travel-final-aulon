# Database Setup Guide

## Prerequisites
- MySQL or MariaDB server installed and running
- phpMyAdmin or MySQL command line access

## Setup Steps

### 1. Create Database
```sql
CREATE DATABASE travel_db;
```

### 2. Import Schema
Import the `schema.sql` file to create all tables:
```bash
mysql -u root -p travel_db < database/schema.sql
```

Or use phpMyAdmin:
- Create database: `travel_db`
- Import file: `database/schema.sql`

### 3. (Optional) Load Sample Data
To load sample destinations, hotels, packages, and reviews:
```bash
mysql -u root -p travel_db < database/sample_data.sql
```

### 4. Update Database Configuration
Edit `config/db.php` with your database credentials:
```php
$host = 'localhost';
$dbName = 'travel_db';
$username = 'root';
$password = '';
```

## Database Tables

### users
- Stores customer account information
- Fields: id, name, email, password, phone, avatar, timestamps

### destinations
- Travel destinations/locations
- Fields: id, name, country, summary, description, price, rating, image, duration

### hotels
- Hotel accommodations
- Fields: id, name, destination_id, address, description, price, rating, image, amenities

### packages
- Travel packages/tours
- Fields: id, title, destination_id, description, price, days, type, image, itinerary

### bookings
- Customer bookings/reservations
- Fields: id, user_id, package_id, hotel_id, check_in, check_out, guests, total_price, status

### reviews
- Customer reviews and ratings
- Fields: id, user_id, destination_id, package_id, rating, title, text

### admin_users
- Admin/manager accounts
- Fields: id, username, password, email, role

## Available Functions

### Destinations
```php
getAllDestinations()          // Get all destinations
getDestinationById($id)       // Get specific destination
```

### Hotels
```php
getAllHotels($destinationId)  // Get hotels (optionally filtered by destination)
getHotelById($id)             // Get specific hotel
```

### Packages
```php
getAllPackages($destinationId) // Get packages (optionally filtered by destination)
getPackageById($id)            // Get specific package
```

### Bookings
```php
createBooking($userId, $packageId, $hotelId, $checkIn, $checkOut, $guests, $totalPrice)
getUserBookings($userId)       // Get user's bookings
```

### Reviews
```php
getReviews($destinationId, $limit)  // Get reviews
createReview($userId, $rating, $title, $text, $destinationId, $packageId)
```

### Authentication
```php
registerUser($name, $email, $password, $phone)  // Register new user
loginUser($email, $password)                     // Login user
logoutUser()                                     // Logout
```

## Connection Status
The database connection is automatically established when any file requires `config/db.php`. If the connection fails, operations gracefully return empty results or false values.

## Troubleshooting

**"Connection failed"**: Check database credentials in `config/db.php`

**"Table doesn't exist"**: Make sure you imported `schema.sql`

**"Access denied"**: Verify MySQL username and password

**No sample data showing**: Import `sample_data.sql` file
