<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: app/policy/config.proto

namespace Xray\App\Policy;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\GPBUtil;
use Google\Protobuf\Internal\MapField;
use Google\Protobuf\Internal\Message;

/**
 * Generated from protobuf message <code>xray.app.policy.Config</code>
 */
class Config extends Message
{
    /**
     * Generated from protobuf field <code>map<uint32, .xray.app.policy.Policy> level = 1;</code>
     */
    private $level;
    /**
     * Generated from protobuf field <code>.xray.app.policy.SystemPolicy system = 2;</code>
     */
    protected $system = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     * @type array|MapField $level
     * @type SystemPolicy $system
     * }
     */
    public function __construct($data = NULL)
    {
        \GPBMetadata\App\Policy\Config::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>map<uint32, .xray.app.policy.Policy> level = 1;</code>
     * @return MapField
     */
    public function getLevel()
    {
        return $this->level;
    }

    /**
     * Generated from protobuf field <code>map<uint32, .xray.app.policy.Policy> level = 1;</code>
     * @param array|MapField $var
     * @return $this
     */
    public function setLevel($var)
    {
        $arr = GPBUtil::checkMapField($var, GPBType::UINT32, GPBType::MESSAGE, Policy::class);
        $this->level = $arr;

        return $this;
    }

    /**
     * Generated from protobuf field <code>.xray.app.policy.SystemPolicy system = 2;</code>
     * @return SystemPolicy|null
     */
    public function getSystem()
    {
        return $this->system;
    }

    public function hasSystem()
    {
        return isset($this->system);
    }

    public function clearSystem()
    {
        unset($this->system);
    }

    /**
     * Generated from protobuf field <code>.xray.app.policy.SystemPolicy system = 2;</code>
     * @param SystemPolicy $var
     * @return $this
     */
    public function setSystem($var)
    {
        GPBUtil::checkMessage($var, SystemPolicy::class);
        $this->system = $var;

        return $this;
    }

}

