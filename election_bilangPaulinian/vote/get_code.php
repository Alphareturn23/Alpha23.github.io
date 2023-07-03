<?php
function get_Codes() {

	$data = 'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWFYZ1234567890';
    $random_pass = array();
    $string_variable = strlen($data) - 1;

    for($i=0; $i<6; $i++){
        $n = rand(0,$string_variable);
        $random_pass[] = $data[$n];
    }
    return(implode($random_pass));

}

?>