<?php
/**
 * Helper - BotMan
 *
 * @link      https://github.com/ssnukala/ufsprinkle-botman
 * @copyright Copyright (c) 2013-2016 Srinivas Nukala
 */

$app->get('/chat', 'UserFrosting\Sprinkle\BotMan\Controller\BotManController:pageChat');
$app->post('/chat', 'UserFrosting\Sprinkle\BotMan\Controller\BotManController:chatResponse');
