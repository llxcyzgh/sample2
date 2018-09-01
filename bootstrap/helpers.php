<?php
/**
 * 判断是在本地环境还是在线上环境, 从而方便调用不同类型的数据库(本地mysql, 线上postgresql)
 */

function get_db_config()
{
    if (getenv('IS_IN_HEROKU')) {
        $url = parse_url(getenv("DATABASE_URL"));
        return $db_config = [
            'connection' => 'pgsql',
            'port'       => $url['port'],
            'host'       => $url['host'],
            'database'   => substr($url['path'], 1),
            'username'   => $url['user'],
            'password'   => $url['pass']
        ];
    } else {
        return $db_config = [
            'connection' => env('DB_CONNECTION', ' mysql'),
            'host'       => env('DB_HOST', 'localhost'),
            'database'   => env('DB_DATABASE', 'dontknow'),
            'username'   => env('DB_USERNAME', 'dontknow'),
            'password'   => env('DB_PASSWORD', 'dontknow')
        ];
    }
}