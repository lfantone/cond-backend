<?php
    require_once __DIR__.'/lib/flight/Flight.php';
    require_once __DIR__.'/src/routes.php';

    Flight::set('flight.views.path', __DIR__.'/src/views');

    Flight::start();
?>
