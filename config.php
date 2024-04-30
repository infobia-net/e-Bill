<?php 
return array (
  'security' => 
  array (
    'mode' => 'strict',
    'force_https' => true,
    'session_lifespan' => 7200,
    'perform_session_fingerprinting' => true,
    'debug_fingerprint' => false,
  ),
  'debug_and_monitoring' => 
  array (
    'debug' => false,
    'log_stacktrace' => true,
    'stacktrace_length' => 25,
    'report_errors' => false,
  ),
  'info' => 
  array (
    'salt' => '45f1d7f2b105cd0991d366d7cc9543ff',
    'instance_id' => '0d2e8b43-3653-460b-8d25-d761b217805a',
  ),
  'url' => 'https://namingo.slonic.net/',
  'admin_area_prefix' => '/admin',
  'update_branch' => 'release',
  'maintenance_mode' => 
  array (
    'enabled' => false,
    'allowed_urls' => 
    array (
    ),
    'allowed_ips' => 
    array (
    ),
  ),
  'disable_auto_cron' => false,
  'i18n' => 
  array (
    'locale' => 'en_US',
    'timezone' => 'UTC',
    'date_format' => 'medium',
    'time_format' => 'short',
    'datetime_pattern' => '',
  ),
  'path_data' => '/var/www/data',
  'db' => 
  array (
    'type' => 'mysql',
    'host' => 'localhost',
    'port' => '3306',
    'name' => 'registrar',
    'user' => 'uporabnik',
    'password' => 'hugOOIWH232kjdwe',
  ),
  'twig' => 
  array (
    'debug' => false,
    'auto_reload' => true,
    'cache' => '/var/www/data/cache',
  ),
  'api' => 
  array (
    'require_referrer_header' => false,
    'allowed_ips' => 
    array (
    ),
    'rate_span' => 3600,
    'rate_limit' => 1000,
    'throttle_delay' => 2,
    'rate_span_login' => 60,
    'rate_limit_login' => 20,
    'CSRFPrevention' => true,
    'rate_limit_whitelist' => 
    array (
    ),
  ),
);