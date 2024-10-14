<?php
// GENERATED CODE -- DO NOT EDIT!

namespace Xray\App\Router\Command;

use Grpc\BaseStub;
use Grpc\Channel;
use Grpc\ServerStreamingCall;
use Grpc\UnaryCall;

/**
 */
class RoutingServiceClient extends BaseStub
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
     * @param SubscribeRoutingStatsRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return ServerStreamingCall
     */
    public function SubscribeRoutingStats(SubscribeRoutingStatsRequest $argument,
                                                                       $metadata = [], $options = [])
    {
        return $this->_serverStreamRequest('/xray.app.router.command.RoutingService/SubscribeRoutingStats',
            $argument,
            ['\Xray\App\Router\Command\RoutingContext', 'decode'],
            $metadata, $options);
    }

    /**
     * @param TestRouteRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return UnaryCall
     */
    public function TestRoute(TestRouteRequest $argument,
                                               $metadata = [], $options = [])
    {
        return $this->_simpleRequest('/xray.app.router.command.RoutingService/TestRoute',
            $argument,
            ['\Xray\App\Router\Command\RoutingContext', 'decode'],
            $metadata, $options);
    }

    /**
     * @param GetBalancerInfoRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return UnaryCall
     */
    public function GetBalancerInfo(GetBalancerInfoRequest $argument,
                                                           $metadata = [], $options = [])
    {
        return $this->_simpleRequest('/xray.app.router.command.RoutingService/GetBalancerInfo',
            $argument,
            ['\Xray\App\Router\Command\GetBalancerInfoResponse', 'decode'],
            $metadata, $options);
    }

    /**
     * @param OverrideBalancerTargetRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return UnaryCall
     */
    public function OverrideBalancerTarget(OverrideBalancerTargetRequest $argument,
                                                                         $metadata = [], $options = [])
    {
        return $this->_simpleRequest('/xray.app.router.command.RoutingService/OverrideBalancerTarget',
            $argument,
            ['\Xray\App\Router\Command\OverrideBalancerTargetResponse', 'decode'],
            $metadata, $options);
    }

    /**
     * @param AddRuleRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return UnaryCall
     */
    public function AddRule(AddRuleRequest $argument,
                                           $metadata = [], $options = [])
    {
        return $this->_simpleRequest('/xray.app.router.command.RoutingService/AddRule',
            $argument,
            ['\Xray\App\Router\Command\AddRuleResponse', 'decode'],
            $metadata, $options);
    }

    /**
     * @param RemoveRuleRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return UnaryCall
     */
    public function RemoveRule(RemoveRuleRequest $argument,
                                                 $metadata = [], $options = [])
    {
        return $this->_simpleRequest('/xray.app.router.command.RoutingService/RemoveRule',
            $argument,
            ['\Xray\App\Router\Command\RemoveRuleResponse', 'decode'],
            $metadata, $options);
    }

}
