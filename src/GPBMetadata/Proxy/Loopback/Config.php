<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: proxy/loopback/config.proto

namespace GPBMetadata\Proxy\Loopback;

use Google\Protobuf\Internal\DescriptorPool;

class Config
{
    public static $is_initialized = false;

    public static function initOnce()
    {
        $pool = DescriptorPool::getGeneratedPool();

        if (static::$is_initialized == true) {
            return;
        }
        $pool->internalAddGeneratedFile(
            '
�
proxy/loopback/config.protoxray.proxy.loopback"
Config
inbound_tag (	B[
com.xray.proxy.loopbackPZ(github.com/xtls/xray-core/proxy/loopback�Xray.Proxy.Loopbackbproto3'
            , true);

        static::$is_initialized = true;
    }
}

