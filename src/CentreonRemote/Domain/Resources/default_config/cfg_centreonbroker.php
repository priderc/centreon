<?php

return [
    [
        'config_id'              => 1,
        'config_name'            => 'central-broker-master',
        'config_filename'        => 'central-broker.xml',
        'config_write_timestamp' => '1',
        'config_write_thread_id' => '0',
        'config_activate'        => '1',
        'event_queue_max_size'   => 100000,
        'cache_directory'        => '@centreonbroker_varlib@',
        'command_file'           => '@centreonbroker_varlib@/command.sock',
        'daemon'                 => 1,
    ],
    [
        'config_id'              => 2,
        'config_name'            => 'central-rrd-master',
        'config_filename'        => 'central-rrd.xml',
        'config_write_timestamp' => '1',
        'config_write_thread_id' => '0',
        'config_activate'        => '1',
        'ns_nagios_server'       => 1,
        'event_queue_max_size'   => 100000,
        'cache_directory'        => '@centreonbroker_varlib@',
        'daemon'                 => 1,
    ],
    [
        'config_id'              => 3,
        'config_name'            => 'central-module-master',
        'config_filename'        => 'central-module.xml',
        'config_write_timestamp' => '0',
        'config_write_thread_id' => '0',
        'config_activate'        => '1',
        'ns_nagios_server'       => 1,
        'event_queue_max_size'   => 100000,
        'cache_directory'        => '@monitoring_var_lib@',
        'daemon'                 => 0,
    ],
];
