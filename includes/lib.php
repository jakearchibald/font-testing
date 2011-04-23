<?php

// this isn't accurate, but does the job
function slow_send_lipsum($bytes_to_send, $sleep, $chunk_size) {
	$lipsum = "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean id justo felis. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Cras faucibus dui in leo euismod scelerisque. In eu nunc eu tortor euismod faucibus sit amet tincidunt nibh. Donec risus ipsum, vehicula porttitor placerat nec, aliquet quis arcu. Sed enim metus, vestibulum a porttitor eget, sodales ut massa. Vivamus neque lorem, consectetur at malesuada sit amet, viverra elementum nulla. Integer non augue ac enim consequat fringilla. Donec semper, quam eget tincidunt malesuada, ligula lacus viverra magna, et blandit odio odio a libero. Nulla vel dui sed arcu malesuada consectetur consectetur vel nisi.";
	$len = strlen($lipsum);
	$bytes_sent = 0;
	ob_start();
	
	for ($pos = 0; $bytes_sent < $bytes_to_send; $bytes_sent += $chunk_size) {
		$pos += $chunk_size - 1;
		$to_send = substr($lipsum, $pos, $chunk_size - 1);
		$pos += $chunk_size - 1;
		
		if ( strlen($to_send) != $chunk_size ) {
			// we're at the end of our lipsum string, back to the start
			$pos = 0;
			$to_send = substr($lipsum, $pos, $chunk_size - 1);
		}
		
		$to_send .= "\n";
		echo $to_send;
		flush();
		ob_flush();
		usleep($sleep * 1000000);
	}
	
	ob_end_flush();
}