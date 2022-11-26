<?php
require_once 'configuration.php';

class PodcastProcessor {
    public static function processDirListing() {
        if ($handle = opendir(constant('PODCAST_PATH'))) {
            $podcastFiles = [];
            while (false !== ($entry = readdir($handle))) {
        
                if ($entry != "." && $entry != "..") {
                    array_push($podcastFiles, $entry);
                }
            }
            closedir($handle);
            return $podcastFiles;
        }
    }

    public static function getPodcastLinkData($podcast) {
        $parts = explode('-', $podcast);
        $topic = explode('.',$parts[1])[0];
        $clean_topic = (array_key_exists($topic, TOPICS)) ? TOPICS[$topic] : DEFAULT_EPISODE_TYPE;
        
        $date = DateTimeImmutable::createFromFormat(DATE_FMT,$parts[0]);
        
        $title = $date->format(DATE_DISPLAY_FMT) . ': ' . $clean_topic;
        
        return [
            'link' => PODCAST_ROOT . '/' . $podcast, 
            'title' => $title,
        ];
    }
}