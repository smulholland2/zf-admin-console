<?php
/**
 * Global Configuration Override
 *
 * You can use this file for overriding configuration values from modules, etc.
 * You would place values in here that are agnostic to the environment and not
 * sensitive to security.
 *
 * @NOTE: In practice, this file will typically be INCLUDED in your source
 * control, so do not include passwords or other sensitive information in this
 * file.
 */
 
use Doctrine\DBAL\Driver\SQLSrv\Driver as SQLSrvDriver;

return [
    'doctrine' => [
        'connection' => [
            'orm_default' => [
                'driverClass' => SQLSrvDriver::class,
                'params' => [
                    'host'     => 'tapseries-qa.ckxc7bgyoazb.us-west-2.rds.amazonaws.com',
                    'user'     => 'awsuser',
                    'password' => 'rJYb99iN5Rp4',
                    'dbname'   => 'newtap',
                    'port'     => 1433,
                ]
            ],
        ],
    ],
];
