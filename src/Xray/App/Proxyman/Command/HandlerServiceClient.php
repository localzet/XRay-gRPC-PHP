<?php
// GENERATED CODE -- DO NOT EDIT!

namespace Xray\App\Proxyman\Command;

/**
 */
class HandlerServiceClient extends \Grpc\BaseStub {

    /**
     * @param string $hostname hostname
     * @param array $opts channel options
     * @param \Grpc\Channel $channel (optional) re-use channel object
     */
    public function __construct($hostname, $opts, $channel = null) {
        parent::__construct($hostname, $opts, $channel);
    }

    /**
     * @param \Xray\App\Proxyman\Command\AddInboundRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function AddInbound(\Xray\App\Proxyman\Command\AddInboundRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/xray.app.proxyman.command.HandlerService/AddInbound',
        $argument,
        ['\Xray\App\Proxyman\Command\AddInboundResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Xray\App\Proxyman\Command\RemoveInboundRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function RemoveInbound(\Xray\App\Proxyman\Command\RemoveInboundRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/xray.app.proxyman.command.HandlerService/RemoveInbound',
        $argument,
        ['\Xray\App\Proxyman\Command\RemoveInboundResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Xray\App\Proxyman\Command\AlterInboundRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function AlterInbound(\Xray\App\Proxyman\Command\AlterInboundRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/xray.app.proxyman.command.HandlerService/AlterInbound',
        $argument,
        ['\Xray\App\Proxyman\Command\AlterInboundResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Xray\App\Proxyman\Command\AddOutboundRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function AddOutbound(\Xray\App\Proxyman\Command\AddOutboundRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/xray.app.proxyman.command.HandlerService/AddOutbound',
        $argument,
        ['\Xray\App\Proxyman\Command\AddOutboundResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Xray\App\Proxyman\Command\RemoveOutboundRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function RemoveOutbound(\Xray\App\Proxyman\Command\RemoveOutboundRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/xray.app.proxyman.command.HandlerService/RemoveOutbound',
        $argument,
        ['\Xray\App\Proxyman\Command\RemoveOutboundResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Xray\App\Proxyman\Command\AlterOutboundRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function AlterOutbound(\Xray\App\Proxyman\Command\AlterOutboundRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/xray.app.proxyman.command.HandlerService/AlterOutbound',
        $argument,
        ['\Xray\App\Proxyman\Command\AlterOutboundResponse', 'decode'],
        $metadata, $options);
    }

}
