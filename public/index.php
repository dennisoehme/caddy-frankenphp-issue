<?php

$request = file_get_contents('php://input');

echo mb_strlen($request) . " bytes received\n\n";

if (!empty($request)) {
    echo $request;

    print_r(json_decode($request, true, 512, JSON_THROW_ON_ERROR));
} else {
    echo 'No request data sent!';
}
