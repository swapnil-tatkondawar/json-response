<?php

require_once __DIR__."/vendor/autoload.php";

use SwapnilT\ResponseClass\JsonResponse;

$student = [
'name' => 'Swapnil',
'course' => 'Software Engneering',
'level' => 200,
'collections' => ['book' => 'Two States', 'music' => 'rap']
];

new JsonResponse('ok', '', $student);