<?php
// GENERATED CODE -- DO NOT EDIT!

namespace Xray\App\Stats\Command;

/**
 */
class StatsServiceClient extends \Grpc\BaseStub {

    /**
     * @param string $hostname hostname
     * @param array $opts channel options
     * @param \Grpc\Channel $channel (optional) re-use channel object
     */
    public function __construct($hostname, $opts, $channel = null) {
        parent::__construct($hostname, $opts, $channel);
    }

    /**
     * @param \Xray\App\Stats\Command\GetStatsRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function GetStats(\Xray\App\Stats\Command\GetStatsRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/xray.app.stats.command.StatsService/GetStats',
        $argument,
        ['\Xray\App\Stats\Command\GetStatsResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Xray\App\Stats\Command\QueryStatsRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function QueryStats(\Xray\App\Stats\Command\QueryStatsRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/xray.app.stats.command.StatsService/QueryStats',
        $argument,
        ['\Xray\App\Stats\Command\QueryStatsResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Xray\App\Stats\Command\SysStatsRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function GetSysStats(\Xray\App\Stats\Command\SysStatsRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/xray.app.stats.command.StatsService/GetSysStats',
        $argument,
        ['\Xray\App\Stats\Command\SysStatsResponse', 'decode'],
        $metadata, $options);
    }

}
