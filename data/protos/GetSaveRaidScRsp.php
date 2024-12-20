<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# NO CHECKED-IN PROTOBUF GENCODE
# source: StarRail.proto

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * GMFLKHHFIIO (2205)
 *
 * Generated from protobuf message <code>GetSaveRaidScRsp</code>
 */
class GetSaveRaidScRsp extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>repeated .BCPDMEMPLBM cjjaedialng = 7;</code>
     */
    private $cjjaedialng;
    /**
     * Generated from protobuf field <code>uint32 retcode = 11;</code>
     */
    protected $retcode = 0;
    /**
     * Generated from protobuf field <code>bool is_save = 3;</code>
     */
    protected $is_save = false;
    /**
     * Generated from protobuf field <code>uint32 nbljpgfhdfi = 10;</code>
     */
    protected $nbljpgfhdfi = 0;
    /**
     * Generated from protobuf field <code>uint32 world_level = 6;</code>
     */
    protected $world_level = 0;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type array<\BCPDMEMPLBM>|\Google\Protobuf\Internal\RepeatedField $cjjaedialng
     *     @type int $retcode
     *     @type bool $is_save
     *     @type int $nbljpgfhdfi
     *     @type int $world_level
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\StarRail::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>repeated .BCPDMEMPLBM cjjaedialng = 7;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getCjjaedialng()
    {
        return $this->cjjaedialng;
    }

    /**
     * Generated from protobuf field <code>repeated .BCPDMEMPLBM cjjaedialng = 7;</code>
     * @param array<\BCPDMEMPLBM>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setCjjaedialng($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \BCPDMEMPLBM::class);
        $this->cjjaedialng = $arr;

        return $this;
    }

    /**
     * Generated from protobuf field <code>uint32 retcode = 11;</code>
     * @return int
     */
    public function getRetcode()
    {
        return $this->retcode;
    }

    /**
     * Generated from protobuf field <code>uint32 retcode = 11;</code>
     * @param int $var
     * @return $this
     */
    public function setRetcode($var)
    {
        GPBUtil::checkUint32($var);
        $this->retcode = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>bool is_save = 3;</code>
     * @return bool
     */
    public function getIsSave()
    {
        return $this->is_save;
    }

    /**
     * Generated from protobuf field <code>bool is_save = 3;</code>
     * @param bool $var
     * @return $this
     */
    public function setIsSave($var)
    {
        GPBUtil::checkBool($var);
        $this->is_save = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>uint32 nbljpgfhdfi = 10;</code>
     * @return int
     */
    public function getNbljpgfhdfi()
    {
        return $this->nbljpgfhdfi;
    }

    /**
     * Generated from protobuf field <code>uint32 nbljpgfhdfi = 10;</code>
     * @param int $var
     * @return $this
     */
    public function setNbljpgfhdfi($var)
    {
        GPBUtil::checkUint32($var);
        $this->nbljpgfhdfi = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>uint32 world_level = 6;</code>
     * @return int
     */
    public function getWorldLevel()
    {
        return $this->world_level;
    }

    /**
     * Generated from protobuf field <code>uint32 world_level = 6;</code>
     * @param int $var
     * @return $this
     */
    public function setWorldLevel($var)
    {
        GPBUtil::checkUint32($var);
        $this->world_level = $var;

        return $this;
    }

}

