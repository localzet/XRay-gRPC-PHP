<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: app/policy/config.proto

namespace Xray\App\Policy;

use Google\Protobuf\Internal\GPBUtil;
use Google\Protobuf\Internal\Message;
use Xray\App\Policy\SystemPolicy\Stats;

/**
 * Generated from protobuf message <code>xray.app.policy.SystemPolicy</code>
 */
class SystemPolicy extends Message
{
    /**
     * Generated from protobuf field <code>.xray.app.policy.SystemPolicy.Stats stats = 1;</code>
     */
    protected $stats = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     * @type Stats $stats
     * }
     */
    public function __construct($data = NULL)
    {
        \GPBMetadata\App\Policy\Config::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>.xray.app.policy.SystemPolicy.Stats stats = 1;</code>
     * @return Stats|null
     */
    public function getStats()
    {
        return $this->stats;
    }

    public function hasStats()
    {
        return isset($this->stats);
    }

    public function clearStats()
    {
        unset($this->stats);
    }

    /**
     * Generated from protobuf field <code>.xray.app.policy.SystemPolicy.Stats stats = 1;</code>
     * @param Stats $var
     * @return $this
     */
    public function setStats($var)
    {
        GPBUtil::checkMessage($var, Stats::class);
        $this->stats = $var;

        return $this;
    }

}

