<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: transport/internet/tls/config.proto

namespace Xray\Transport\Internet\Tls;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>xray.transport.internet.tls.Config</code>
 */
class Config extends \Google\Protobuf\Internal\Message
{
    /**
     * Whether or not to allow self-signed certificates.
     *
     * Generated from protobuf field <code>bool allow_insecure = 1;</code>
     */
    protected $allow_insecure = false;
    /**
     * List of certificates to be served on server.
     *
     * Generated from protobuf field <code>repeated .xray.transport.internet.tls.Certificate certificate = 2;</code>
     */
    private $certificate;
    /**
     * Override server name.
     *
     * Generated from protobuf field <code>string server_name = 3;</code>
     */
    protected $server_name = '';
    /**
     * Lists of string as ALPN values.
     *
     * Generated from protobuf field <code>repeated string next_protocol = 4;</code>
     */
    private $next_protocol;
    /**
     * Whether or not to enable session (ticket) resumption.
     *
     * Generated from protobuf field <code>bool enable_session_resumption = 5;</code>
     */
    protected $enable_session_resumption = false;
    /**
     * If true, root certificates on the system will not be loaded for
     * verification.
     *
     * Generated from protobuf field <code>bool disable_system_root = 6;</code>
     */
    protected $disable_system_root = false;
    /**
     * The minimum TLS version.
     *
     * Generated from protobuf field <code>string min_version = 7;</code>
     */
    protected $min_version = '';
    /**
     * The maximum TLS version.
     *
     * Generated from protobuf field <code>string max_version = 8;</code>
     */
    protected $max_version = '';
    /**
     * Specify cipher suites, except for TLS 1.3.
     *
     * Generated from protobuf field <code>string cipher_suites = 9;</code>
     */
    protected $cipher_suites = '';
    /**
     * TLS Client Hello fingerprint (uTLS).
     *
     * Generated from protobuf field <code>string fingerprint = 11;</code>
     */
    protected $fingerprint = '';
    /**
     * Generated from protobuf field <code>bool reject_unknown_sni = 12;</code>
     */
    protected $reject_unknown_sni = false;
    /**
     * &#64;Document A pinned certificate chain sha256 hash.
     *&#64;Document If the server's hash does not match this value, the connection will be aborted.
     *&#64;Document This value replace allow_insecure.
     *&#64;Critical
     *
     * Generated from protobuf field <code>repeated bytes pinned_peer_certificate_chain_sha256 = 13;</code>
     */
    private $pinned_peer_certificate_chain_sha256;
    /**
     * &#64;Document A pinned certificate public key sha256 hash.
     *&#64;Document If the server's public key hash does not match this value, the connection will be aborted.
     *&#64;Document This value replace allow_insecure.
     *&#64;Critical
     *
     * Generated from protobuf field <code>repeated bytes pinned_peer_certificate_public_key_sha256 = 14;</code>
     */
    private $pinned_peer_certificate_public_key_sha256;
    /**
     * Generated from protobuf field <code>string master_key_log = 15;</code>
     */
    protected $master_key_log = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type bool $allow_insecure
     *           Whether or not to allow self-signed certificates.
     *     @type array<\Xray\Transport\Internet\Tls\Certificate>|\Google\Protobuf\Internal\RepeatedField $certificate
     *           List of certificates to be served on server.
     *     @type string $server_name
     *           Override server name.
     *     @type array<string>|\Google\Protobuf\Internal\RepeatedField $next_protocol
     *           Lists of string as ALPN values.
     *     @type bool $enable_session_resumption
     *           Whether or not to enable session (ticket) resumption.
     *     @type bool $disable_system_root
     *           If true, root certificates on the system will not be loaded for
     *           verification.
     *     @type string $min_version
     *           The minimum TLS version.
     *     @type string $max_version
     *           The maximum TLS version.
     *     @type string $cipher_suites
     *           Specify cipher suites, except for TLS 1.3.
     *     @type string $fingerprint
     *           TLS Client Hello fingerprint (uTLS).
     *     @type bool $reject_unknown_sni
     *     @type array<string>|\Google\Protobuf\Internal\RepeatedField $pinned_peer_certificate_chain_sha256
     *           &#64;Document A pinned certificate chain sha256 hash.
     *          &#64;Document If the server's hash does not match this value, the connection will be aborted.
     *          &#64;Document This value replace allow_insecure.
     *          &#64;Critical
     *     @type array<string>|\Google\Protobuf\Internal\RepeatedField $pinned_peer_certificate_public_key_sha256
     *           &#64;Document A pinned certificate public key sha256 hash.
     *          &#64;Document If the server's public key hash does not match this value, the connection will be aborted.
     *          &#64;Document This value replace allow_insecure.
     *          &#64;Critical
     *     @type string $master_key_log
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Transport\Internet\Tls\Config::initOnce();
        parent::__construct($data);
    }

    /**
     * Whether or not to allow self-signed certificates.
     *
     * Generated from protobuf field <code>bool allow_insecure = 1;</code>
     * @return bool
     */
    public function getAllowInsecure()
    {
        return $this->allow_insecure;
    }

    /**
     * Whether or not to allow self-signed certificates.
     *
     * Generated from protobuf field <code>bool allow_insecure = 1;</code>
     * @param bool $var
     * @return $this
     */
    public function setAllowInsecure($var)
    {
        GPBUtil::checkBool($var);
        $this->allow_insecure = $var;

        return $this;
    }

    /**
     * List of certificates to be served on server.
     *
     * Generated from protobuf field <code>repeated .xray.transport.internet.tls.Certificate certificate = 2;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getCertificate()
    {
        return $this->certificate;
    }

    /**
     * List of certificates to be served on server.
     *
     * Generated from protobuf field <code>repeated .xray.transport.internet.tls.Certificate certificate = 2;</code>
     * @param array<\Xray\Transport\Internet\Tls\Certificate>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setCertificate($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Xray\Transport\Internet\Tls\Certificate::class);
        $this->certificate = $arr;

        return $this;
    }

    /**
     * Override server name.
     *
     * Generated from protobuf field <code>string server_name = 3;</code>
     * @return string
     */
    public function getServerName()
    {
        return $this->server_name;
    }

    /**
     * Override server name.
     *
     * Generated from protobuf field <code>string server_name = 3;</code>
     * @param string $var
     * @return $this
     */
    public function setServerName($var)
    {
        GPBUtil::checkString($var, True);
        $this->server_name = $var;

        return $this;
    }

    /**
     * Lists of string as ALPN values.
     *
     * Generated from protobuf field <code>repeated string next_protocol = 4;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getNextProtocol()
    {
        return $this->next_protocol;
    }

    /**
     * Lists of string as ALPN values.
     *
     * Generated from protobuf field <code>repeated string next_protocol = 4;</code>
     * @param array<string>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setNextProtocol($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::STRING);
        $this->next_protocol = $arr;

        return $this;
    }

    /**
     * Whether or not to enable session (ticket) resumption.
     *
     * Generated from protobuf field <code>bool enable_session_resumption = 5;</code>
     * @return bool
     */
    public function getEnableSessionResumption()
    {
        return $this->enable_session_resumption;
    }

    /**
     * Whether or not to enable session (ticket) resumption.
     *
     * Generated from protobuf field <code>bool enable_session_resumption = 5;</code>
     * @param bool $var
     * @return $this
     */
    public function setEnableSessionResumption($var)
    {
        GPBUtil::checkBool($var);
        $this->enable_session_resumption = $var;

        return $this;
    }

    /**
     * If true, root certificates on the system will not be loaded for
     * verification.
     *
     * Generated from protobuf field <code>bool disable_system_root = 6;</code>
     * @return bool
     */
    public function getDisableSystemRoot()
    {
        return $this->disable_system_root;
    }

    /**
     * If true, root certificates on the system will not be loaded for
     * verification.
     *
     * Generated from protobuf field <code>bool disable_system_root = 6;</code>
     * @param bool $var
     * @return $this
     */
    public function setDisableSystemRoot($var)
    {
        GPBUtil::checkBool($var);
        $this->disable_system_root = $var;

        return $this;
    }

    /**
     * The minimum TLS version.
     *
     * Generated from protobuf field <code>string min_version = 7;</code>
     * @return string
     */
    public function getMinVersion()
    {
        return $this->min_version;
    }

    /**
     * The minimum TLS version.
     *
     * Generated from protobuf field <code>string min_version = 7;</code>
     * @param string $var
     * @return $this
     */
    public function setMinVersion($var)
    {
        GPBUtil::checkString($var, True);
        $this->min_version = $var;

        return $this;
    }

    /**
     * The maximum TLS version.
     *
     * Generated from protobuf field <code>string max_version = 8;</code>
     * @return string
     */
    public function getMaxVersion()
    {
        return $this->max_version;
    }

    /**
     * The maximum TLS version.
     *
     * Generated from protobuf field <code>string max_version = 8;</code>
     * @param string $var
     * @return $this
     */
    public function setMaxVersion($var)
    {
        GPBUtil::checkString($var, True);
        $this->max_version = $var;

        return $this;
    }

    /**
     * Specify cipher suites, except for TLS 1.3.
     *
     * Generated from protobuf field <code>string cipher_suites = 9;</code>
     * @return string
     */
    public function getCipherSuites()
    {
        return $this->cipher_suites;
    }

    /**
     * Specify cipher suites, except for TLS 1.3.
     *
     * Generated from protobuf field <code>string cipher_suites = 9;</code>
     * @param string $var
     * @return $this
     */
    public function setCipherSuites($var)
    {
        GPBUtil::checkString($var, True);
        $this->cipher_suites = $var;

        return $this;
    }

    /**
     * TLS Client Hello fingerprint (uTLS).
     *
     * Generated from protobuf field <code>string fingerprint = 11;</code>
     * @return string
     */
    public function getFingerprint()
    {
        return $this->fingerprint;
    }

    /**
     * TLS Client Hello fingerprint (uTLS).
     *
     * Generated from protobuf field <code>string fingerprint = 11;</code>
     * @param string $var
     * @return $this
     */
    public function setFingerprint($var)
    {
        GPBUtil::checkString($var, True);
        $this->fingerprint = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>bool reject_unknown_sni = 12;</code>
     * @return bool
     */
    public function getRejectUnknownSni()
    {
        return $this->reject_unknown_sni;
    }

    /**
     * Generated from protobuf field <code>bool reject_unknown_sni = 12;</code>
     * @param bool $var
     * @return $this
     */
    public function setRejectUnknownSni($var)
    {
        GPBUtil::checkBool($var);
        $this->reject_unknown_sni = $var;

        return $this;
    }

    /**
     * &#64;Document A pinned certificate chain sha256 hash.
     *&#64;Document If the server's hash does not match this value, the connection will be aborted.
     *&#64;Document This value replace allow_insecure.
     *&#64;Critical
     *
     * Generated from protobuf field <code>repeated bytes pinned_peer_certificate_chain_sha256 = 13;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getPinnedPeerCertificateChainSha256()
    {
        return $this->pinned_peer_certificate_chain_sha256;
    }

    /**
     * &#64;Document A pinned certificate chain sha256 hash.
     *&#64;Document If the server's hash does not match this value, the connection will be aborted.
     *&#64;Document This value replace allow_insecure.
     *&#64;Critical
     *
     * Generated from protobuf field <code>repeated bytes pinned_peer_certificate_chain_sha256 = 13;</code>
     * @param array<string>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setPinnedPeerCertificateChainSha256($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::BYTES);
        $this->pinned_peer_certificate_chain_sha256 = $arr;

        return $this;
    }

    /**
     * &#64;Document A pinned certificate public key sha256 hash.
     *&#64;Document If the server's public key hash does not match this value, the connection will be aborted.
     *&#64;Document This value replace allow_insecure.
     *&#64;Critical
     *
     * Generated from protobuf field <code>repeated bytes pinned_peer_certificate_public_key_sha256 = 14;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getPinnedPeerCertificatePublicKeySha256()
    {
        return $this->pinned_peer_certificate_public_key_sha256;
    }

    /**
     * &#64;Document A pinned certificate public key sha256 hash.
     *&#64;Document If the server's public key hash does not match this value, the connection will be aborted.
     *&#64;Document This value replace allow_insecure.
     *&#64;Critical
     *
     * Generated from protobuf field <code>repeated bytes pinned_peer_certificate_public_key_sha256 = 14;</code>
     * @param array<string>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setPinnedPeerCertificatePublicKeySha256($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::BYTES);
        $this->pinned_peer_certificate_public_key_sha256 = $arr;

        return $this;
    }

    /**
     * Generated from protobuf field <code>string master_key_log = 15;</code>
     * @return string
     */
    public function getMasterKeyLog()
    {
        return $this->master_key_log;
    }

    /**
     * Generated from protobuf field <code>string master_key_log = 15;</code>
     * @param string $var
     * @return $this
     */
    public function setMasterKeyLog($var)
    {
        GPBUtil::checkString($var, True);
        $this->master_key_log = $var;

        return $this;
    }

}

