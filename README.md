# laravel-reset-password

![issu Status](https://img.shields.io/github/issues/IANirab/laravel-reset-password)
![folk Status](https://img.shields.io/github/forks/IANirab/laravel-reset-password)
![star Status](https://img.shields.io/github/stars/IANirab/laravel-reset-password)
![license Status](https://img.shields.io/github/license/IANirab/laravel-reset-password)
![twitter](https://img.shields.io/twitter/url/https/github.com%2FIANirab%2Flaravel-reset-password)

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
