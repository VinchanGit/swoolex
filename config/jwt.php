<?php
// +----------------------------------------------------------------------
// | JWT配置
// +----------------------------------------------------------------------
// | Copyright (c) 2018 https://blog.junphp.com All rights reserved.
// +----------------------------------------------------------------------
// | Licensed ( http://www.apache.org/licenses/LICENSE-2.0 )
// +----------------------------------------------------------------------
// | Author: 小黄牛 <1731223728@qq.com>
// +----------------------------------------------------------------------

return [
    // +-----------------------------
    // | Csrf
    // +-----------------------------

    // CSRF Session名称
    'csrf_session_name' => '_csrf_token',
    // CSRF Session过期时间（s）
    'csrf_outtime' => 1800,
    // CSRF 表单或Ajax字段名称
    'csrf_form_name' => 'csrf_token',

    // +-----------------------------
    // | JWT
    // +-----------------------------

    // JWT 加密secret
    'jwt_secret' => 'swoolex',
    // JWT 默认签发者
    'jwt_iss' => 'swoolex',
    // JWT 过期时间（s）
    'jwt_exp' => 7200,
    // JWT 生成后多少秒之前不接收处理该JWT-Token（s）
    'jwt_nbf' => 0, 
    // Jwt 表单或Ajax或Headers字段名称
    'jwt_form_name' => 'Bearer token',
];