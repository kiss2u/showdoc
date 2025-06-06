<?php
return array(
    //'配置项'=>'配置值'
    //使用sqlite数据库
    'DB_TYPE'   => 'Sqlite', 
    'DB_NAME'   => '../Sqlite/showdoc.db.php', 
    //showdoc不再支持mysql http://www.showdoc.cc/help?page_id=31990
    'DB_HOST'   => 'localhost',
    'DB_USER'   => 'showdoc', 
    'DB_PWD'    => 'showdoc123456',
    'DB_PORT'   => 3306, // 端口
    'DB_PREFIX' => '', // 数据库表前缀
    'DB_CHARSET'=> 'utf8', // 字符集
    'DB_DEBUG'  =>  TRUE, // 数据库调试模式 开启后可以记录SQL日志
    'DB_PARAMS' => array(
        PDO::ATTR_STRINGIFY_FETCHES => true, // 设置为true,强制把数字读取成字符串返回
    ),
    'URL_HTML_SUFFIX' => '',//url伪静态后缀
    'URL_MODEL' => 3 ,//URL兼容模式
    'URL_ROUTER_ON'   => true, 
    'URL_ROUTE_RULES'=>array(
        'uid/:id\d'               => 'Home/Item/showByUid?uid=:1',
        'page/:id\d'               => 'Home/Page/single?page_id=:1',
        'mock-data/:unique_key\s'               => 'Api/Mock/infoByKey?unique_key=:1',
        'mock-path/:id\s'               => 'Api/Mock/infoByPath?item_id=:1',
        ':id\d'               => 'Home/Item/show?item_id=:1',
        ':domain\s/:id\d'               => 'Home/Page/single?item_domain=:1&page_id=:2',
        ':domain\s$'               => 'Home/Item/show?item_domain=:1',//item的个性域名
    ),
    'URL_CASE_INSENSITIVE'=>true,
    'SHOW_ERROR_MSG'        =>  true,    // 显示错误信息，这样在部署模式下也能显示错误
    'STATS_CODE' =>'',  //可选，统计代码
    'TMPL_CACHE_ON' => false,//禁止模板编译缓存
    'HTML_CACHE_ON' => false,//禁止静态缓存
    'TMPL_EXCEPTION_FILE' => '../Public/exception.tpl' , //错误模版
    //上传文件到七牛的配置
    'UPLOAD_SITEIMG_QINIU' => array(
                    'maxSize' => 5 * 1024 * 1024,//文件大小
                    'rootPath' => './',
                    'saveName' => array ('uniqid', ''),
                    'driver' => 'Qiniu',
                    'driverConfig' => array (
                            'secrectKey' => '', 
                            'accessKey' => '',
                            'domain' => '',
                            'bucket' => '', 
                        )
                    ),
    'DATA_CACHE_KEY'=>'file_cache_safe',
);