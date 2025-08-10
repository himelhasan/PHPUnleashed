<?php

function inputFunc( $method, $fieldName, $filterName, ) {
    if ( ! empty( $_REQUEST[$fieldName] ) ) {
        $result = filter_input( $method, $fieldName, $filterName );
        return htmlspecialchars( $result, ENT_QUOTES, "UTF-8" );

    }
    return null;
}

function inputCheckboxFunc() {}

function isChecked( $inputName, $value ) {
    if ( isset( $_REQUEST[$inputName] ) &&
        is_array( $_REQUEST[$inputName] ) &&
        in_array( $value, $_REQUEST[$inputName] ) ) {
        echo "checked";

    }
}