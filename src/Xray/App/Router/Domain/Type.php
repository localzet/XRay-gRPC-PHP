<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: app/router/config.proto

namespace Xray\App\Router\Domain;

use UnexpectedValueException;
use Xray\App\Router\Domain_Type;

/**
 * Type of domain value.
 *
 * Protobuf type <code>xray.app.router.Domain.Type</code>
 */
class Type
{
    /**
     * The value is used as is.
     *
     * Generated from protobuf enum <code>Plain = 0;</code>
     */
    const Plain = 0;
    /**
     * The value is used as a regular expression.
     *
     * Generated from protobuf enum <code>Regex = 1;</code>
     */
    const Regex = 1;
    /**
     * The value is a root domain.
     *
     * Generated from protobuf enum <code>Domain = 2;</code>
     */
    const Domain = 2;
    /**
     * The value is a domain.
     *
     * Generated from protobuf enum <code>Full = 3;</code>
     */
    const Full = 3;

    private static $valueToName = [
        self::Plain => 'Plain',
        self::Regex => 'Regex',
        self::Domain => 'Domain',
        self::Full => 'Full',
    ];

    public static function name($value)
    {
        if (!isset(self::$valueToName[$value])) {
            throw new UnexpectedValueException(sprintf(
                'Enum %s has no name defined for value %s', __CLASS__, $value));
        }
        return self::$valueToName[$value];
    }


    public static function value($name)
    {
        $const = __CLASS__ . '::' . strtoupper($name);
        if (!defined($const)) {
            throw new UnexpectedValueException(sprintf(
                'Enum %s has no value defined for name %s', __CLASS__, $name));
        }
        return constant($const);
    }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(Type::class, Domain_Type::class);

