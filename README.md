![Screenshot of the logo of the application.](/public/images/logo.svg)

## Laracast Blog

**A simple Blog where you can create, edit, update & delete posts.**

**You can also comment posts using the powerful eloquent ORM provided by Laravel.**

## Usage 

> [!NOTE]
> First of all, you have to log in if you have already a account or you can also register.


![Screenshot of the login & register buttons.](/public/images/register-or-login.png)

> [!IMPORTANT]
> Once you are connected, you can comment any post on the site.

![Screenshot of the comment on a random post](/public/images/comments.png)

To write a comment you have to be logged in otherwise you can't.

This site was built using [Laravel version 8](https://laravel.com/).

> [!IMPORTANT]
> When you log in as a administrator you can have more privilege like:

* Create posts.
* Update posts.
* Delete them.

Here is a illustration of those options:

![Screenshot of options](/public/images/options.png)

You'll have access to the dashboard

![Screenshot of the dashboard](/public/images/dashboard.png)


To make sure that you are a administrator, you have to go to the AppServiceProvider class
and update just for the fun this piece of code:

```php
Gate::define('admin', function (User $user) 
        {
            return $user->username === 'christobwabwa';
        });
```
to 
```php
Gate::define('admin', function (User $user) 
        {
            return $user->username === 'yourusername';
        });
```
> [!IMPORTANT]
> To add post just click to the New post link

## *Have fun:)* ##