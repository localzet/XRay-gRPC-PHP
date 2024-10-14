<?php
// GENERATED CODE -- DO NOT EDIT!

namespace Xray\App\Log\Command;

use Grpc\BaseStub;
use Grpc\Channel;
use Grpc\UnaryCall;

/**
 */
class LoggerServiceClient extends BaseStub
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
     * @param RestartLoggerRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return UnaryCall
     */
    public function RestartLogger(RestartLoggerRequest $argument,
                                                       $metadata = [], $options = [])
    {
        return $this->_simpleRequest('/xray.app.log.command.LoggerService/RestartLogger',
            $argument,
            ['\Xray\App\Log\Command\RestartLoggerResponse', 'decode'],
            $metadata, $options);
    }

}
