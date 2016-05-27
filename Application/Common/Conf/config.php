<?php
return array(
	//'配置项'=>'配置值'
	//划分网页前后台
    'MODULE_ALLOW_LIST'      =>  array('Home','Admin'),
    //设置系统默认访问路径
    'DEFAULT_MODULE'        =>  'Home',  // 默认模块
    'DEFAULT_CONTROLLER'    =>  'Index', // 默认控制器名称
    'DEFAULT_ACTION'        =>  'index', // 默认操作名称
    //设置URL不区分链接大小写
    'URL_CASE_INSENSITIVE'  =>  true,   // 默认false 表示URL区分大小写 true则表示不区分大小写
    //设置模板替换标记
    'TMPL_PARSE_STRING'    => array(
       '__ADMIN__'=> '/Public/Admin',
       '__PUBLIC__'=> '/Public',
       '__HOME__'=> '/Public/Home',
    ),
    /* 数据库设置 */
    'DB_TYPE'               =>  'mysql',     // 数据库类型
    'DB_HOST'               =>  'www.try.com', // 服务器地址
    'DB_NAME'               =>  'form',          // 数据库名
    'DB_USER'               =>  'root',      // 用户名
    'DB_PWD'                =>  'root',          // 密码
    'DB_PORT'               =>  '3306',        // 端口
    'DB_PREFIX'             =>  'sw_',    // 数据库表前缀
    
	'DB_FIELDS_CACHE'       =>  false,        // 关闭字段缓存
	'URL_HTML_SUFFIX' => null, // URL伪静态后缀设置 就可以了
    //跳转页面配置
    'TMPL_ACTION_ERROR'     =>  THINK_PATH.'Tpl/dispatch_jump.tpl', // 默认错误跳转对应的模板文件
    'TMPL_ACTION_SUCCESS'   =>  THINK_PATH.'Tpl/dispatch_jump.tpl', // 默认成功跳转对应的模板文件
);

function otherdb()
{   
    return array(
	    'DB_TYPE'               =>  'mysql',     // 数据库类型
	    'DB_HOST'               =>  'www.guanwang.com', // 服务器地址
	    'DB_NAME'               =>  'guanwang',          // 数据库名
	    'DB_USER'               =>  'root',      // 用户名
	    'DB_PWD'                =>  'root',          // 密码
	    'DB_PORT'               =>  '3306',        // 端口
	    'DB_PREFIX'             =>  'sw_',    // 数据库表前
    	);
}