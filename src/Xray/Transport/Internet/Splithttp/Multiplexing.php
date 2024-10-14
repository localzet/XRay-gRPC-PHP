<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: transport/internet/splithttp/config.proto

namespace Xray\Transport\Internet\Splithttp;

use Google\Protobuf\Internal\GPBUtil;
use Google\Protobuf\Internal\Message;

/**
 * Generated from protobuf message <code>xray.transport.internet.splithttp.Multiplexing</code>
 */
class Multiplexing extends Message
{
    /**
     * Generated from protobuf field <code>.xray.transport.internet.splithttp.RandRangeConfig maxConcurrency = 1;</code>
     */
    protected $maxConcurrency = null;
    /**
     * Generated from protobuf field <code>.xray.transport.internet.splithttp.RandRangeConfig maxConnections = 2;</code>
     */
    protected $maxConnections = null;
    /**
     * Generated from protobuf field <code>.xray.transport.internet.splithttp.RandRangeConfig cMaxReuseTimes = 3;</code>
     */
    protected $cMaxReuseTimes = null;
    /**
     * Generated from protobuf field <code>.xray.transport.internet.splithttp.RandRangeConfig cMaxLifetimeMs = 4;</code>
     */
    protected $cMaxLifetimeMs = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     * @type RandRangeConfig $maxConcurrency
     * @type RandRangeConfig $maxConnections
     * @type RandRangeConfig $cMaxReuseTimes
     * @type RandRangeConfig $cMaxLifetimeMs
     * }
     */
    public function __construct($data = NULL)
    {
        \GPBMetadata\Transport\Internet\Splithttp\Config::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>.xray.transport.internet.splithttp.RandRangeConfig maxConcurrency = 1;</code>
     * @return RandRangeConfig|null
     */
    public function getMaxConcurrency()
    {
        return $this->maxConcurrency;
    }

    public function hasMaxConcurrency()
    {
        return isset($this->maxConcurrency);
    }

    public function clearMaxConcurrency()
    {
        unset($this->maxConcurrency);
    }

    /**
     * Generated from protobuf field <code>.xray.transport.internet.splithttp.RandRangeConfig maxConcurrency = 1;</code>
     * @param RandRangeConfig $var
     * @return $this
     */
    public function setMaxConcurrency($var)
    {
        GPBUtil::checkMessage($var, RandRangeConfig::class);
        $this->maxConcurrency = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>.xray.transport.internet.splithttp.RandRangeConfig maxConnections = 2;</code>
     * @return RandRangeConfig|null
     */
    public function getMaxConnections()
    {
        return $this->maxConnections;
    }

    public function hasMaxConnections()
    {
        return isset($this->maxConnections);
    }

    public function clearMaxConnections()
    {
        unset($this->maxConnections);
    }

    /**
     * Generated from protobuf field <code>.xray.transport.internet.splithttp.RandRangeConfig maxConnections = 2;</code>
     * @param RandRangeConfig $var
     * @return $this
     */
    public function setMaxConnections($var)
    {
        GPBUtil::checkMessage($var, RandRangeConfig::class);
        $this->maxConnections = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>.xray.transport.internet.splithttp.RandRangeConfig cMaxReuseTimes = 3;</code>
     * @return RandRangeConfig|null
     */
    public function getCMaxReuseTimes()
    {
        return $this->cMaxReuseTimes;
    }

    public function hasCMaxReuseTimes()
    {
        return isset($this->cMaxReuseTimes);
    }

    public function clearCMaxReuseTimes()
    {
        unset($this->cMaxReuseTimes);
    }

    /**
     * Generated from protobuf field <code>.xray.transport.internet.splithttp.RandRangeConfig cMaxReuseTimes = 3;</code>
     * @param RandRangeConfig $var
     * @return $this
     */
    public function setCMaxReuseTimes($var)
    {
        GPBUtil::checkMessage($var, RandRangeConfig::class);
        $this->cMaxReuseTimes = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>.xray.transport.internet.splithttp.RandRangeConfig cMaxLifetimeMs = 4;</code>
     * @return RandRangeConfig|null
     */
    public function getCMaxLifetimeMs()
    {
        return $this->cMaxLifetimeMs;
    }

    public function hasCMaxLifetimeMs()
    {
        return isset($this->cMaxLifetimeMs);
    }

    public function clearCMaxLifetimeMs()
    {
        unset($this->cMaxLifetimeMs);
    }

    /**
     * Generated from protobuf field <code>.xray.transport.internet.splithttp.RandRangeConfig cMaxLifetimeMs = 4;</code>
     * @param RandRangeConfig $var
     * @return $this
     */
    public function setCMaxLifetimeMs($var)
    {
        GPBUtil::checkMessage($var, RandRangeConfig::class);
        $this->cMaxLifetimeMs = $var;

        return $this;
    }

}

