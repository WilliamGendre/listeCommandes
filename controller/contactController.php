<?php 

function checkIfFormIsValid($request) {
    if ( 

        !empty($request['name']) && 
        !empty($request['email']) && 
        !empty($request['message']) &&

        preg_match("/^[a-zA-Z0-9.%+-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,}$/", $request['email'])

     ) {
        return true;
    } else {
        return false;
    }
}

?>