<!DOCTYPE html>
<html>
<body>

<?php
$url = 'https://www.youtube.com/feeds/videos.xml?channel_id=UCzNWVDZQ55bjq8uILZ7_wyQ';
$xml = simplexml_load_file($url);
$ns = $xml->getDocNamespaces(true);
$xml->registerXPathNamespace('a', 'http://www.w3.org/2005/Atom');
$elements = $xml->xpath('//a:entry');
$content = $elements[0];

$yt = $content->children('http://www.youtube.com/xml/schemas/2015');
$media = $content->children('http://search.yahoo.com/mrss/');
echo "Video ID: " . $yt->videoId . "<br>";
echo "Video title: " . $content->title . "<br>";
echo "Upload date: " . $content->published . "<br>";
echo "Description: " .$media->group->description . "<br>";
?>

</body>
</html>