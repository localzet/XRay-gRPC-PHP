<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: transport/internet/headers/srtp/config.proto

namespace GPBMetadata\Transport\Internet\Headers\Srtp;

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
�
,transport/internet/headers/srtp/config.proto$xray.transport.internet.headers.srtp"w
Config
version (

padding (
	extension (

csrc_count (

marker (
payload_type (
B�
(com.xray.transport.internet.headers.srtpPZ9github.com/xtls/xray-core/transport/internet/headers/srtp�$Xray.Transport.Internet.Headers.Srtpbproto3'
            , true);

        static::$is_initialized = true;
    }
}
