<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# NO CHECKED-IN PROTOBUF GENCODE
# source: StarRail.proto

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * FABPAKCICBF (4595)
 *
 * Generated from protobuf message <code>PlayerReturnSignCsReq</code>
 */
class PlayerReturnSignCsReq extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>uint32 ikeoohngmon = 15;</code>
     */
    protected $ikeoohngmon = 0;
    /**
     * Generated from protobuf field <code>repeated uint32 eldncdbbema = 4;</code>
     */
    private $eldncdbbema;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type int $ikeoohngmon
     *     @type array<int>|\Google\Protobuf\Internal\RepeatedField $eldncdbbema
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\StarRail::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>uint32 ikeoohngmon = 15;</code>
     * @return int
     */
    public function getIkeoohngmon()
    {
        return $this->ikeoohngmon;
    }

    /**
     * Generated from protobuf field <code>uint32 ikeoohngmon = 15;</code>
     * @param int $var
     * @return $this
     */
    public function setIkeoohngmon($var)
    {
        GPBUtil::checkUint32($var);
        $this->ikeoohngmon = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>repeated uint32 eldncdbbema = 4;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getEldncdbbema()
    {
        return $this->eldncdbbema;
    }

    /**
     * Generated from protobuf field <code>repeated uint32 eldncdbbema = 4;</code>
     * @param array<int>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setEldncdbbema($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::UINT32);
        $this->eldncdbbema = $arr;

        return $this;
    }

}

