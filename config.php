<?php

// --- Database Configuration ---
define('DB_HOST', 'localhost'); // Your database host, e.g., '127.0.0.1'
define('DB_NAME', 'pwa_database'); // Your database name
define('DB_USER', 'db_user'); // Your database username
define('DB_PASS', 'db_password'); // Your database password

// --- JWT Configuration ---
define('JWT_SECRET_KEY', 'YOUR_SUPER_SECRET_AND_LONG_KEY_HERE_CHANGE_ME'); // ⚠️ IMPORTANT: Change this to a long, random string!
define('JWT_ISSUER', 'https://your-api-domain.com'); // The issuer of the token (your API domain)
define('JWT_AUDIENCE', 'https://your-app-domain.com'); // The audience of the token (your PWA domain)
define('JWT_EXPIRATION_TIME_SECONDS', 3600 * 24); // Token valid for 24 hours

// --- CORS Configuration ---
// The domain of your PWA. Use '*' for development only, but be specific in production.
define('ALLOWED_ORIGIN', 'https://your-app-domain.com'); 

// --- General Settings ---
date_default_timezone_set('UTC'); // Set a consistent timezone

?>
