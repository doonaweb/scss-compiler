<?php
//By https://Doonaweb.ir

/*
This File Is The config Of Website
*/
/** The name of the database for WordPress */
define( 'DB_NAME', 'team' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', '' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

/** The database collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );
// Project root
define('PROJECT_ROOT', __DIR__);

// Set database connection parameters
$host = DB_HOST;
$dbname = DB_NAME;
$username = DB_USER;
$password = DB_PASSWORD;
$charset = DB_CHARSET;

// Set table prefix
$table_prefix = 'team_';



require_once PROJECT_ROOT . '/db_create/user_db_create.php';
