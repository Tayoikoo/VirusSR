<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# NO CHECKED-IN PROTOBUF GENCODE
# source: StarRail.proto

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>OJBEEKGEHBO</code>
 */
class OJBEEKGEHBO extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>.DEGGBBPMLMI KFIMLHHPMLI = 14;</code>
     */
    protected $KFIMLHHPMLI = null;
    /**
     * Generated from protobuf field <code>.SceneBattleInfo battle_info = 2;</code>
     */
    protected $battle_info = null;
    /**
     * Generated from protobuf field <code>uint32 retcode = 12;</code>
     */
    protected $retcode = 0;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \DEGGBBPMLMI $KFIMLHHPMLI
     *     @type \SceneBattleInfo $battle_info
     *     @type int $retcode
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\StarRail::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>.DEGGBBPMLMI KFIMLHHPMLI = 14;</code>
     * @return \DEGGBBPMLMI|null
     */
    public function getKFIMLHHPMLI()
    {
        return $this->KFIMLHHPMLI;
    }

    public function hasKFIMLHHPMLI()
    {
        return isset($this->KFIMLHHPMLI);
    }

    public function clearKFIMLHHPMLI()
    {
        unset($this->KFIMLHHPMLI);
    }

    /**
     * Generated from protobuf field <code>.DEGGBBPMLMI KFIMLHHPMLI = 14;</code>
     * @param \DEGGBBPMLMI $var
     * @return $this
     */
    public function setKFIMLHHPMLI($var)
    {
        GPBUtil::checkMessage($var, \DEGGBBPMLMI::class);
        $this->KFIMLHHPMLI = $var;

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
     * Generated from protobuf field <code>uint32 retcode = 12;</code>
     * @return int
     */
    public function getRetcode()
    {
        return $this->retcode;
    }

    /**
     * Generated from protobuf field <code>uint32 retcode = 12;</code>
     * @param int $var
     * @return $this
     */
    public function setRetcode($var)
    {
        GPBUtil::checkUint32($var);
        $this->retcode = $var;

        return $this;
    }

}
