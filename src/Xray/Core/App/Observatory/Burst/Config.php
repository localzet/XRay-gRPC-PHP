<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: app/observatory/burst/config.proto

namespace Xray\Core\App\Observatory\Burst;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\GPBUtil;
use Google\Protobuf\Internal\Message;
use Google\Protobuf\Internal\RepeatedField;

/**
 * Generated from protobuf message <code>xray.core.app.observatory.burst.Config</code>
 */
class Config extends Message
{
    /**
     * &#64;Document The selectors for outbound under observation
     *
     * Generated from protobuf field <code>repeated string subject_selector = 2;</code>
     */
    private $subject_selector;
    /**
     * Generated from protobuf field <code>.xray.core.app.observatory.burst.HealthPingConfig ping_config = 3;</code>
     */
    protected $ping_config = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     * @type array<string>|RepeatedField $subject_selector
     *           &#64;Document The selectors for outbound under observation
     * @type HealthPingConfig $ping_config
     * }
     */
    public function __construct($data = NULL)
    {
        \GPBMetadata\App\Observatory\Burst\Config::initOnce();
        parent::__construct($data);
    }

    /**
     * &#64;Document The selectors for outbound under observation
     *
     * Generated from protobuf field <code>repeated string subject_selector = 2;</code>
     * @return RepeatedField
     */
    public function getSubjectSelector()
    {
        return $this->subject_selector;
    }

    /**
     * &#64;Document The selectors for outbound under observation
     *
     * Generated from protobuf field <code>repeated string subject_selector = 2;</code>
     * @param array<string>|RepeatedField $var
     * @return $this
     */
    public function setSubjectSelector($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, GPBType::STRING);
        $this->subject_selector = $arr;

        return $this;
    }

    /**
     * Generated from protobuf field <code>.xray.core.app.observatory.burst.HealthPingConfig ping_config = 3;</code>
     * @return HealthPingConfig|null
     */
    public function getPingConfig()
    {
        return $this->ping_config;
    }

    public function hasPingConfig()
    {
        return isset($this->ping_config);
    }

    public function clearPingConfig()
    {
        unset($this->ping_config);
    }

    /**
     * Generated from protobuf field <code>.xray.core.app.observatory.burst.HealthPingConfig ping_config = 3;</code>
     * @param HealthPingConfig $var
     * @return $this
     */
    public function setPingConfig($var)
    {
        GPBUtil::checkMessage($var, HealthPingConfig::class);
        $this->ping_config = $var;

        return $this;
    }

}
