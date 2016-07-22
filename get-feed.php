<?php 

	
$fh = fopen('cache.html', 'w+');
$html = file_get_contents( 'http://localhost/feedme/feed1.php' );
fwrite($fh, $html);
fclose($fh);



?>