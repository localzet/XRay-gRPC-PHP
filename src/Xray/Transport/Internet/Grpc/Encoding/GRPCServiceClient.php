<?php
// GENERATED CODE -- DO NOT EDIT!

namespace Xray\Transport\Internet\Grpc\Encoding;

use Grpc\BaseStub;
use Grpc\BidiStreamingCall;
use Grpc\Channel;

/**
 */
class GRPCServiceClient extends BaseStub
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
     * @param array $metadata metadata
     * @param array $options call options
     * @return BidiStreamingCall
     */
    public function Tun($metadata = [], $options = [])
    {
        return $this->_bidiRequest('/xray.transport.internet.grpc.encoding.GRPCService/Tun',
            ['\Xray\Transport\Internet\Grpc\Encoding\Hunk', 'decode'],
            $metadata, $options);
    }

    /**
     * @param array $metadata metadata
     * @param array $options call options
     * @return BidiStreamingCall
     */
    public function TunMulti($metadata = [], $options = [])
    {
        return $this->_bidiRequest('/xray.transport.internet.grpc.encoding.GRPCService/TunMulti',
            ['\Xray\Transport\Internet\Grpc\Encoding\MultiHunk', 'decode'],
            $metadata, $options);
    }

}
