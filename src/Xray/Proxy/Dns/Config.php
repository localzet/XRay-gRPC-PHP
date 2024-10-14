<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: proxy/dns/config.proto

namespace Xray\Proxy\Dns;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\GPBUtil;
use Google\Protobuf\Internal\Message;
use Google\Protobuf\Internal\RepeatedField;
use Xray\Common\Net\Endpoint;

/**
 * Generated from protobuf message <code>xray.proxy.dns.Config</code>
 */
class Config extends Message
{
    /**
     * Server is the DNS server address. If specified, this address overrides the
     * original one.
     *
     * Generated from protobuf field <code>.xray.common.net.Endpoint server = 1;</code>
     */
    protected $server = null;
    /**
     * Generated from protobuf field <code>uint32 user_level = 2;</code>
     */
    protected $user_level = 0;
    /**
     * Generated from protobuf field <code>string non_IP_query = 3;</code>
     */
    protected $non_IP_query = '';
    /**
     * Generated from protobuf field <code>repeated int32 block_types = 4;</code>
     */
    private $block_types;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     * @type Endpoint $server
     *           Server is the DNS server address. If specified, this address overrides the
     *           original one.
     * @type int $user_level
     * @type string $non_IP_query
     * @type array<int>|RepeatedField $block_types
     * }
     */
    public function __construct($data = NULL)
    {
        \GPBMetadata\Proxy\Dns\Config::initOnce();
        parent::__construct($data);
    }

    /**
     * Server is the DNS server address. If specified, this address overrides the
     * original one.
     *
     * Generated from protobuf field <code>.xray.common.net.Endpoint server = 1;</code>
     * @return Endpoint|null
     */
    public function getServer()
    {
        return $this->server;
    }

    public function hasServer()
    {
        return isset($this->server);
    }

    public function clearServer()
    {
        unset($this->server);
    }

    /**
     * Server is the DNS server address. If specified, this address overrides the
     * original one.
     *
     * Generated from protobuf field <code>.xray.common.net.Endpoint server = 1;</code>
     * @param Endpoint $var
     * @return $this
     */
    public function setServer($var)
    {
        GPBUtil::checkMessage($var, Endpoint::class);
        $this->server = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>uint32 user_level = 2;</code>
     * @return int
     */
    public function getUserLevel()
    {
        return $this->user_level;
    }

    /**
     * Generated from protobuf field <code>uint32 user_level = 2;</code>
     * @param int $var
     * @return $this
     */
    public function setUserLevel($var)
    {
        GPBUtil::checkUint32($var);
        $this->user_level = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>string non_IP_query = 3;</code>
     * @return string
     */
    public function getNonIPQuery()
    {
        return $this->non_IP_query;
    }

    /**
     * Generated from protobuf field <code>string non_IP_query = 3;</code>
     * @param string $var
     * @return $this
     */
    public function setNonIPQuery($var)
    {
        GPBUtil::checkString($var, True);
        $this->non_IP_query = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>repeated int32 block_types = 4;</code>
     * @return RepeatedField
     */
    public function getBlockTypes()
    {
        return $this->block_types;
    }

    /**
     * Generated from protobuf field <code>repeated int32 block_types = 4;</code>
     * @param array<int>|RepeatedField $var
     * @return $this
     */
    public function setBlockTypes($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, GPBType::INT32);
        $this->block_types = $arr;

        return $this;
    }

}
