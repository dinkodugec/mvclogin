<?php

namespace App;

/**
 * Application configuration
 *
 * PHP version 7.0
 */
class Config
{

    /**
     * Database host
     * @var string
     */
    const DB_HOST = 'localhost';

    /**
     * Database name
     * @var string
     */
    const DB_NAME = 'mvclogin';

    /**
     * Database user
     * @var string
     */
    const DB_USER = 'root';

    /**
     * Database password
     * @var string
     */
    const DB_PASSWORD = '';

    /**
     * Show or hide error messages on screen
     * @var boolean
     */
    const SHOW_ERRORS = true;

     /*   secret key for hashing
   
      $var boolean */

    const SECRET_KEY = '34MZVItyAtKPNPY0jr9QK353WdztxOT7';

    /**
     * Mailgun API key
     *
     * @var string
     */
    const MAILGUN_API_KEY = '8641339d7fa12ff5bbab2812460acba4-c250c684-b893ab7b';

    /**
     * Mailgun domain
     *
     * @var string
     */
    const MAILGUN_DOMAIN = 'sandboxe39cdf76bc0c49f7b6f257503812d823.mailgun.org';
}
