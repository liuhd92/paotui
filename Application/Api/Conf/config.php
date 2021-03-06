<?php
return array(
	//'配置项'=>'配置值'
    
    /* 错误码 */
    'ERR_CODE' => array(
        /*内部错误*/
        '10101' => '系统错误',
        '10102' => '服务暂停',
        '10103' => '远程服务错误',
        '10104' => 'APP版本过低，请安装新版本',
        '10105' => 'APP已有新版本，请前往下载',
        '10106' => '数据库连接异常',
        '10107' => '数据库操作失败',
        '10108' => 'Redis服务连接异常',
        '10109' => 'Redis服务器密码错误',
        '10110' => '参数错误',
        
        /*用户模块*/
        '10201' => '用户id不能为空',
        '10202' => '暂无当前用户信息',
        
        /*订单模块*/
        '10301' => '订单详情不能为空',
        '10302' => '收货地址不能为空',
        '10303' => '订单生成失败',
        '10304' => '收货地址国家不能为空',
        '10305' => '收货地址城市不能为空',
        '10306' => '收货地址地区不能为空',
        '10307' => '详细收货地址信息不能为空',
        '10308' => '收货人手机号码不能为空',
        '10309' => '收货人姓名不能为空',
        '10311' => '收货地址添加失败',
        '10312' => '订单列表查询失败',
        '10313' => '订单状态不能为空',
        '10314' => '暂无订单信息',
        '10315' => '暂无收货地址',
        '10316' => '收货地址id不能为空',
        
        /*商品模块*/
        '10401' => '商品类型不能为空',
        '10402' => '暂无商品列表',
        '10403' => '商品列表获取失败',
        
    ),
);