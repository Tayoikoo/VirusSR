<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# NO CHECKED-IN PROTOBUF GENCODE
# source: StarRail.proto

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>BMIEADMKCKL</code>
 */
class BMIEADMKCKL extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>uint32 exp = 7;</code>
     */
    protected $exp = 0;
    /**
     * Generated from protobuf field <code>repeated uint32 NOGFLOBEFAC = 9;</code>
     */
    private $NOGFLOBEFAC;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type int $exp
     *     @type array<int>|\Google\Protobuf\Internal\RepeatedField $NOGFLOBEFAC
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\StarRail::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>uint32 exp = 7;</code>
     * @return int
     */
    public function getExp()
    {
        return $this->exp;
    }

    /**
     * Generated from protobuf field <code>uint32 exp = 7;</code>
     * @param int $var
     * @return $this
     */
    public function setExp($var)
    {
        GPBUtil::checkUint32($var);
        $this->exp = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>repeated uint32 NOGFLOBEFAC = 9;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getNOGFLOBEFAC()
    {
        return $this->NOGFLOBEFAC;
    }

    /**
     * Generated from protobuf field <code>repeated uint32 NOGFLOBEFAC = 9;</code>
     * @param array<int>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setNOGFLOBEFAC($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::UINT32);
        $this->NOGFLOBEFAC = $arr;

        return $this;
    }

}

