<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# NO CHECKED-IN PROTOBUF GENCODE
# source: StarRail.proto

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * NKALKGJHDIH (7430)
 *
 * Generated from protobuf message <code>MatchThreeLevelEndCsReq</code>
 */
class MatchThreeLevelEndCsReq extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>map<uint32, uint32> mcdcmlccabi = 7;</code>
     */
    private $mcdcmlccabi;
    /**
     * Generated from protobuf field <code>uint32 egjbcbeiiii = 2;</code>
     */
    protected $egjbcbeiiii = 0;
    /**
     * Generated from protobuf field <code>uint32 level_id = 6;</code>
     */
    protected $level_id = 0;
    /**
     * Generated from protobuf field <code>repeated uint32 ijmdphlongg = 9;</code>
     */
    private $ijmdphlongg;
    /**
     * Generated from protobuf field <code>string dnmmbglnjei = 1;</code>
     */
    protected $dnmmbglnjei = '';
    /**
     * Generated from protobuf field <code>uint32 cjelhngokdc = 8;</code>
     */
    protected $cjelhngokdc = 0;
    /**
     * Generated from protobuf field <code>uint32 hkihpndbeom = 15;</code>
     */
    protected $hkihpndbeom = 0;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type array|\Google\Protobuf\Internal\MapField $mcdcmlccabi
     *     @type int $egjbcbeiiii
     *     @type int $level_id
     *     @type array<int>|\Google\Protobuf\Internal\RepeatedField $ijmdphlongg
     *     @type string $dnmmbglnjei
     *     @type int $cjelhngokdc
     *     @type int $hkihpndbeom
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\StarRail::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>map<uint32, uint32> mcdcmlccabi = 7;</code>
     * @return \Google\Protobuf\Internal\MapField
     */
    public function getMcdcmlccabi()
    {
        return $this->mcdcmlccabi;
    }

    /**
     * Generated from protobuf field <code>map<uint32, uint32> mcdcmlccabi = 7;</code>
     * @param array|\Google\Protobuf\Internal\MapField $var
     * @return $this
     */
    public function setMcdcmlccabi($var)
    {
        $arr = GPBUtil::checkMapField($var, \Google\Protobuf\Internal\GPBType::UINT32, \Google\Protobuf\Internal\GPBType::UINT32);
        $this->mcdcmlccabi = $arr;

        return $this;
    }

    /**
     * Generated from protobuf field <code>uint32 egjbcbeiiii = 2;</code>
     * @return int
     */
    public function getEgjbcbeiiii()
    {
        return $this->egjbcbeiiii;
    }

    /**
     * Generated from protobuf field <code>uint32 egjbcbeiiii = 2;</code>
     * @param int $var
     * @return $this
     */
    public function setEgjbcbeiiii($var)
    {
        GPBUtil::checkUint32($var);
        $this->egjbcbeiiii = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>uint32 level_id = 6;</code>
     * @return int
     */
    public function getLevelId()
    {
        return $this->level_id;
    }

    /**
     * Generated from protobuf field <code>uint32 level_id = 6;</code>
     * @param int $var
     * @return $this
     */
    public function setLevelId($var)
    {
        GPBUtil::checkUint32($var);
        $this->level_id = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>repeated uint32 ijmdphlongg = 9;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getIjmdphlongg()
    {
        return $this->ijmdphlongg;
    }

    /**
     * Generated from protobuf field <code>repeated uint32 ijmdphlongg = 9;</code>
     * @param array<int>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setIjmdphlongg($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::UINT32);
        $this->ijmdphlongg = $arr;

        return $this;
    }

    /**
     * Generated from protobuf field <code>string dnmmbglnjei = 1;</code>
     * @return string
     */
    public function getDnmmbglnjei()
    {
        return $this->dnmmbglnjei;
    }

    /**
     * Generated from protobuf field <code>string dnmmbglnjei = 1;</code>
     * @param string $var
     * @return $this
     */
    public function setDnmmbglnjei($var)
    {
        GPBUtil::checkString($var, True);
        $this->dnmmbglnjei = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>uint32 cjelhngokdc = 8;</code>
     * @return int
     */
    public function getCjelhngokdc()
    {
        return $this->cjelhngokdc;
    }

    /**
     * Generated from protobuf field <code>uint32 cjelhngokdc = 8;</code>
     * @param int $var
     * @return $this
     */
    public function setCjelhngokdc($var)
    {
        GPBUtil::checkUint32($var);
        $this->cjelhngokdc = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>uint32 hkihpndbeom = 15;</code>
     * @return int
     */
    public function getHkihpndbeom()
    {
        return $this->hkihpndbeom;
    }

    /**
     * Generated from protobuf field <code>uint32 hkihpndbeom = 15;</code>
     * @param int $var
     * @return $this
     */
    public function setHkihpndbeom($var)
    {
        GPBUtil::checkUint32($var);
        $this->hkihpndbeom = $var;

        return $this;
    }

}
