<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# NO CHECKED-IN PROTOBUF GENCODE
# source: StarRail.proto

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>HJLGIDLKJNB</code>
 */
class HJLGIDLKJNB extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>uint32 aennjbmdino = 3;</code>
     */
    protected $aennjbmdino = 0;
    /**
     * Generated from protobuf field <code>bool is_finish = 9;</code>
     */
    protected $is_finish = false;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type int $aennjbmdino
     *     @type bool $is_finish
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\StarRail::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>uint32 aennjbmdino = 3;</code>
     * @return int
     */
    public function getAennjbmdino()
    {
        return $this->aennjbmdino;
    }

    /**
     * Generated from protobuf field <code>uint32 aennjbmdino = 3;</code>
     * @param int $var
     * @return $this
     */
    public function setAennjbmdino($var)
    {
        GPBUtil::checkUint32($var);
        $this->aennjbmdino = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>bool is_finish = 9;</code>
     * @return bool
     */
    public function getIsFinish()
    {
        return $this->is_finish;
    }

    /**
     * Generated from protobuf field <code>bool is_finish = 9;</code>
     * @param bool $var
     * @return $this
     */
    public function setIsFinish($var)
    {
        GPBUtil::checkBool($var);
        $this->is_finish = $var;

        return $this;
    }

}

