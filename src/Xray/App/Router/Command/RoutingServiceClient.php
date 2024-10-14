<?php
// GENERATED CODE -- DO NOT EDIT!

namespace Xray\App\Router\Command;

/**
 */
class RoutingServiceClient extends \Grpc\BaseStub {

    /**
     * @param string $hostname hostname
     * @param array $opts channel options
     * @param \Grpc\Channel $channel (optional) re-use channel object
     */
    public function __construct($hostname, $opts, $channel = null) {
        parent::__construct($hostname, $opts, $channel);
    }

    /**
     * @param \Xray\App\Router\Command\SubscribeRoutingStatsRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\ServerStreamingCall
     */
    public function SubscribeRoutingStats(\Xray\App\Router\Command\SubscribeRoutingStatsRequest $argument,
      $metadata = [], $options = []) {
        return $this->_serverStreamRequest('/xray.app.router.command.RoutingService/SubscribeRoutingStats',
        $argument,
        ['\Xray\App\Router\Command\RoutingContext', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Xray\App\Router\Command\TestRouteRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function TestRoute(\Xray\App\Router\Command\TestRouteRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/xray.app.router.command.RoutingService/TestRoute',
        $argument,
        ['\Xray\App\Router\Command\RoutingContext', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Xray\App\Router\Command\GetBalancerInfoRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function GetBalancerInfo(\Xray\App\Router\Command\GetBalancerInfoRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/xray.app.router.command.RoutingService/GetBalancerInfo',
        $argument,
        ['\Xray\App\Router\Command\GetBalancerInfoResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Xray\App\Router\Command\OverrideBalancerTargetRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function OverrideBalancerTarget(\Xray\App\Router\Command\OverrideBalancerTargetRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/xray.app.router.command.RoutingService/OverrideBalancerTarget',
        $argument,
        ['\Xray\App\Router\Command\OverrideBalancerTargetResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Xray\App\Router\Command\AddRuleRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function AddRule(\Xray\App\Router\Command\AddRuleRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/xray.app.router.command.RoutingService/AddRule',
        $argument,
        ['\Xray\App\Router\Command\AddRuleResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Xray\App\Router\Command\RemoveRuleRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function RemoveRule(\Xray\App\Router\Command\RemoveRuleRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/xray.app.router.command.RoutingService/RemoveRule',
        $argument,
        ['\Xray\App\Router\Command\RemoveRuleResponse', 'decode'],
        $metadata, $options);
    }

}
