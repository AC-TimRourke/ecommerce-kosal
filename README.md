# Kosal's E-commerce Store

This application is Kosal's awesome E-commerce Store™ (cooler name TBD.)

To get started, download the [correct installer of Docker](https://www.docker.com/) for your platform.

Next, create a folder called `project`, or something similar, to put our project
into. **IMPORTANT:** Don't make this folder under the vagrant folders - put it
somewhere else.

## Clone the repos you need

Once you're created your root folder, go ahead and clone this project into that
root `project` folder.

Then, clone the [laradock](https://github.com/laradock/laradock) repo into the
root `project` folder, so it's a _sibling_ of this project.

Now you should have a folder structure that looks something like this:

```
- project           // The root folder could be called anything
  - ecommerce-kodal // The application we're building
  - laradock        // The suite of docker containers we can use to host our work locally
```

## Configure laradock

Finally, to get things rolling, we need to make a couple configuration changes
inside `laradock` to tell `docker-compose` how we are hosting our application.
Inside of `ecommerce-kosal`, you should find a file called `.laradock.env.example`.
Copy that file into the root of `/project/laradock`. Once it's copied, rename it
to simply be `.env`.

Now, copy the file inside of `ecommerce-kosal` called `.nginx.app.conf.example`,
and save it into the folder `/project/laradock/nginx/sites`. Once it's copied,
rename it to simply be `app.conf`.

## Spin up docker-compose

We're all set - let's try to spin up our new environment. Change directories so
you're inside of `/project/laradock`. Now run the command:

```
docker-compose up nginx mysql
```

If all goes well, you should see that Docker gets busy downloading all the
dependencies for your environment. Once it completes the downloads, it should
spin up nginx and mysql, and starts to host our application.

## Install our Composer dependencies

Our application depends on some Composer dependencies. SSHing into our Docker
environment is a little different from `vagrant ssh`. We need to invoke this
command from within our `/project/laradock` folder (you might need to open a new
terminal window to do this):

```
docker-compose exec --user=laradock workspace bash
```

For our purposes, this command is essentially just like SSHing into vagrant.
Once you're logged in, you'll see a familiar terminal interface, and you'll be
at the directory `/var/www`, which is the web root of our `ecommerce-kosal`
repository. If you execute the commad `ls`, you'll discover that you're actually
looking at the Docker-hosted version of the folder `/project/ecommerce-kosal/public`.
Our `/public` folder is where any and all public requests to our application
will enter our app. Check out the file `/public/index.php` for some neat hints.

**FINALLY** we can install our simple few Composer dependencies to get our
environment rolling. At first, our only dependency is PHPUnit, but we'll add more
as we go. While in the folder `/var/www`, go ahead and run this command:

```
composer install
```

When the terminal activity has settled down, you should be able to browse to the
following URL and see a welcome message:

```
http://localhost:3456
```
