<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: app/metrics/config.proto

namespace Xray\App\Metrics;

use Google\Protobuf\Internal\GPBUtil;
use Google\Protobuf\Internal\Message;

/**
 * Config is the settings for metrics.
 *
 * Generated from protobuf message <code>xray.app.metrics.Config</code>
 */
class Config extends Message
{
    /**
     * Tag of the outbound handler that handles metrics http connections.
     *
     * Generated from protobuf field <code>string tag = 1;</code>
     */
    protected $tag = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     * @type string $tag
     *           Tag of the outbound handler that handles metrics http connections.
     * }
     */
    public function __construct($data = NULL)
    {
        \GPBMetadata\App\Metrics\Config::initOnce();
        parent::__construct($data);
    }

    /**
     * Tag of the outbound handler that handles metrics http connections.
     *
     * Generated from protobuf field <code>string tag = 1;</code>
     * @return string
     */
    public function getTag()
    {
        return $this->tag;
    }

    /**
     * Tag of the outbound handler that handles metrics http connections.
     *
     * Generated from protobuf field <code>string tag = 1;</code>
     * @param string $var
     * @return $this
     */
    public function setTag($var)
    {
        GPBUtil::checkString($var, True);
        $this->tag = $var;

        return $this;
    }

}

