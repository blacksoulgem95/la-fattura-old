<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Authentication Language Lines
    |--------------------------------------------------------------------------
    |
    | The following language lines are used during authentication for various
    | messages that we need to display to the user. You are free to modify
    | these language lines according to your application's requirements.
    |
    */

    'failed' => 'These credentials do not match our records.',
    'password' => 'The provided password is incorrect.',
    'throttle' => 'Too many login attempts. Please try again in :seconds seconds.',
    'title' => [
        'recovery' => 'Password recovery',
        'email' => 'Email',
        'password' => 'Password',
        'passwordRepeat' => 'Repeat Password',
        'remember' => 'Remember me',
        'securedArea' => 'This is a secure area, confirm your password'
    ],
    'messages' => [
      'verify' => [
          'title' => 'Thanks for signing up! Before getting started, could you verify your email address by clicking on the link we just emailed to you? If you didn\'t receive the email, we will gladly send you another.',
          'linkSent' => 'A new verification link has been sent to the email address you provided during registration.',
          'resend' => 'Resend Verification Email'
      ]
    ],
    'cta' => [
        'send' => 'Send',
        'login' => 'Login',
        'customerAreaLogin' => 'Customer Area Login'
    ]

];
