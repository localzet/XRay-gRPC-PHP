<?php
// GENERATED CODE -- DO NOT EDIT!

namespace Xray\App\Proxyman\Command;

use Grpc\BaseStub;
use Grpc\Channel;
use Grpc\UnaryCall;

/**
 */
class HandlerServiceClient extends BaseStub
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
     * @param AddInboundRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return UnaryCall
     */
    public function AddInbound(AddInboundRequest $argument,
                                                 $metadata = [], $options = [])
    {
        return $this->_simpleRequest('/xray.app.proxyman.command.HandlerService/AddInbound',
            $argument,
            ['\Xray\App\Proxyman\Command\AddInboundResponse', 'decode'],
            $metadata, $options);
    }

    /**
     * @param RemoveInboundRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return UnaryCall
     */
    public function RemoveInbound(RemoveInboundRequest $argument,
                                                       $metadata = [], $options = [])
    {
        return $this->_simpleRequest('/xray.app.proxyman.command.HandlerService/RemoveInbound',
            $argument,
            ['\Xray\App\Proxyman\Command\RemoveInboundResponse', 'decode'],
            $metadata, $options);
    }

    /**
     * @param AlterInboundRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return UnaryCall
     */
    public function AlterInbound(AlterInboundRequest $argument,
                                                     $metadata = [], $options = [])
    {
        return $this->_simpleRequest('/xray.app.proxyman.command.HandlerService/AlterInbound',
            $argument,
            ['\Xray\App\Proxyman\Command\AlterInboundResponse', 'decode'],
            $metadata, $options);
    }

    /**
     * @param AddOutboundRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return UnaryCall
     */
    public function AddOutbound(AddOutboundRequest $argument,
                                                   $metadata = [], $options = [])
    {
        return $this->_simpleRequest('/xray.app.proxyman.command.HandlerService/AddOutbound',
            $argument,
            ['\Xray\App\Proxyman\Command\AddOutboundResponse', 'decode'],
            $metadata, $options);
    }

    /**
     * @param RemoveOutboundRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return UnaryCall
     */
    public function RemoveOutbound(RemoveOutboundRequest $argument,
                                                         $metadata = [], $options = [])
    {
        return $this->_simpleRequest('/xray.app.proxyman.command.HandlerService/RemoveOutbound',
            $argument,
            ['\Xray\App\Proxyman\Command\RemoveOutboundResponse', 'decode'],
            $metadata, $options);
    }

    /**
     * @param AlterOutboundRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return UnaryCall
     */
    public function AlterOutbound(AlterOutboundRequest $argument,
                                                       $metadata = [], $options = [])
    {
        return $this->_simpleRequest('/xray.app.proxyman.command.HandlerService/AlterOutbound',
            $argument,
            ['\Xray\App\Proxyman\Command\AlterOutboundResponse', 'decode'],
            $metadata, $options);
    }

}
