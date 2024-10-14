<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: app/observatory/burst/config.proto

namespace Xray\Core\App\Observatory\Burst;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>xray.core.app.observatory.burst.HealthPingConfig</code>
 */
class HealthPingConfig extends \Google\Protobuf\Internal\Message
{
    /**
     * destination url, need 204 for success return
     * default https://connectivitycheck.gstatic.com/generate_204
     *
     * Generated from protobuf field <code>string destination = 1;</code>
     */
    protected $destination = '';
    /**
     * connectivity check url
     *
     * Generated from protobuf field <code>string connectivity = 2;</code>
     */
    protected $connectivity = '';
    /**
     * health check interval, int64 values of time.Duration
     *
     * Generated from protobuf field <code>int64 interval = 3;</code>
     */
    protected $interval = 0;
    /**
     * sampling count is the amount of recent ping results which are kept for calculation
     *
     * Generated from protobuf field <code>int32 samplingCount = 4;</code>
     */
    protected $samplingCount = 0;
    /**
     * ping timeout, int64 values of time.Duration
     *
     * Generated from protobuf field <code>int64 timeout = 5;</code>
     */
    protected $timeout = 0;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $destination
     *           destination url, need 204 for success return
     *           default https://connectivitycheck.gstatic.com/generate_204
     *     @type string $connectivity
     *           connectivity check url
     *     @type int|string $interval
     *           health check interval, int64 values of time.Duration
     *     @type int $samplingCount
     *           sampling count is the amount of recent ping results which are kept for calculation
     *     @type int|string $timeout
     *           ping timeout, int64 values of time.Duration
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\App\Observatory\Burst\Config::initOnce();
        parent::__construct($data);
    }

    /**
     * destination url, need 204 for success return
     * default https://connectivitycheck.gstatic.com/generate_204
     *
     * Generated from protobuf field <code>string destination = 1;</code>
     * @return string
     */
    public function getDestination()
    {
        return $this->destination;
    }

    /**
     * destination url, need 204 for success return
     * default https://connectivitycheck.gstatic.com/generate_204
     *
     * Generated from protobuf field <code>string destination = 1;</code>
     * @param string $var
     * @return $this
     */
    public function setDestination($var)
    {
        GPBUtil::checkString($var, True);
        $this->destination = $var;

        return $this;
    }

    /**
     * connectivity check url
     *
     * Generated from protobuf field <code>string connectivity = 2;</code>
     * @return string
     */
    public function getConnectivity()
    {
        return $this->connectivity;
    }

    /**
     * connectivity check url
     *
     * Generated from protobuf field <code>string connectivity = 2;</code>
     * @param string $var
     * @return $this
     */
    public function setConnectivity($var)
    {
        GPBUtil::checkString($var, True);
        $this->connectivity = $var;

        return $this;
    }

    /**
     * health check interval, int64 values of time.Duration
     *
     * Generated from protobuf field <code>int64 interval = 3;</code>
     * @return int|string
     */
    public function getInterval()
    {
        return $this->interval;
    }

    /**
     * health check interval, int64 values of time.Duration
     *
     * Generated from protobuf field <code>int64 interval = 3;</code>
     * @param int|string $var
     * @return $this
     */
    public function setInterval($var)
    {
        GPBUtil::checkInt64($var);
        $this->interval = $var;

        return $this;
    }

    /**
     * sampling count is the amount of recent ping results which are kept for calculation
     *
     * Generated from protobuf field <code>int32 samplingCount = 4;</code>
     * @return int
     */
    public function getSamplingCount()
    {
        return $this->samplingCount;
    }

    /**
     * sampling count is the amount of recent ping results which are kept for calculation
     *
     * Generated from protobuf field <code>int32 samplingCount = 4;</code>
     * @param int $var
     * @return $this
     */
    public function setSamplingCount($var)
    {
        GPBUtil::checkInt32($var);
        $this->samplingCount = $var;

        return $this;
    }

    /**
     * ping timeout, int64 values of time.Duration
     *
     * Generated from protobuf field <code>int64 timeout = 5;</code>
     * @return int|string
     */
    public function getTimeout()
    {
        return $this->timeout;
    }

    /**
     * ping timeout, int64 values of time.Duration
     *
     * Generated from protobuf field <code>int64 timeout = 5;</code>
     * @param int|string $var
     * @return $this
     */
    public function setTimeout($var)
    {
        GPBUtil::checkInt64($var);
        $this->timeout = $var;

        return $this;
    }

}

