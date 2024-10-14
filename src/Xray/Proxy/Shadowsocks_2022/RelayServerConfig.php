<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: proxy/shadowsocks_2022/config.proto

namespace Xray\Proxy\Shadowsocks_2022;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\GPBUtil;
use Google\Protobuf\Internal\Message;
use Google\Protobuf\Internal\RepeatedField;
use GPBMetadata\Proxy\Shadowsocks2022\Config;
use Xray\Common\Net\Network;

/**
 * Generated from protobuf message <code>xray.proxy.shadowsocks_2022.RelayServerConfig</code>
 */
class RelayServerConfig extends Message
{
    /**
     * Generated from protobuf field <code>string method = 1;</code>
     */
    protected $method = '';
    /**
     * Generated from protobuf field <code>string key = 2;</code>
     */
    protected $key = '';
    /**
     * Generated from protobuf field <code>repeated .xray.proxy.shadowsocks_2022.RelayDestination destinations = 3;</code>
     */
    private $destinations;
    /**
     * Generated from protobuf field <code>repeated .xray.common.net.Network network = 4;</code>
     */
    private $network;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     * @type string $method
     * @type string $key
     * @type array<RelayDestination>|RepeatedField $destinations
     * @type array<int>|RepeatedField $network
     * }
     */
    public function __construct($data = NULL)
    {
        Config::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>string method = 1;</code>
     * @return string
     */
    public function getMethod()
    {
        return $this->method;
    }

    /**
     * Generated from protobuf field <code>string method = 1;</code>
     * @param string $var
     * @return $this
     */
    public function setMethod($var)
    {
        GPBUtil::checkString($var, True);
        $this->method = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>string key = 2;</code>
     * @return string
     */
    public function getKey()
    {
        return $this->key;
    }

    /**
     * Generated from protobuf field <code>string key = 2;</code>
     * @param string $var
     * @return $this
     */
    public function setKey($var)
    {
        GPBUtil::checkString($var, True);
        $this->key = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>repeated .xray.proxy.shadowsocks_2022.RelayDestination destinations = 3;</code>
     * @return RepeatedField
     */
    public function getDestinations()
    {
        return $this->destinations;
    }

    /**
     * Generated from protobuf field <code>repeated .xray.proxy.shadowsocks_2022.RelayDestination destinations = 3;</code>
     * @param array<RelayDestination>|RepeatedField $var
     * @return $this
     */
    public function setDestinations($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, GPBType::MESSAGE, RelayDestination::class);
        $this->destinations = $arr;

        return $this;
    }

    /**
     * Generated from protobuf field <code>repeated .xray.common.net.Network network = 4;</code>
     * @return RepeatedField
     */
    public function getNetwork()
    {
        return $this->network;
    }

    /**
     * Generated from protobuf field <code>repeated .xray.common.net.Network network = 4;</code>
     * @param array<int>|RepeatedField $var
     * @return $this
     */
    public function setNetwork($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, GPBType::ENUM, Network::class);
        $this->network = $arr;

        return $this;
    }

}

