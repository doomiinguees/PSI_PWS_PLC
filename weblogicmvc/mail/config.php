<?php

/*
 * REQUIRED SETTINGS
 *
 * You will probably need to change all of these settings for your own site.
 */

// The name and address which should be used for the sender details.
// The name can be anything you want, the address should be something in your own domain. It does not need to exist as a mailbox.
define('CONTACTFORM_FROM_ADDRESS', 'noreply@hdservices.botelho.eu.org');
define('CONTACTFORM_FROM_NAME', 'HD Services');

// The details of your SMTP service.
define('CONTACTFORM_SMTP_HOSTNAME', 'smtp.yandex.com');
define('CONTACTFORM_SMTP_USERNAME', 'noreply@hdservices.botelho.eu.org');
define('CONTACTFORM_SMTP_PASSWORD', '123David#');

/*
 * Optional Settings
 */

// The debug level for PHPMailer. Default is 0 (off), but can be increased from 1-4 for more verbose logging.
define('CONTACTFORM_PHPMAILER_DEBUG_LEVEL', 0);

// Which SMTP port and encryption type to use. The default is probably fine for most use cases.
define('CONTACTFORM_SMTP_PORT', 465);
define('CONTACTFORM_SMTP_ENCRYPTION', 'ssl');

// Character encoding settings. The default is probably fine for most use cases.
define('CONTACTFORM_MAIL_CHARSET', 'utf-8'); // Can be: us-ascii, iso-8859-1, utf-8. Default: iso-8859-1.
define('CONTACTFORM_MAIL_ENCODING', '8bit'); // Can be: 7bit, 8bit, base64, binary, quoted-printable. Default: 8bit.

// The language used for error message and the like.
// Supports 2 letter language codes, e.g. en, fr, es, cn. Default: en.
define('CONTACTFORM_LANGUAGE', 'en');
