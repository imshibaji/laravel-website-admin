<?php

function console_log($data) {
    $output = '';

		if ( is_array( $data ) ) {
			$output .= "<script>console.warn( 'PHP Array:' ); console.log( '" . implode( ',', $data) . "' );</script>";
		} else if ( is_object( $data ) ) {
			$data    = var_export( $data, TRUE );
			$data    = explode( "\n", $data );
			foreach( $data as $line ) {
				if ( trim( $line ) ) {
					$line    = addslashes( $line );
					$output .= "console.log( '{$line}' );";
				}
			}
			$output = "<script>console.warn( 'PHP Object:' ); $output</script>";
		} else {
			$output .= "<script>console.log( 'PHP: {$data}' );</script>";
		}

	echo $output;
}
