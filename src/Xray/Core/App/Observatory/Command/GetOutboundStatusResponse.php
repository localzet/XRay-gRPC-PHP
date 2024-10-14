<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: app/observatory/command/command.proto

namespace Xray\Core\App\Observatory\Command;

use Google\Protobuf\Internal\GPBUtil;
use Google\Protobuf\Internal\Message;
use GPBMetadata\App\Observatory\Command\Command;
use Xray\Core\App\Observatory\ObservationResult;

/**
 * Generated from protobuf message <code>xray.core.app.observatory.command.GetOutboundStatusResponse</code>
 */
class GetOutboundStatusResponse extends Message
{
    /**
     * Generated from protobuf field <code>.xray.core.app.observatory.ObservationResult status = 1;</code>
     */
    protected $status = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     * @type ObservationResult $status
     * }
     */
    public function __construct($data = NULL)
    {
        Command::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>.xray.core.app.observatory.ObservationResult status = 1;</code>
     * @return ObservationResult|null
     */
    public function getStatus()
    {
        return $this->status;
    }

    public function hasStatus()
    {
        return isset($this->status);
    }

    public function clearStatus()
    {
        unset($this->status);
    }

    /**
     * Generated from protobuf field <code>.xray.core.app.observatory.ObservationResult status = 1;</code>
     * @param ObservationResult $var
     * @return $this
     */
    public function setStatus($var)
    {
        GPBUtil::checkMessage($var, ObservationResult::class);
        $this->status = $var;

        return $this;
    }

}
