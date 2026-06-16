# Roamly Travel

Roamly Travel is a PHP and MySQL travel booking demo site with destinations, packages, hotels, reviews, login/register, profiles, and booking request pages.

## Local Setup

1. Copy the project to:

   ```text
   C:\xampp\htdocs\travel
   ```

2. Start Apache and MySQL in XAMPP.

3. Create the database:

   ```sql
   CREATE DATABASE travel_db;
   ```

4. Import the SQL files in this order:

   ```text
   database/schema.sql
   database/sample_data.sql
   database/add_more_destinations.sql
   ```

5. Open:

   ```text
   http://localhost/travel
   ```

## Test Login

```text
Email: maya@example.com
Password: password123
```

## Project Structure

- `config/` - database, site config, and session setup
- `includes/` - shared header, navbar, footer, auth, and helpers
- `database/` - schema and sample data
- `assets/` - CSS, JavaScript, images, and uploads
- `*.php` - public pages
# Travel-final-project
