<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: app/router/command/command.proto

namespace Xray\App\Router\Command;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>xray.app.router.command.AddRuleRequest</code>
 */
class AddRuleRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>.xray.common.serial.TypedMessage config = 1;</code>
     */
    protected $config = null;
    /**
     * Generated from protobuf field <code>bool shouldAppend = 2;</code>
     */
    protected $shouldAppend = false;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \Xray\Common\Serial\TypedMessage $config
     *     @type bool $shouldAppend
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\App\Router\Command\Command::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>.xray.common.serial.TypedMessage config = 1;</code>
     * @return \Xray\Common\Serial\TypedMessage|null
     */
    public function getConfig()
    {
        return $this->config;
    }

    public function hasConfig()
    {
        return isset($this->config);
    }

    public function clearConfig()
    {
        unset($this->config);
    }

    /**
     * Generated from protobuf field <code>.xray.common.serial.TypedMessage config = 1;</code>
     * @param \Xray\Common\Serial\TypedMessage $var
     * @return $this
     */
    public function setConfig($var)
    {
        GPBUtil::checkMessage($var, \Xray\Common\Serial\TypedMessage::class);
        $this->config = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>bool shouldAppend = 2;</code>
     * @return bool
     */
    public function getShouldAppend()
    {
        return $this->shouldAppend;
    }

    /**
     * Generated from protobuf field <code>bool shouldAppend = 2;</code>
     * @param bool $var
     * @return $this
     */
    public function setShouldAppend($var)
    {
        GPBUtil::checkBool($var);
        $this->shouldAppend = $var;

        return $this;
    }

}

