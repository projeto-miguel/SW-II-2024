<?php

//CÓDIGO PRINCIPAL DO APP

require_once __DIR__ . '/../../api/config.php';
require_once __DIR__ . '/../../api/response.php';

$data = require_once __DIR__ .'/../../api/data.php';

echo Response::SendResponse(200, 'API running ok', $data);