<?php
return array(
	//'配置项'=>'配置值'
        // 添加数据库配置信
    'SHOW_PAGE_TRACE' => false,
    'DB_TYPE' => 'mysql', // 数据库类型
    'DB_HOST' => '114.55.234.200', // 服务器地址
    'DB_NAME' => 'a_fhq', // 数据库名
    'DB_USER' => 'root', // 用户名
    'DB_PWD' => 'root', // 密码
    'DB_CHARSET' => 'utf8mb4',
    'DB_PORT' => 3306, // 端口
    'DB_PREFIX' => 'a_', // 数据库表前缀缀
    'SESSION_OPTIONS' => array(
        'type' => 'db', //session采用数据库保存
        'expire' => 14400, //session过期时间，如果不设就是php.ini中设置的默认值
    ),

    /*'appId' => 'wx7013c93ebe2eb4dc', //
    'appSecret' => '07ac056d1945493d9685e89a25b16ea1', //
    'token' => 'dgzc', //
    'erweima_expire_time' => '2592000', //*/
    //KlBi95qZ-U07d4l1YvVUxi9WNvp9Uktfvs7mmnunm1-XumwLyk89nUtIRYl7Ud3qhnVn6s9l7-0T6li_2rJsjgCFXv-R9NOB0a1BOv8LeOTSHeZ3nVm4lu4T43FiX-VbQQXgAAAVVC
);