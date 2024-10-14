<?php
// GENERATED CODE -- DO NOT EDIT!

namespace Xray\App\Log\Command;

/**
 */
class LoggerServiceClient extends \Grpc\BaseStub {

    /**
     * @param string $hostname hostname
     * @param array $opts channel options
     * @param \Grpc\Channel $channel (optional) re-use channel object
     */
    public function __construct($hostname, $opts, $channel = null) {
        parent::__construct($hostname, $opts, $channel);
    }

    /**
     * @param \Xray\App\Log\Command\RestartLoggerRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function RestartLogger(\Xray\App\Log\Command\RestartLoggerRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/xray.app.log.command.LoggerService/RestartLogger',
        $argument,
        ['\Xray\App\Log\Command\RestartLoggerResponse', 'decode'],
        $metadata, $options);
    }

}
