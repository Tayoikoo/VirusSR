<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# NO CHECKED-IN PROTOBUF GENCODE
# source: StarRail.proto

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>JAKJIDDBFDO</code>
 */
class JAKJIDDBFDO extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>repeated .Vector ehopedafjmm = 10;</code>
     */
    private $ehopedafjmm;
    /**
     * Generated from protobuf field <code>bool ooibegpcfbm = 1;</code>
     */
    protected $ooibegpcfbm = false;
    /**
     * Generated from protobuf field <code>.MotionInfo motion = 2;</code>
     */
    protected $motion = null;
    /**
     * Generated from protobuf field <code>uint32 ifmaeikdhie = 15;</code>
     */
    protected $ifmaeikdhie = 0;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type array<\Vector>|\Google\Protobuf\Internal\RepeatedField $ehopedafjmm
     *     @type bool $ooibegpcfbm
     *     @type \MotionInfo $motion
     *     @type int $ifmaeikdhie
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\StarRail::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>repeated .Vector ehopedafjmm = 10;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getEhopedafjmm()
    {
        return $this->ehopedafjmm;
    }

    /**
     * Generated from protobuf field <code>repeated .Vector ehopedafjmm = 10;</code>
     * @param array<\Vector>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setEhopedafjmm($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Vector::class);
        $this->ehopedafjmm = $arr;

        return $this;
    }

    /**
     * Generated from protobuf field <code>bool ooibegpcfbm = 1;</code>
     * @return bool
     */
    public function getOoibegpcfbm()
    {
        return $this->ooibegpcfbm;
    }

    /**
     * Generated from protobuf field <code>bool ooibegpcfbm = 1;</code>
     * @param bool $var
     * @return $this
     */
    public function setOoibegpcfbm($var)
    {
        GPBUtil::checkBool($var);
        $this->ooibegpcfbm = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>.MotionInfo motion = 2;</code>
     * @return \MotionInfo|null
     */
    public function getMotion()
    {
        return $this->motion;
    }

    public function hasMotion()
    {
        return isset($this->motion);
    }

    public function clearMotion()
    {
        unset($this->motion);
    }

    /**
     * Generated from protobuf field <code>.MotionInfo motion = 2;</code>
     * @param \MotionInfo $var
     * @return $this
     */
    public function setMotion($var)
    {
        GPBUtil::checkMessage($var, \MotionInfo::class);
        $this->motion = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>uint32 ifmaeikdhie = 15;</code>
     * @return int
     */
    public function getIfmaeikdhie()
    {
        return $this->ifmaeikdhie;
    }

    /**
     * Generated from protobuf field <code>uint32 ifmaeikdhie = 15;</code>
     * @param int $var
     * @return $this
     */
    public function setIfmaeikdhie($var)
    {
        GPBUtil::checkUint32($var);
        $this->ifmaeikdhie = $var;

        return $this;
    }

}

