<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: transport/internet/grpc/config.proto

namespace GPBMetadata\Transport\Internet\Grpc;

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
$transport/internet/grpc/config.proto%xray.transport.internet.grpc.encoding"�
Config
	authority (	
service_name (	

multi_mode (
idle_timeout (
health_check_timeout (
permit_without_stream (
initial_windows_size (

user_agent (	B3Z1github.com/xtls/xray-core/transport/internet/grpcbproto3'
            , true);

        static::$is_initialized = true;
    }
}

