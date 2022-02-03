<?php


use Copper\Component\CP\CPConfigurator;

return function (CPConfigurator $cp) {

    $cp->ip_whitelist = ['127.0.0.1'];
    $cp->password = 'change_this_copper_cp_pass';

};