<?php

declare(strict_types=1);

define("CONF_ROOT", dirname(__FILE__, 3));


/**
 * URLs
 */
define("CONF_URL_BASE", "http://localhost");
define("CONF_URL_TEST", "http://localhost");

/**
 * SITE
 */
define("CONF_SITE_NAME", "Sistema Base");

/**
 * DATES
 */
define("CONF_DATE_BR", "d/m/Y H:i:s");
define("CONF_DATE_APP", "Y-m-d H:i:s");

/**
 * PASSWORD
 */
define("CONF_PASSWD_MIN_LEN", 8);
define("CONF_PASSWD_MAX_LEN", 40);
define("CONF_PASSWD_ALGO", PASSWORD_DEFAULT);
define("CONF_PASSWD_OPTION", ["cost" => 10]);

/**
 * MESSAGE
 */
define("CONF_MESSAGE_CLASS", "trigger");
define("CONF_MESSAGE_INFO", "info");
define("CONF_MESSAGE_SUCCESS", "success");
define("CONF_MESSAGE_WARNING", "warning");
define("CONF_MESSAGE_ERROR", "error");

/**
 * VIEW
 */
define("CONF_DIR_VIEWS", CONF_ROOT . '/app/views/');
define("CONF_EXT_VIEWS", ".html");

/**
 * MAIL
 */
define("CONF_MAIL_HOST", "smtp.sendgrid.net");
define("CONF_MAIL_PORT", "587");
define("CONF_MAIL_USER", "apikey");
define("CONF_MAIL_PASS", "**************************");
define("CONF_MAIL_SENDER", ["name" => "Iury Gomes", "address" => "iurygdeoliveira@gmail.com"]);
define("CONF_MAIL_SUPPORT", "iurygdeoliveira@gmail.com");
define("CONF_MAIL_OPTION_LANG", "br");
define("CONF_MAIL_OPTION_HTML", true);
define("CONF_MAIL_OPTION_AUTH", true);
define("CONF_MAIL_OPTION_SECURE", "tls");
define("CONF_MAIL_OPTION_CHARSET", "utf-8");