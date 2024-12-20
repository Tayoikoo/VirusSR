<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# NO CHECKED-IN PROTOBUF GENCODE
# source: StarRail.proto

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * GDDCHKCJDMB (6852)
 *
 * Generated from protobuf message <code>RotateMapCsReq</code>
 */
class RotateMapCsReq extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>.PJNIEDFALHN fpgmdipjkdj = 13;</code>
     */
    protected $fpgmdipjkdj = null;
    /**
     * Generated from protobuf field <code>uint32 group_id = 8;</code>
     */
    protected $group_id = 0;
    /**
     * Generated from protobuf field <code>uint32 feofolnnldg = 4;</code>
     */
    protected $feofolnnldg = 0;
    /**
     * Generated from protobuf field <code>.MotionInfo motion = 15;</code>
     */
    protected $motion = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \PJNIEDFALHN $fpgmdipjkdj
     *     @type int $group_id
     *     @type int $feofolnnldg
     *     @type \MotionInfo $motion
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\StarRail::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>.PJNIEDFALHN fpgmdipjkdj = 13;</code>
     * @return \PJNIEDFALHN|null
     */
    public function getFpgmdipjkdj()
    {
        return $this->fpgmdipjkdj;
    }

    public function hasFpgmdipjkdj()
    {
        return isset($this->fpgmdipjkdj);
    }

    public function clearFpgmdipjkdj()
    {
        unset($this->fpgmdipjkdj);
    }

    /**
     * Generated from protobuf field <code>.PJNIEDFALHN fpgmdipjkdj = 13;</code>
     * @param \PJNIEDFALHN $var
     * @return $this
     */
    public function setFpgmdipjkdj($var)
    {
        GPBUtil::checkMessage($var, \PJNIEDFALHN::class);
        $this->fpgmdipjkdj = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>uint32 group_id = 8;</code>
     * @return int
     */
    public function getGroupId()
    {
        return $this->group_id;
    }

    /**
     * Generated from protobuf field <code>uint32 group_id = 8;</code>
     * @param int $var
     * @return $this
     */
    public function setGroupId($var)
    {
        GPBUtil::checkUint32($var);
        $this->group_id = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>uint32 feofolnnldg = 4;</code>
     * @return int
     */
    public function getFeofolnnldg()
    {
        return $this->feofolnnldg;
    }

    /**
     * Generated from protobuf field <code>uint32 feofolnnldg = 4;</code>
     * @param int $var
     * @return $this
     */
    public function setFeofolnnldg($var)
    {
        GPBUtil::checkUint32($var);
        $this->feofolnnldg = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>.MotionInfo motion = 15;</code>
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
     * Generated from protobuf field <code>.MotionInfo motion = 15;</code>
     * @param \MotionInfo $var
     * @return $this
     */
    public function setMotion($var)
    {
        GPBUtil::checkMessage($var, \MotionInfo::class);
        $this->motion = $var;

        return $this;
    }

}

