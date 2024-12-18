<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: proxy/freedom/config.proto

namespace Xray\Proxy\Freedom;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>xray.proxy.freedom.Noise</code>
 */
class Noise extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>uint64 length_min = 1;</code>
     */
    protected $length_min = 0;
    /**
     * Generated from protobuf field <code>uint64 length_max = 2;</code>
     */
    protected $length_max = 0;
    /**
     * Generated from protobuf field <code>uint64 delay_min = 3;</code>
     */
    protected $delay_min = 0;
    /**
     * Generated from protobuf field <code>uint64 delay_max = 4;</code>
     */
    protected $delay_max = 0;
    /**
     * Generated from protobuf field <code>bytes str_noise = 5;</code>
     */
    protected $str_noise = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type int|string $length_min
     *     @type int|string $length_max
     *     @type int|string $delay_min
     *     @type int|string $delay_max
     *     @type string $str_noise
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Proxy\Freedom\Config::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>uint64 length_min = 1;</code>
     * @return int|string
     */
    public function getLengthMin()
    {
        return $this->length_min;
    }

    /**
     * Generated from protobuf field <code>uint64 length_min = 1;</code>
     * @param int|string $var
     * @return $this
     */
    public function setLengthMin($var)
    {
        GPBUtil::checkUint64($var);
        $this->length_min = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>uint64 length_max = 2;</code>
     * @return int|string
     */
    public function getLengthMax()
    {
        return $this->length_max;
    }

    /**
     * Generated from protobuf field <code>uint64 length_max = 2;</code>
     * @param int|string $var
     * @return $this
     */
    public function setLengthMax($var)
    {
        GPBUtil::checkUint64($var);
        $this->length_max = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>uint64 delay_min = 3;</code>
     * @return int|string
     */
    public function getDelayMin()
    {
        return $this->delay_min;
    }

    /**
     * Generated from protobuf field <code>uint64 delay_min = 3;</code>
     * @param int|string $var
     * @return $this
     */
    public function setDelayMin($var)
    {
        GPBUtil::checkUint64($var);
        $this->delay_min = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>uint64 delay_max = 4;</code>
     * @return int|string
     */
    public function getDelayMax()
    {
        return $this->delay_max;
    }

    /**
     * Generated from protobuf field <code>uint64 delay_max = 4;</code>
     * @param int|string $var
     * @return $this
     */
    public function setDelayMax($var)
    {
        GPBUtil::checkUint64($var);
        $this->delay_max = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>bytes str_noise = 5;</code>
     * @return string
     */
    public function getStrNoise()
    {
        return $this->str_noise;
    }

    /**
     * Generated from protobuf field <code>bytes str_noise = 5;</code>
     * @param string $var
     * @return $this
     */
    public function setStrNoise($var)
    {
        GPBUtil::checkString($var, False);
        $this->str_noise = $var;

        return $this;
    }

}

