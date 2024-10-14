<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: common/net/address.proto

namespace Xray\Common\Net;

use Google\Protobuf\Internal\GPBUtil;
use Google\Protobuf\Internal\Message;
use GPBMetadata\Common\Net\Address;

/**
 * Address of a network host. It may be either an IP address or a domain
 * address.
 *
 * Generated from protobuf message <code>xray.common.net.IPOrDomain</code>
 */
class IPOrDomain extends Message
{
    protected $address;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     * @type string $ip
     *           IP address. Must by either 4 or 16 bytes.
     * @type string $domain
     *           Domain address.
     * }
     */
    public function __construct($data = NULL)
    {
        Address::initOnce();
        parent::__construct($data);
    }

    /**
     * IP address. Must by either 4 or 16 bytes.
     *
     * Generated from protobuf field <code>bytes ip = 1;</code>
     * @return string
     */
    public function getIp()
    {
        return $this->readOneof(1);
    }

    public function hasIp()
    {
        return $this->hasOneof(1);
    }

    /**
     * IP address. Must by either 4 or 16 bytes.
     *
     * Generated from protobuf field <code>bytes ip = 1;</code>
     * @param string $var
     * @return $this
     */
    public function setIp($var)
    {
        GPBUtil::checkString($var, False);
        $this->writeOneof(1, $var);

        return $this;
    }

    /**
     * Domain address.
     *
     * Generated from protobuf field <code>string domain = 2;</code>
     * @return string
     */
    public function getDomain()
    {
        return $this->readOneof(2);
    }

    public function hasDomain()
    {
        return $this->hasOneof(2);
    }

    /**
     * Domain address.
     *
     * Generated from protobuf field <code>string domain = 2;</code>
     * @param string $var
     * @return $this
     */
    public function setDomain($var)
    {
        GPBUtil::checkString($var, True);
        $this->writeOneof(2, $var);

        return $this;
    }

    /**
     * @return string
     */
    public function getAddress()
    {
        return $this->whichOneof("address");
    }

}
