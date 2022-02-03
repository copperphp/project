<?php

use Copper\Component\DB\DBConfigurator;

return function (DBConfigurator $db) {

    $db->enabled = false;

    $db->host = '127.0.0.1';
    $db->dbname = 'copper_php_project';
    $db->user = 'root';
    $db->password = '';

    $db->hashSalt = 'this_is_secret_hash_salt_that_should_be_changed';

};