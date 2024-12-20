<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# NO CHECKED-IN PROTOBUF GENCODE
# source: StarRail.proto

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>PHCBNLNIFMI</code>
 */
class PHCBNLNIFMI extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>uint32 id = 1;</code>
     */
    protected $id = 0;
    /**
     * Generated from protobuf field <code>uint32 index = 2;</code>
     */
    protected $index = 0;
    /**
     * Generated from protobuf field <code>uint32 promotion = 3;</code>
     */
    protected $promotion = 0;
    /**
     * Generated from protobuf field <code>repeated uint32 GHEMJLAKLOK = 4;</code>
     */
    private $GHEMJLAKLOK;
    /**
     * Generated from protobuf field <code>.AetherdivideSpiritLineupType NHKNNMPBGOJ = 5;</code>
     */
    protected $NHKNNMPBGOJ = 0;
    /**
     * Generated from protobuf field <code>.AmountInfo sp = 6;</code>
     */
    protected $sp = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type int $id
     *     @type int $index
     *     @type int $promotion
     *     @type array<int>|\Google\Protobuf\Internal\RepeatedField $GHEMJLAKLOK
     *     @type int $NHKNNMPBGOJ
     *     @type \AmountInfo $sp
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\StarRail::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>uint32 id = 1;</code>
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Generated from protobuf field <code>uint32 id = 1;</code>
     * @param int $var
     * @return $this
     */
    public function setId($var)
    {
        GPBUtil::checkUint32($var);
        $this->id = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>uint32 index = 2;</code>
     * @return int
     */
    public function getIndex()
    {
        return $this->index;
    }

    /**
     * Generated from protobuf field <code>uint32 index = 2;</code>
     * @param int $var
     * @return $this
     */
    public function setIndex($var)
    {
        GPBUtil::checkUint32($var);
        $this->index = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>uint32 promotion = 3;</code>
     * @return int
     */
    public function getPromotion()
    {
        return $this->promotion;
    }

    /**
     * Generated from protobuf field <code>uint32 promotion = 3;</code>
     * @param int $var
     * @return $this
     */
    public function setPromotion($var)
    {
        GPBUtil::checkUint32($var);
        $this->promotion = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>repeated uint32 GHEMJLAKLOK = 4;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getGHEMJLAKLOK()
    {
        return $this->GHEMJLAKLOK;
    }

    /**
     * Generated from protobuf field <code>repeated uint32 GHEMJLAKLOK = 4;</code>
     * @param array<int>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setGHEMJLAKLOK($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::UINT32);
        $this->GHEMJLAKLOK = $arr;

        return $this;
    }

    /**
     * Generated from protobuf field <code>.AetherdivideSpiritLineupType NHKNNMPBGOJ = 5;</code>
     * @return int
     */
    public function getNHKNNMPBGOJ()
    {
        return $this->NHKNNMPBGOJ;
    }

    /**
     * Generated from protobuf field <code>.AetherdivideSpiritLineupType NHKNNMPBGOJ = 5;</code>
     * @param int $var
     * @return $this
     */
    public function setNHKNNMPBGOJ($var)
    {
        GPBUtil::checkEnum($var, \AetherdivideSpiritLineupType::class);
        $this->NHKNNMPBGOJ = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>.AmountInfo sp = 6;</code>
     * @return \AmountInfo|null
     */
    public function getSp()
    {
        return $this->sp;
    }

    public function hasSp()
    {
        return isset($this->sp);
    }

    public function clearSp()
    {
        unset($this->sp);
    }

    /**
     * Generated from protobuf field <code>.AmountInfo sp = 6;</code>
     * @param \AmountInfo $var
     * @return $this
     */
    public function setSp($var)
    {
        GPBUtil::checkMessage($var, \AmountInfo::class);
        $this->sp = $var;

        return $this;
    }

}
