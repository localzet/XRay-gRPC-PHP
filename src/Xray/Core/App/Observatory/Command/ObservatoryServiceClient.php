<?php
// GENERATED CODE -- DO NOT EDIT!

namespace Xray\Core\App\Observatory\Command;

/**
 */
class ObservatoryServiceClient extends \Grpc\BaseStub {

    /**
     * @param string $hostname hostname
     * @param array $opts channel options
     * @param \Grpc\Channel $channel (optional) re-use channel object
     */
    public function __construct($hostname, $opts, $channel = null) {
        parent::__construct($hostname, $opts, $channel);
    }

    /**
     * @param \Xray\Core\App\Observatory\Command\GetOutboundStatusRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function GetOutboundStatus(\Xray\Core\App\Observatory\Command\GetOutboundStatusRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/xray.core.app.observatory.command.ObservatoryService/GetOutboundStatus',
        $argument,
        ['\Xray\Core\App\Observatory\Command\GetOutboundStatusResponse', 'decode'],
        $metadata, $options);
    }

}
