<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: proto/Greeter.proto

namespace Greeter;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>greeter.SayRepeatedRequest</code>
 */
class SayRepeatedRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>string key = 1;</code>
     */
    private $key = '';
    /**
     * Generated from protobuf field <code>repeated .greeter.Values values = 2;</code>
     */
    private $values;

    public function __construct() {
        \GPBMetadata\Proto\Greeter::initOnce();
        parent::__construct();
    }

    /**
     * Generated from protobuf field <code>string key = 1;</code>
     * @return string
     */
    public function getKey()
    {
        return $this->key;
    }

    /**
     * Generated from protobuf field <code>string key = 1;</code>
     * @param string $var
     * @return $this
     */
    public function setKey($var)
    {
        GPBUtil::checkString($var, True);
        $this->key = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>repeated .greeter.Values values = 2;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getValues()
    {
        return $this->values;
    }

    /**
     * Generated from protobuf field <code>repeated .greeter.Values values = 2;</code>
     * @param \Greeter\Values[]|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setValues($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Greeter\Values::class);
        $this->values = $arr;

        return $this;
    }

}

