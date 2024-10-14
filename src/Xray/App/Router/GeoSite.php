<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: app/router/config.proto

namespace Xray\App\Router;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>xray.app.router.GeoSite</code>
 */
class GeoSite extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>string country_code = 1;</code>
     */
    protected $country_code = '';
    /**
     * Generated from protobuf field <code>repeated .xray.app.router.Domain domain = 2;</code>
     */
    private $domain;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $country_code
     *     @type array<\Xray\App\Router\Domain>|\Google\Protobuf\Internal\RepeatedField $domain
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\App\Router\Config::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>string country_code = 1;</code>
     * @return string
     */
    public function getCountryCode()
    {
        return $this->country_code;
    }

    /**
     * Generated from protobuf field <code>string country_code = 1;</code>
     * @param string $var
     * @return $this
     */
    public function setCountryCode($var)
    {
        GPBUtil::checkString($var, True);
        $this->country_code = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>repeated .xray.app.router.Domain domain = 2;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getDomain()
    {
        return $this->domain;
    }

    /**
     * Generated from protobuf field <code>repeated .xray.app.router.Domain domain = 2;</code>
     * @param array<\Xray\App\Router\Domain>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setDomain($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Xray\App\Router\Domain::class);
        $this->domain = $arr;

        return $this;
    }

}

