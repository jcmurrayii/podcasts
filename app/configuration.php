<?php

/*
 * This should point to the full path of where you are storing your podcast mp3 files
 */
define('PODCAST_PATH','/app/public/podcasts');

/*
 * This should point to the root url that nginx will address the podcasts path with
 */
define('PODCAST_ROOT','/podcasts');

/*
 *  Add key value pairs to the following array for mapping words in the filename to topics.
 */
define('TOPICS',[
    'obit' => 'Obituaries',
    'news' => 'News',
]);

/*
 * Date format:  This is the date format that is expected for the first section of a filename.
 * By default, this format will expect a 4 digit year, followed by a 2 digit month, and a 2 digit day and then a hyphen.
 */
define('DATE_FMT','Ymd'); 

/*
 * Date Display Format: This is how the date will be displayed in the output list of links.
 */
define('DATE_DISPLAY_FMT','F d, Y'); 

/*
 * Default podcast type:  This is used if we cannot match a topic from our list using the last word of the filename.
 */

define('DEFAULT_EPISODE_TYPE', 'Episode');