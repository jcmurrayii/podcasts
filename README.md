# Quick Podcasts App

This is a quick and dirty php application for listing and linking to mp3 files, designed to be used similarly to a Podcast manager.

## To Run Locally for testing

Ensure you have Docker Desktop installed for your platform.  Checkout this repository, and from the repository root run `docker-compose up` which will launch a local development environment running php-fpm and nginx.  Once the services come up, you should be able to access the site at `http://localhost/`

## Running on a server
You should copy everything except the docker-compose.yaml, README.md, and nginx.conf files to your web host.  Nginx should be configured to use /app/public as it's home directory.

## Adding Podcasts

Upload mp3 files into the podcasts directory, and they will automatically be added to the list on the index.php for this application.

## Important Configuration Variables

All basic configuration of this script is designed to be done in configuration.php, removing the need to directly edit code for configuring how the application behaves.  Here are the settings currently available, and what they do:


- PODCAST_PATH: This should point to the full path of where you are storing your podcast mp3 files
- PODCAST_ROOT: This should point to the root url that nginx will address the podcasts path with
- TOPICS: Add key value pairs to the following array for mapping words in the filename to topics.
- DATE_FMT: Date format:  This is the date format that is expected for the first section of a filename. By default, this format will expect a 4 digit year, followed by a 2 digit month, and a 2 digit day and then a hyphen.
- DATE_DISPLAY_FMT: Date Display Format: This is how the date will be displayed in the output list of links.
- DEFAULT_EPISODE_TYPE: Default podcast type:  This is used if we cannot match a topic from our list using the last word of the filename.