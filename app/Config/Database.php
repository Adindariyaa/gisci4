<?php

namespace Config;

use CodeIgniter\Database\Config;

class Database extends Config
{
    public string $filesPath = APPPATH . 'Database' . DIRECTORY_SEPARATOR;

    public string $defaultGroup = 'default';

    public array $default = [];

    public array $tests = [];

    public function __construct()
    {
        parent::__construct();

        // Assign env() result inside the constructor
        $this->defaultGroup = env('database.default.group', 'default');

        $this->default = [
            'DSN'          => env('database.default.DSN', ''),
            'hostname'     => env('database.default.hostname', 'localhost'),
            'username'     => env('database.default.username', 'root'),
            'password'     => env('database.default.password', ''),
            'database'     => env('database.default.database', 'ci4'),
            'DBDriver'     => env('database.default.DBDriver', 'MySQLi'),
            'DBPrefix'     => env('database.default.DBPrefix', ''),
            'pConnect'     => (bool) env('database.default.pConnect', false),
            'DBDebug'      => (bool) env('database.default.DBDebug', ENVIRONMENT !== 'production'),
            'charset'      => env('database.default.charset', 'utf8mb4'),
            'DBCollat'     => env('database.default.DBCollat', 'utf8mb4_general_ci'),
            'swapPre'      => env('database.default.swapPre', ''),
            'encrypt'      => (bool) env('database.default.encrypt', false),
            'compress'     => (bool) env('database.default.compress', false),
            'strictOn'     => (bool) env('database.default.strictOn', false),
            'failover'     => [],
            'port'         => (int) env('database.default.port', 3306),
            'numberNative' => (bool) env('database.default.numberNative', false),
            'foundRows'    => (bool) env('database.default.foundRows', false),
        ];

        $this->tests = [
            'DSN'         => env('database.tests.DSN', ''),
            'hostname'    => env('database.tests.hostname', '127.0.0.1'),
            'username'    => env('database.tests.username', ''),
            'password'    => env('database.tests.password', ''),
            'database'    => env('database.tests.database', ':memory:'),
            'DBDriver'    => env('database.tests.DBDriver', 'SQLite3'),
            'DBPrefix'    => env('database.tests.DBPrefix', 'db_'),
            'pConnect'    => (bool) env('database.tests.pConnect', false),
            'DBDebug'     => (bool) env('database.tests.DBDebug', true),
            'charset'     => env('database.tests.charset', 'utf8'),
            'DBCollat'    => env('database.tests.DBCollat', 'utf8_general_ci'),
            'swapPre'     => env('database.tests.swapPre', ''),
            'encrypt'     => (bool) env('database.tests.encrypt', false),
            'compress'    => (bool) env('database.tests.compress', false),
            'strictOn'    => (bool) env('database.tests.strictOn', false),
            'failover'    => [],
            'port'        => (int) env('database.tests.port', 3306),
            'foreignKeys' => (bool) env('database.tests.foreignKeys', true),
            'busyTimeout' => (int) env('database.tests.busyTimeout', 1000),
        ];

        if (ENVIRONMENT === 'testing') {
            $this->defaultGroup = 'tests';
        }
    }
}
