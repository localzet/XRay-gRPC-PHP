<?php
// GENERATED CODE -- DO NOT EDIT!

namespace Xray\App\Stats\Command;

use Grpc\BaseStub;
use Grpc\Channel;
use Grpc\UnaryCall;

/**
 */
class StatsServiceClient extends BaseStub
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
     * @param GetStatsRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return UnaryCall
     */
    public function GetStats(GetStatsRequest $argument,
                                             $metadata = [], $options = [])
    {
        return $this->_simpleRequest('/xray.app.stats.command.StatsService/GetStats',
            $argument,
            ['\Xray\App\Stats\Command\GetStatsResponse', 'decode'],
            $metadata, $options);
    }

    /**
     * @param QueryStatsRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return UnaryCall
     */
    public function QueryStats(QueryStatsRequest $argument,
                                                 $metadata = [], $options = [])
    {
        return $this->_simpleRequest('/xray.app.stats.command.StatsService/QueryStats',
            $argument,
            ['\Xray\App\Stats\Command\QueryStatsResponse', 'decode'],
            $metadata, $options);
    }

    /**
     * @param SysStatsRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return UnaryCall
     */
    public function GetSysStats(SysStatsRequest $argument,
                                                $metadata = [], $options = [])
    {
        return $this->_simpleRequest('/xray.app.stats.command.StatsService/GetSysStats',
            $argument,
            ['\Xray\App\Stats\Command\SysStatsResponse', 'decode'],
            $metadata, $options);
    }

}
