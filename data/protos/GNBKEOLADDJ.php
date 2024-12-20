<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# NO CHECKED-IN PROTOBUF GENCODE
# source: StarRail.proto

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>GNBKEOLADDJ</code>
 */
class GNBKEOLADDJ extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>uint32 retcode = 10;</code>
     */
    protected $retcode = 0;
    /**
     * Generated from protobuf field <code>.SceneBattleInfo battle_info = 2;</code>
     */
    protected $battle_info = null;
    /**
     * Generated from protobuf field <code>uint32 KONGAADEJEL = 11;</code>
     */
    protected $KONGAADEJEL = 0;
    /**
     * Generated from protobuf field <code>uint32 ILIFHHJFMIH = 3;</code>
     */
    protected $ILIFHHJFMIH = 0;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type int $retcode
     *     @type \SceneBattleInfo $battle_info
     *     @type int $KONGAADEJEL
     *     @type int $ILIFHHJFMIH
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\StarRail::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>uint32 retcode = 10;</code>
     * @return int
     */
    public function getRetcode()
    {
        return $this->retcode;
    }

    /**
     * Generated from protobuf field <code>uint32 retcode = 10;</code>
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
     * Generated from protobuf field <code>.SceneBattleInfo battle_info = 2;</code>
     * @return \SceneBattleInfo|null
     */
    public function getBattleInfo()
    {
        return $this->battle_info;
    }

    public function hasBattleInfo()
    {
        return isset($this->battle_info);
    }

    public function clearBattleInfo()
    {
        unset($this->battle_info);
    }

    /**
     * Generated from protobuf field <code>.SceneBattleInfo battle_info = 2;</code>
     * @param \SceneBattleInfo $var
     * @return $this
     */
    public function setBattleInfo($var)
    {
        GPBUtil::checkMessage($var, \SceneBattleInfo::class);
        $this->battle_info = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>uint32 KONGAADEJEL = 11;</code>
     * @return int
     */
    public function getKONGAADEJEL()
    {
        return $this->KONGAADEJEL;
    }

    /**
     * Generated from protobuf field <code>uint32 KONGAADEJEL = 11;</code>
     * @param int $var
     * @return $this
     */
    public function setKONGAADEJEL($var)
    {
        GPBUtil::checkUint32($var);
        $this->KONGAADEJEL = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>uint32 ILIFHHJFMIH = 3;</code>
     * @return int
     */
    public function getILIFHHJFMIH()
    {
        return $this->ILIFHHJFMIH;
    }

    /**
     * Generated from protobuf field <code>uint32 ILIFHHJFMIH = 3;</code>
     * @param int $var
     * @return $this
     */
    public function setILIFHHJFMIH($var)
    {
        GPBUtil::checkUint32($var);
        $this->ILIFHHJFMIH = $var;

        return $this;
    }

}

