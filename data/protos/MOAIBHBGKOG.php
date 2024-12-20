<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# NO CHECKED-IN PROTOBUF GENCODE
# source: StarRail.proto

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>MOAIBHBGKOG</code>
 */
class MOAIBHBGKOG extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>.SceneBattleInfo battle_info = 1;</code>
     */
    protected $battle_info = null;
    /**
     * Generated from protobuf field <code>uint32 attacked_group_id = 7;</code>
     */
    protected $attacked_group_id = 0;
    /**
     * Generated from protobuf field <code>uint32 retcode = 9;</code>
     */
    protected $retcode = 0;
    /**
     * Generated from protobuf field <code>repeated .DELMMDLCBLE OIPANCGPAHJ = 2;</code>
     */
    private $OIPANCGPAHJ;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \SceneBattleInfo $battle_info
     *     @type int $attacked_group_id
     *     @type int $retcode
     *     @type array<\DELMMDLCBLE>|\Google\Protobuf\Internal\RepeatedField $OIPANCGPAHJ
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\StarRail::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>.SceneBattleInfo battle_info = 1;</code>
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
     * Generated from protobuf field <code>.SceneBattleInfo battle_info = 1;</code>
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
     * Generated from protobuf field <code>uint32 attacked_group_id = 7;</code>
     * @return int
     */
    public function getAttackedGroupId()
    {
        return $this->attacked_group_id;
    }

    /**
     * Generated from protobuf field <code>uint32 attacked_group_id = 7;</code>
     * @param int $var
     * @return $this
     */
    public function setAttackedGroupId($var)
    {
        GPBUtil::checkUint32($var);
        $this->attacked_group_id = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>uint32 retcode = 9;</code>
     * @return int
     */
    public function getRetcode()
    {
        return $this->retcode;
    }

    /**
     * Generated from protobuf field <code>uint32 retcode = 9;</code>
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
     * Generated from protobuf field <code>repeated .DELMMDLCBLE OIPANCGPAHJ = 2;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getOIPANCGPAHJ()
    {
        return $this->OIPANCGPAHJ;
    }

    /**
     * Generated from protobuf field <code>repeated .DELMMDLCBLE OIPANCGPAHJ = 2;</code>
     * @param array<\DELMMDLCBLE>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setOIPANCGPAHJ($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \DELMMDLCBLE::class);
        $this->OIPANCGPAHJ = $arr;

        return $this;
    }

}

