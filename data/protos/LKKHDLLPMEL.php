<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# NO CHECKED-IN PROTOBUF GENCODE
# source: StarRail.proto

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>LKKHDLLPMEL</code>
 */
class LKKHDLLPMEL extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>uint32 OMBLHJDKEJA = 10;</code>
     */
    protected $OMBLHJDKEJA = 0;
    /**
     * Generated from protobuf field <code>repeated uint32 PJMAHBFKHLB = 6;</code>
     */
    private $PJMAHBFKHLB;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type int $OMBLHJDKEJA
     *     @type array<int>|\Google\Protobuf\Internal\RepeatedField $PJMAHBFKHLB
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\StarRail::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>uint32 OMBLHJDKEJA = 10;</code>
     * @return int
     */
    public function getOMBLHJDKEJA()
    {
        return $this->OMBLHJDKEJA;
    }

    /**
     * Generated from protobuf field <code>uint32 OMBLHJDKEJA = 10;</code>
     * @param int $var
     * @return $this
     */
    public function setOMBLHJDKEJA($var)
    {
        GPBUtil::checkUint32($var);
        $this->OMBLHJDKEJA = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>repeated uint32 PJMAHBFKHLB = 6;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getPJMAHBFKHLB()
    {
        return $this->PJMAHBFKHLB;
    }

    /**
     * Generated from protobuf field <code>repeated uint32 PJMAHBFKHLB = 6;</code>
     * @param array<int>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setPJMAHBFKHLB($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::UINT32);
        $this->PJMAHBFKHLB = $arr;

        return $this;
    }

}
