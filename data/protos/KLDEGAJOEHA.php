<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# NO CHECKED-IN PROTOBUF GENCODE
# source: StarRail.proto

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>KLDEGAJOEHA</code>
 */
class KLDEGAJOEHA extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>repeated uint32 lehpfjfghnn = 15;</code>
     */
    private $lehpfjfghnn;
    /**
     * Generated from protobuf field <code>uint32 exp = 6;</code>
     */
    protected $exp = 0;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type array<int>|\Google\Protobuf\Internal\RepeatedField $lehpfjfghnn
     *     @type int $exp
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\StarRail::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>repeated uint32 lehpfjfghnn = 15;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getLehpfjfghnn()
    {
        return $this->lehpfjfghnn;
    }

    /**
     * Generated from protobuf field <code>repeated uint32 lehpfjfghnn = 15;</code>
     * @param array<int>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setLehpfjfghnn($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::UINT32);
        $this->lehpfjfghnn = $arr;

        return $this;
    }

    /**
     * Generated from protobuf field <code>uint32 exp = 6;</code>
     * @return int
     */
    public function getExp()
    {
        return $this->exp;
    }

    /**
     * Generated from protobuf field <code>uint32 exp = 6;</code>
     * @param int $var
     * @return $this
     */
    public function setExp($var)
    {
        GPBUtil::checkUint32($var);
        $this->exp = $var;

        return $this;
    }

}

