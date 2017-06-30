<?php

// Anything under the "/app" folder should have the namespace "App".
namespace App;

/**
 * The Example class illustrates a class that lives under a namespace, "App".
 * Namespaces are useful because they allow us to have multiple classes using
 * the same class _name_. Imagine that you import two 3rd party libraries from
 * Composer, one called `cooltest/modelfactory`, and one called `ninja4/factory`.
 * Perhaps they both have a class called "Factory", and you need to use that
 * class in your own app. Obviously, these two classes are totally different.
 * What makes them similar is that they both are defined like this:
 *
 * ```
 * class Factory {
 *     // etc.
 * }
 * ```
 *
 * How can we tell them apart? Furthermore, how can we load one, and not pick
 * the other?
 *
 * The answer is by using namespaces. Let's say that ninja4 defines their class
 * like this:
 *
 * ```
 * namespace Ninja4;
 *
 * class Factory {
 *     // etc.
 * }
 * ```
 *
 * ...and the vendor called cooltest published their library with a class def
 * that looked like this:
 *
 * ```
 * namespace Cooltest;
 *
 * class Factory {
 *     // etc.
 * }
 * ```
 *
 * Now when we mean to use one class, and not the other, we can specifically
 * import it into our own implementation like this:
 *
 * ```
 * namespace App; // <- That's OUR namespace.
 *
 * use Ninja4\Factory as NinjaFactory; // <- Here, we specify which vendor's
 *     // "Factory" class we mean. To make things even clearer for ourselves,
 *     // we optionally alias the imported class so we don't forget which is
 *     // the one we're using.
 * ```
 *
 * Finally, one handy thing about namespaces is that the PHP community has
 * decided that each "\" in the namespace should indicate that a new _directory_
 * in the file structure of a library should contain things with that namespace's
 * path. For example, let's say we wanted to use a class with a namespace like
 * this:
 *
 * ```
 * use Illuminate\Foundation\Auth\AuthenticatesUsers;
 * ```
 *
 * You can tell from the namespace that once that library is installed by
 * Composer into your vendor directory, you'll be able to find the class
 * definition under some folder called /Illuminate/Foundation/Auth/AuthenticatesUsers.
 *
 * That ALSO means that Composer's autoloader will know to find the class under
 * the same folder path.
 *
 * Remember: namespaces indicate a level of organization to help keep things
 * from being ambiguous. They also communicate where to find a given file in
 * a library's codebase.
 *
 * To learn more about namespaces, and how modern PHP projects "autoload"
 * classes, check out the @see links below.
 *
 * @see http://php.net/manual/en/language.namespaces.php
 * @see http://www.php-fig.org/psr/psr-4/
 */
class Example {

    /**
     * Say hello
     *
     * @return void
     */
    public function sayHello()
    {
        echo 'Hello from Example!';
    }

}
