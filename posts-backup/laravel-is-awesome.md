# What's Laravel?

Laravel is a PHP framework for web development and it makes things a whole lot of easier. It takes the whole development process and makes it 2x faster.


## How laravel makes your life easier 
---
- #### Routing & Cleaner URLs
    Laravel provides a Router which can route different pages based on the URL that you enter. No more ".php" extensions. Laravel will change "abc.xyz/login.php" to "abc.xyz/login". Isn't that better to remember?
- #### MVC architecture
    This was a concept I had only studied as a 5M question for a Software Engineering exam. Laravel actually gave me a practical approach on how MVC actually works.
    MVC stands for Model View Controller. Here's the basic idea:
    >
    > Model: Connects with the database and provides the necessary data.
    > 
    > View: Used to view the returned data in a formatted way. This is what the user sees.
    >
    >Controller: The controller delegates each task to the respective models and gathers the data. It then sends the data to the respective view for displaying.
- #### Security - Say no to SQL Injections
    Laravel comes with a lot of inbuilt security features which will basically make it very hard for you to make mistakes. It has CSRF ([Cross Site Request Forgery](https://www.youtube.com/watch?v=vRBihr41JTo)) protection 

    Computerphile has an excellent video explaining CSRF:


    [![Computerphile has made an excellent video](http://img.youtube.com/vi/vRBihr41JTo/0.jpg)](http://www.youtube.com/watch?v=vRBihr41JTo)

    Laravel's Eloquent executes SQL queries in the form of PDO style prepared statements behind the scenes. What this means is, your website is no longer prone to [SQL injections](https://www.youtube.com/watch?v=_jKylhJtPmI).
- #### Blade Templating Engine - Sharper than ever
    Laravel comes with Blade which is a PHP templating engine. No more ugly lines of PHP code injected within HTML. Blade makes it look seamless with echo statements which can be represented with curly braces.

    ##### Without Blade:
    
    `There are <?=$count?> people who love <?=$laravel?>`
    
    ##### With Blade
    
    `There are {{ $count }} people who love {{ $laravel }}`


## Where you can learn it
I learned Laravel from **Jeffrey Way at [Laracasts](https://laracasts.com/series/laravel-from-scratch-2018)** - he has a bunch of videos which can get you started pretty quickly. I really like his teaching style. He focuses mainly on code and his tutorials are quick and easy to follow. 

If you're new to PHP or backend development in general, you should check out his **[PHP series](https://laracasts.com/series/php-for-beginners)**