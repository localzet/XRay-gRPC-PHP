<?php
// GENERATED CODE -- DO NOT EDIT!

namespace Xray\Core\App\Observatory\Command;

use Grpc\BaseStub;
use Grpc\Channel;
use Grpc\UnaryCall;

/**
 */
class ObservatoryServiceClient extends BaseStub
{

    /**
     * @param string $hostname hostname
     * @param array $opts channel options
     * @param Channel $channel (optional) re-use channel object
     */
    public function __construct($hostname, $opts, $channel = null)
    {
        parent::__construct($hostname, $opts, $channel);
    }

    /**
     * @param GetOutboundStatusRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return UnaryCall
     */
    public function GetOutboundStatus(GetOutboundStatusRequest $argument,
                                                               $metadata = [], $options = [])
    {
        return $this->_simpleRequest('/xray.core.app.observatory.command.ObservatoryService/GetOutboundStatus',
            $argument,
            ['\Xray\Core\App\Observatory\Command\GetOutboundStatusResponse', 'decode'],
            $metadata, $options);
    }

}
