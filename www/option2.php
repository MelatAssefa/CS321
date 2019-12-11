<?php include 'top.php'; ?>

<meta name="viewport" content="width=device-width,initial-scale=1.0">

<style>

        body {
          background-image: url('images/backgrounf.jpg'); }
        
        img {
            max-width:50px;
            height:50px;
        }
        
        p {
            color:black;
            font-size:15px;
        }
        
        #rsstitle {
            align:center;
        }
        
</style>

<html>
<head>
    <title>Best Movies of All Time | MetaCritic</title>
    <meta name="viewport" content="width=device-width,initial-scale=1.0">
    <link rel="stylesheet" href="http://ali8.cs321.simmons.edu/css/newcss.css">
</head>
<body>
    <div id="wrapper">
        <div id="feed_div">
            <?php
                $rss = simplexml_load_file('https://rss.app/feeds/pPA5bBrql3UE4Lv7.xml');
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
    
<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-154472598-1"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-154472598-1');
</script>

</body>
</html>
