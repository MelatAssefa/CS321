<?php

header('Content-type: application/xml');

$servername = "localhost";
$username = "ali8";
$password = "1903505";
$dbname = "db_ali8";

$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
 
echo "<rss version='2.0' xmlns:atom='http://www.w3.org/2005/Atom'>\n";
echo "<channel>\n";

echo "<title>My RSS Feed</title>\n";
echo "<description>Description</description>\n";
echo "<link>https://www.movieinsider.com/movies-coming-soon</link>\n";

$stmt = $conn->query('SELECT * FROM IMDBRSSFEED ORDER BY newsDate DESC LIMIT 10');
while($row = $stmt->fetch(PDO::FETCH_OBJ)) {
     echo "<item>n";
         echo "<title>$row->IMDBRSSFEEDTitle</title>\n";
         echo "<description>$row->IMDBRSSFEEDDesc</description>\n";
         echo "<pubDate>".date('D, d M Y H:i:s',strtotime($row->IMDBRSSFEEDDate))." GMT</pubDate>\n";
         echo "<link>http://www.mydomain.com/$row->IMDBRSSFEEDSlug</link>\n";
         echo "<guid>http://www.mydomain.com/$row->IMDBRSSFEEDSlug</guid>\n";
         echo "<atom:link href='http://www.mydomain.com/$row->IMDBRSSFEEDslug' rel='self' type='application/rss+xml'/>\n";
     echo "</item>\n";
}

echo "</channel>\n";
echo "</rss>\n";
?>