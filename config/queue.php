<?php
/**
 * +----------------------------------------------------------------------
 * 消息队列配置
 * +----------------------------------------------------------------------
 * 官网：https://www.sw-x.cn
 * +----------------------------------------------------------------------
 * 作者：小黄牛 <1731223728@qq.com>
 * +----------------------------------------------------------------------
 * 开源协议：http://www.apache.org/licenses/LICENSE-2.0
 * +----------------------------------------------------------------------
*/

return [
    // 默认使用的队列配置
    'default' => [
        // 驱动 支持redis
        'type' => 'redis',
        // 驱动所使用的连接池标识
        'pool' => 'default',
        // 队列前缀
        'channel' => 'queue',
        // pop 消息的超时时间（S）
        'timeout' => 2,
        // 消费失败后的间隔次数+间隔时间
        'retry_seconds' => [5, 60, 1800, 3600],
    ]
];