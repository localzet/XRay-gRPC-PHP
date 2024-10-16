<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: app/dns/config.proto

namespace GPBMetadata\App\Dns;

class Config
{
    public static $is_initialized = false;

    public static function initOnce() {
        $pool = \Google\Protobuf\Internal\DescriptorPool::getGeneratedPool();

        if (static::$is_initialized == true) {
          return;
        }
        \GPBMetadata\Common\Net\Destination::initOnce();
        \GPBMetadata\App\Router\Config::initOnce();
        $pool->internalAddGeneratedFile(
            '
�
app/dns/config.protoxray.app.dnsapp/router/config.proto"�

NameServer*
address (2.xray.common.net.Endpoint
	client_ip (
skipFallback (C
prioritized_domain (2\'.xray.app.dns.NameServer.PriorityDomain%
geoip (2.xray.app.router.GeoIP=
original_rules (2%.xray.app.dns.NameServer.OriginalRule3
query_strategy (2.xray.app.dns.QueryStrategyP
PriorityDomain.
type (2 .xray.app.dns.DomainMatchingType
domain (	*
OriginalRule
rule (	
size ("�
Config-
name_server (2.xray.app.dns.NameServer
	client_ip (6
static_hosts (2 .xray.app.dns.Config.HostMapping
tag (	
disableCache (3
query_strategy	 (2.xray.app.dns.QueryStrategy
disableFallback
 (
disableFallbackIfMatch (q
HostMapping.
type (2 .xray.app.dns.DomainMatchingType
domain (	

ip (
proxied_domain (	J*E
DomainMatchingType
Full 
	Subdomain
Keyword	
Regex*5
QueryStrategy

USE_IP 
USE_IP4
USE_IP6BF
com.xray.app.dnsPZ!github.com/xtls/xray-core/app/dns�Xray.App.Dnsbproto3'
        , true);

        static::$is_initialized = true;
    }
}

