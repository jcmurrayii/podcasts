<?php
require_once '../configuration.php';
require_once '../PodcastProcessor.php';



$podcasts = PodcastProcessor::processDirListing();
$links = [];
foreach($podcasts as $podcast) {
    array_push($links, PodcastProcessor::getPodcastLinkData($podcast));
}

?>

<ul>

<?php
foreach($links as $link) {
    echo "<li><a href=\"{$link['link']}\" target=\"_blank\">{$link['title']}</a>";
}

?>
</ul>