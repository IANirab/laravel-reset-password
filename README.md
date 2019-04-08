# laravel-reset-password
This is a Laravel Package , where you can send 6-digits unique password in users. These Package Can easily validate users email if its listed or not !!


# Install

```composer require nirab/reset-password ```

add these line in 'providers' array of `config/app.php` 

```nirab\resetpassword\ResetPasswordServiceProvider::class,```

then ,
use these command to publish package config file (resetpassword.php) in config folder and email template in views folder .

```php artisan vendor:publish```


# Usage

add these line on top of your controller 

```use nirab\resetpassword\Models\UserResetPassword;```

Then,

<code>
$resetpassword = new UserResetPassword();

echo $resetpassword->SendMail($email);</code>

Note : 

$email = Email of your users.
