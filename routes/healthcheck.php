<?php

return function() {
    header('Content-Type: application/json');

    $response = ['status' => 'ok'];

    echo json_encode($response);
};

