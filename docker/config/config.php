<?php

/**
 * Copyright (C) 2010-present Davide Franco
 * 
 * This file is part of Bacula-Web.
 * 
 * Bacula-Web is free software: you can redistribute it and/or modify it under the terms of the GNU 
 * General Public License as published by the Free Software Foundation, either version 2 of the License, or 
 * (at your option) any later version.
 * 
 * Bacula-Web is distributed in the hope that it will be useful, but WITHOUT ANY WARRANTY; without 
 * even the implied warranty of MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE. 
 * See the GNU General Public License for more details.
 * 
 * You should have received a copy of the GNU General Public License along with Bacula-Web. If not, see 
 * <https://www.gnu.org/licenses/>.
 */

/**
 * Bacula-Web application config file
 * @author Davide Franco
 * @since 5.1.0-alpha
 */

// Show inactive clients (false by default)
$config['show_inactive_clients'] = getenv('BWEB_SHOW_INACTIVE_CLIENTS') ?? true;

// Hide empty pools (displayed by default)
$config['hide_empty_pools'] = getenv('BWEB_HIDE_EMPTY_POOLS') ?? false;

// Custom datetime format (by default: Y-m-d H:i:s)
// Examples
// $config['datetime_format'] = 'd/m/Y H:i:s';
// $config['datetime_format'] = 'm-d-Y H:i:s';
$config['datetime_format'] = getenv('BWEB_DATETIME_FORMAT') ?? 'Y-m-d H:i:s';

// Security
$config['enable_users_auth'] = getenv('BWEB_ENABLE_USERS_AUTH') ?? true;

// Debug mode
$config['debug'] = getenv('BWEB_DEGUG') ?? false;

// Translations
$config['language'] = getenv('BWEB_LANGUAGE') ?? 'en_US';


// Rows per page
$config['rows_per_page'] = getenv('BWEB_ROWS_PER_PAGE') ?? 25;

// Database connection parameters
// PostgreSQL bacula catalog
$config[0]['label'] = getenv('BWEB_DB_LABEL') ?? 'Prod Server';
$config[0]['host'] = getenv('BWEB_DB_HOST');
$config[0]['login'] = getenv('BWEB_DB_LOGIN');
$config[0]['password'] = getenv('BWEB_DB_PASSWORD');
$config[0]['db_name'] = getenv('BWEB_DB_NAME') ?? 'bacula';
$config[0]['db_type'] = getenv('BWEB_DB_TYPE');

$config[0]['db_port'] = getenv('BWEB_DB_PORT') ?? (
  $config[0]['db_type'] === 'pgsql' ? '5432' : '3306'
);
