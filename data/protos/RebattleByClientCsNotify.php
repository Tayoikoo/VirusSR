<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# NO CHECKED-IN PROTOBUF GENCODE
# source: StarRail.proto

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * FOJMDJNGEOM (125)
 *
 * Generated from protobuf message <code>RebattleByClientCsNotify</code>
 */
class RebattleByClientCsNotify extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>.RebattleType rebattle_type = 7;</code>
     */
    protected $rebattle_type = 0;
    /**
     * Generated from protobuf field <code>.BattleStatistics stt = 1;</code>
     */
    protected $stt = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type int $rebattle_type
     *     @type \BattleStatistics $stt
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\StarRail::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>.RebattleType rebattle_type = 7;</code>
     * @return int
     */
    public function getRebattleType()
    {
        return $this->rebattle_type;
    }

    /**
     * Generated from protobuf field <code>.RebattleType rebattle_type = 7;</code>
     * @param int $var
     * @return $this
     */
    public function setRebattleType($var)
    {
        GPBUtil::checkEnum($var, \RebattleType::class);
        $this->rebattle_type = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>.BattleStatistics stt = 1;</code>
     * @return \BattleStatistics|null
     */
    public function getStt()
    {
        return $this->stt;
    }

    public function hasStt()
    {
        return isset($this->stt);
    }

    public function clearStt()
    {
        unset($this->stt);
    }

    /**
     * Generated from protobuf field <code>.BattleStatistics stt = 1;</code>
     * @param \BattleStatistics $var
     * @return $this
     */
    public function setStt($var)
    {
        GPBUtil::checkMessage($var, \BattleStatistics::class);
        $this->stt = $var;

        return $this;
    }

}

