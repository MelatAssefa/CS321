<?php include 'top.php'; ?>

<html>
<head>
    <title>Movie Insider: Upcoming Movies</title>
    <meta name="viewport" content="width=device-width,initial-scale=1.0">
</head>
<body>
    <div id="wrapper">
        <div id="feed_div">
            <?php
            $rss = simplexml_load_file('https://rss.app/feeds/dC6VzWV18qp2uCPw.xml');
            echo '<h1 class="title">'. $rss->channel->title . '</h1>';	
            foreach ($rss->channel->item as $item) 
            {
             echo '<p class="rsstitle"><a href="'. $item->link .'">' . $item->title . "</a></p>";
             echo "<p class='desc'>" . $item->description . "</p>";
            } 
            ?>
        </div>
    </div>

    <?php include 'bottom.php';?>

  </body>

</html>
