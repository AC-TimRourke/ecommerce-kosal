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
spin up nginx and mysql, and starts to host our application. When the terminal
activity has settled down, you should be able to browse to the following URL
and see a welcome message:

```
http://localhost:3456
```
