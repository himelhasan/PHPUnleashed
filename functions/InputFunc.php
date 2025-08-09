<?php

function inputFunc( $method, $fieldName, $filterName, ) {
    if ( ! empty( $_REQUEST[$fieldName] ) ) {
        $result = filter_input( $method, $fieldName, $filterName );
        return htmlspecialchars( $result, ENT_QUOTES, "UTF-8" );

    }
    return null;
}