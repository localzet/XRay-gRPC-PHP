<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: app/commander/config.proto

namespace GPBMetadata\App\Commander;

class Config
{
    public static $is_initialized = false;

    public static function initOnce() {
        $pool = \Google\Protobuf\Internal\DescriptorPool::getGeneratedPool();

        if (static::$is_initialized == true) {
          return;
        }
        \GPBMetadata\Common\Serial\TypedMessage::initOnce();
        $pool->internalAddGeneratedFile(
            '
�
app/commander/config.protoxray.app.commander"X
Config
tag (	
listen (	1
service (2 .xray.common.serial.TypedMessage"
ReflectionConfigBX
com.xray.app.commanderPZ\'github.com/xtls/xray-core/app/commander�Xray.App.Commanderbproto3'
        , true);

        static::$is_initialized = true;
    }
}

