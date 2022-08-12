<?php

namespace App\Controllers;

use \Core\View;
use \App\Models\User;

/**
 * Password controller
 *
 * PHP version 7.0
 */
class Password extends \Core\Controller
{
    /**
     * Show the forgotten password page
     *
     * @return void
     */
    public function forgotAction()
    {
        View::renderTemplate('Password/forgot.html');
    }

    /**
     * Send the password reset link to the supplied email
     *
     * @return void
     */
    public function requestResetAction()
    {
        User::sendPasswordReset($_POST['email']); /* passing email from form */

        View::renderTemplate('Password/reset_requested.html');
    }

    /**
     * Show the reset password form
     *
     * @return void
     */
    public function resetAction()  //method that matches url
    {
        $token = $this->route_params['token'];

        echo $token;

        $user = User::findByPasswordReset($token); //passing token from url

        var_dump($user);
    }
}
