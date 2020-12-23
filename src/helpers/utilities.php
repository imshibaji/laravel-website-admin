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

function checkRole($data, $user){
    $out = false;
    $items = $user->getRoleNames();
    foreach ($items as $item) {
        if($item == $data){
            $out = true;
            break;
        }
    }
    return $out;
}

function checkPermission($data, $role){
    $out = false;
    $items = $role->getPermissionNames();
    foreach ($items as $item) {
        if($item == $data){
            $out = true;
            break;
        }
    }
    return $out;
}

function json_to_object($json, $assoc=false){
    return json_decode($json, $assoc);
}

function object_to_json($object){
    return json_encode($object);
}

function array_to_object($items){
    return json_decode(json_encode($items));
}
