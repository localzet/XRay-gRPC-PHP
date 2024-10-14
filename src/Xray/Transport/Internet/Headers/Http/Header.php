<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: transport/internet/headers/http/config.proto

namespace Xray\Transport\Internet\Headers\Http;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\GPBUtil;
use Google\Protobuf\Internal\Message;
use Google\Protobuf\Internal\RepeatedField;

/**
 * Generated from protobuf message <code>xray.transport.internet.headers.http.Header</code>
 */
class Header extends Message
{
    /**
     * "Accept", "Cookie", etc
     *
     * Generated from protobuf field <code>string name = 1;</code>
     */
    protected $name = '';
    /**
     * Each entry must be valid in one piece. Random entry will be chosen if
     * multiple entries present.
     *
     * Generated from protobuf field <code>repeated string value = 2;</code>
     */
    private $value;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     * @type string $name
     *           "Accept", "Cookie", etc
     * @type array<string>|RepeatedField $value
     *           Each entry must be valid in one piece. Random entry will be chosen if
     *           multiple entries present.
     * }
     */
    public function __construct($data = NULL)
    {
        \GPBMetadata\Transport\Internet\Headers\Http\Config::initOnce();
        parent::__construct($data);
    }

    /**
     * "Accept", "Cookie", etc
     *
     * Generated from protobuf field <code>string name = 1;</code>
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * "Accept", "Cookie", etc
     *
     * Generated from protobuf field <code>string name = 1;</code>
     * @param string $var
     * @return $this
     */
    public function setName($var)
    {
        GPBUtil::checkString($var, True);
        $this->name = $var;

        return $this;
    }

    /**
     * Each entry must be valid in one piece. Random entry will be chosen if
     * multiple entries present.
     *
     * Generated from protobuf field <code>repeated string value = 2;</code>
     * @return RepeatedField
     */
    public function getValue()
    {
        return $this->value;
    }

    /**
     * Each entry must be valid in one piece. Random entry will be chosen if
     * multiple entries present.
     *
     * Generated from protobuf field <code>repeated string value = 2;</code>
     * @param array<string>|RepeatedField $var
     * @return $this
     */
    public function setValue($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, GPBType::STRING);
        $this->value = $arr;

        return $this;
    }

}

