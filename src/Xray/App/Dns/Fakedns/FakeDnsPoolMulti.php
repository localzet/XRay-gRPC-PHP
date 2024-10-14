<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: app/dns/fakedns/fakedns.proto

namespace Xray\App\Dns\Fakedns;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\GPBUtil;
use Google\Protobuf\Internal\Message;
use Google\Protobuf\Internal\RepeatedField;
use GPBMetadata\App\Dns\Fakedns\Fakedns;

/**
 * Generated from protobuf message <code>xray.app.dns.fakedns.FakeDnsPoolMulti</code>
 */
class FakeDnsPoolMulti extends Message
{
    /**
     * Generated from protobuf field <code>repeated .xray.app.dns.fakedns.FakeDnsPool pools = 1;</code>
     */
    private $pools;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     * @type array<FakeDnsPool>|RepeatedField $pools
     * }
     */
    public function __construct($data = NULL)
    {
        Fakedns::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>repeated .xray.app.dns.fakedns.FakeDnsPool pools = 1;</code>
     * @return RepeatedField
     */
    public function getPools()
    {
        return $this->pools;
    }

    /**
     * Generated from protobuf field <code>repeated .xray.app.dns.fakedns.FakeDnsPool pools = 1;</code>
     * @param array<FakeDnsPool>|RepeatedField $var
     * @return $this
     */
    public function setPools($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, GPBType::MESSAGE, FakeDnsPool::class);
        $this->pools = $arr;

        return $this;
    }

}
