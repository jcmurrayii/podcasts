# Quick Podcasts App

This is a quick and dirty php application for listing and linking to mp3 files, designed to be used similarly to a Podcast manager.

## To Run Locally for testing

Ensure you have Docker Desktop installed for your platform.  Checkout this repository, and from the repository root run `docker-compose up` which will launch a local development environment running php-fpm and nginx.  Once the services come up, you should be able to access the site at `http://localhost/`

## Running on a server
You should copy everything except the docker-compose.yaml, README.md, and nginx.conf files to your web host.  Nginx should be configured to use /app/public as it's home directory.

## Adding Podcasts

Upload mp3 files into the podcasts directory, and they will automatically be added to the list on the index.php for this application.