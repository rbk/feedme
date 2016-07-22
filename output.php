<?php
	// Feeds
	$hn = 'https://news.ycombinator.com/rss';
	$wp = 'https://wordpress.org/news/feed/';
	$ma_tech = 'http://mashable.com/tech/rss/';
	$ma_world = 'http://mashable.com/world/rss/';
	$tc = 'https://techcrunch.com/feed/';
	$grs = 'https://gurustu.co/feed/';
	$bbc = 'http://feeds.bbci.co.uk/news/rss.xml?edition=us';

	// Functions
	function listFeed( $url, $title = '' ) {
		$limit = 5;
		$count = 0;
		$xml = simplexml_load_file( $url );
		if( $title ) {
			echo '<h1>'.$title.'</h1>';
		}
		echo '<ul>';
		foreach( $xml->channel->item as $item ) {
			echo '<li><a href="'.$item->link.'" target="_blank">'.$item->title.'</a></li>';
			$count = $count + 1;
			if( $count == 5 ){
				break;
			}
		}
		echo '</ul>';
	}
	function printXml( $url ) {
		$xml = simplexml_load_file( $url );
		echo '<pre>';
		print_r( $xml );
		echo '</pre>';
	}

?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Feed</title>
	<link rel="stylesheet" href="style.css">
</head>
<body>
<?php 

listFeed( $bbc, 'BBC News' );
listFeed( $hn, 'Hacker News' );
listFeed( $ma_tech, 'Mashable - Tech' );
listFeed( $ma_world, 'Mashable - World' );
listFeed( $tc, 'TechCrunch' );
listFeed( $grs, 'GuRuStu' );

 ?>
 <script>
 setTimeout(function(){
 	location.reload();
 }, 1200000);
 </script>

 <div style="text-align:center;">
 	Last load: <script>document.write('Reloaded at ' + new Date() );</script>
 </div>
</body>
</html>
