<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: app/dispatcher/config.proto

namespace GPBMetadata\App\Dispatcher;

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
app/dispatcher/config.protoxray.app.dispatcher"

SessionConfigJ">
Config4
settings (2".xray.app.dispatcher.SessionConfigB[
com.xray.app.dispatcherPZ(github.com/xtls/xray-core/app/dispatcher�Xray.App.Dispatcherbproto3'
            , true);

        static::$is_initialized = true;
    }
}
