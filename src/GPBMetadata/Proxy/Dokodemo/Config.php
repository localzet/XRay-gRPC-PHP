<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: proxy/dokodemo/config.proto

namespace GPBMetadata\Proxy\Dokodemo;

use Google\Protobuf\Internal\DescriptorPool;
use GPBMetadata\Common\Net\Address;
use GPBMetadata\Common\Net\Network;

class Config
{
    public static $is_initialized = false;

    public static function initOnce()
    {
        $pool = DescriptorPool::getGeneratedPool();

        if (static::$is_initialized == true) {
            return;
        }
        Address::initOnce();
        Network::initOnce();
        $pool->internalAddGeneratedFile(
            '
�
proxy/dokodemo/config.protoxray.proxy.dokodemocommon/net/network.proto"�
Config,
address (2.xray.common.net.IPOrDomain
port (
*
networks (2.xray.common.net.Network
follow_redirect (

user_level (
B[
com.xray.proxy.dokodemoPZ(github.com/xtls/xray-core/proxy/dokodemo�Xray.Proxy.Dokodemobproto3'
            , true);

        static::$is_initialized = true;
    }
}
