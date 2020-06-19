# laravel-reset-password

[![issu Status](https://img.shields.io/github/issues/ok9xnirab/laravel-reset-password)](https://github.com/IANirab/laravel-reset-password/issues)
[![Build Status](https://travis-ci.org/boennemann/badges.svg?branch=master)](https://github.com/IANirab/laravel-reset-password/releases) ![folk Status](https://img.shields.io/github/forks/ok9xnirab/laravel-reset-password)
[![contributions welcome](https://img.shields.io/badge/contributions-welcome-brightgreen.svg?style=flat)](https://github.com/IANirab/laravel-reset-password/issues)

This is a Laravel Package , where you can send 6-digits unique password in users. These Package Can easily validate users email if its listed or not !!

# Install

`composer require nirab/reset-password`

add these line in 'providers' array of `config/app.php`

`nirab\resetpassword\ResetPasswordServiceProvider::class,`

then ,
use these command to publish package config file (resetpassword.php) in config folder and email template in views folder .

`php artisan vendor:publish`

open to `.env` file on your project & also setup database & mail connection at first

# Usage

add these line on top of your controller

`use nirab\resetpassword\Models\UserResetPassword;`

Then,

<code>
$resetpassword = new UserResetPassword();

echo $resetpassword->SendMail($email);</code>

Note :

\$email = Email of your users.

# Customization

go to `config/resetpassword.php`.
then you see ,

```bash
<?php
return [
    'msgSuccess' => 'A New Password Has Been Send to your Email !!',
    'msgError' => 'Email is not registered !!',
    'address' => 'mygmail@gmail.com',
    'name' => 'Reset Your Password :: Mysite.com'
];
```
