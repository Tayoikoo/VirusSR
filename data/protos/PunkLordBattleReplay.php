<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# NO CHECKED-IN PROTOBUF GENCODE
# source: StarRail.proto

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>PunkLordBattleReplay</code>
 */
class PunkLordBattleReplay extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>string BattleReplayKey = 1;</code>
     */
    protected $BattleReplayKey = '';
    /**
     * Generated from protobuf field <code>.ReplayInfo ReplayInfo = 2;</code>
     */
    protected $ReplayInfo = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $BattleReplayKey
     *     @type \ReplayInfo $ReplayInfo
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\StarRail::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>string BattleReplayKey = 1;</code>
     * @return string
     */
    public function getBattleReplayKey()
    {
        return $this->BattleReplayKey;
    }

    /**
     * Generated from protobuf field <code>string BattleReplayKey = 1;</code>
     * @param string $var
     * @return $this
     */
    public function setBattleReplayKey($var)
    {
        GPBUtil::checkString($var, True);
        $this->BattleReplayKey = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>.ReplayInfo ReplayInfo = 2;</code>
     * @return \ReplayInfo|null
     */
    public function getReplayInfo()
    {
        return $this->ReplayInfo;
    }

    public function hasReplayInfo()
    {
        return isset($this->ReplayInfo);
    }

    public function clearReplayInfo()
    {
        unset($this->ReplayInfo);
    }

    /**
     * Generated from protobuf field <code>.ReplayInfo ReplayInfo = 2;</code>
     * @param \ReplayInfo $var
     * @return $this
     */
    public function setReplayInfo($var)
    {
        GPBUtil::checkMessage($var, \ReplayInfo::class);
        $this->ReplayInfo = $var;

        return $this;
    }

}

