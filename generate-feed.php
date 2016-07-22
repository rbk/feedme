<?php

echo '<pre>';
print_r( $_SERVER );

	
$fh = fopen('index.html', 'w+');
$html = file_get_contents( '/feed/output.php' );
if( $html ) {
	fwrite($fh, $html);
}
fclose($fh);



?>