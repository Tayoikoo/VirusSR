<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# NO CHECKED-IN PROTOBUF GENCODE
# source: StarRail.proto

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>ChallengeBossInfo</code>
 */
class ChallengeBossInfo extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>.ChallengeBossSingleNodeInfo first_node = 2;</code>
     */
    protected $first_node = null;
    /**
     * Generated from protobuf field <code>.ChallengeBossSingleNodeInfo second_node = 14;</code>
     */
    protected $second_node = null;
    /**
     * Generated from protobuf field <code>repeated uint32 second_half_lineup = 12;</code>
     */
    private $second_half_lineup;
    /**
     * Generated from protobuf field <code>repeated uint32 first_half_lineup = 8;</code>
     */
    private $first_half_lineup;
    /**
     * Generated from protobuf field <code>map<uint32, .ChallengeBossEquipmentInfo> challenge_avatar_equipment_map = 4;</code>
     */
    private $challenge_avatar_equipment_map;
    /**
     * Generated from protobuf field <code>map<uint32, .ChallengeBossAvatarRelicInfo> kfokoccaejc = 10;</code>
     */
    private $kfokoccaejc;
    /**
     * Generated from protobuf field <code>bool njkcjbloibk = 7;</code>
     */
    protected $njkcjbloibk = false;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \ChallengeBossSingleNodeInfo $first_node
     *     @type \ChallengeBossSingleNodeInfo $second_node
     *     @type array<int>|\Google\Protobuf\Internal\RepeatedField $second_half_lineup
     *     @type array<int>|\Google\Protobuf\Internal\RepeatedField $first_half_lineup
     *     @type array|\Google\Protobuf\Internal\MapField $challenge_avatar_equipment_map
     *     @type array|\Google\Protobuf\Internal\MapField $kfokoccaejc
     *     @type bool $njkcjbloibk
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\StarRail::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>.ChallengeBossSingleNodeInfo first_node = 2;</code>
     * @return \ChallengeBossSingleNodeInfo|null
     */
    public function getFirstNode()
    {
        return $this->first_node;
    }

    public function hasFirstNode()
    {
        return isset($this->first_node);
    }

    public function clearFirstNode()
    {
        unset($this->first_node);
    }

    /**
     * Generated from protobuf field <code>.ChallengeBossSingleNodeInfo first_node = 2;</code>
     * @param \ChallengeBossSingleNodeInfo $var
     * @return $this
     */
    public function setFirstNode($var)
    {
        GPBUtil::checkMessage($var, \ChallengeBossSingleNodeInfo::class);
        $this->first_node = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>.ChallengeBossSingleNodeInfo second_node = 14;</code>
     * @return \ChallengeBossSingleNodeInfo|null
     */
    public function getSecondNode()
    {
        return $this->second_node;
    }

    public function hasSecondNode()
    {
        return isset($this->second_node);
    }

    public function clearSecondNode()
    {
        unset($this->second_node);
    }

    /**
     * Generated from protobuf field <code>.ChallengeBossSingleNodeInfo second_node = 14;</code>
     * @param \ChallengeBossSingleNodeInfo $var
     * @return $this
     */
    public function setSecondNode($var)
    {
        GPBUtil::checkMessage($var, \ChallengeBossSingleNodeInfo::class);
        $this->second_node = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>repeated uint32 second_half_lineup = 12;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getSecondHalfLineup()
    {
        return $this->second_half_lineup;
    }

    /**
     * Generated from protobuf field <code>repeated uint32 second_half_lineup = 12;</code>
     * @param array<int>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setSecondHalfLineup($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::UINT32);
        $this->second_half_lineup = $arr;

        return $this;
    }

    /**
     * Generated from protobuf field <code>repeated uint32 first_half_lineup = 8;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getFirstHalfLineup()
    {
        return $this->first_half_lineup;
    }

    /**
     * Generated from protobuf field <code>repeated uint32 first_half_lineup = 8;</code>
     * @param array<int>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setFirstHalfLineup($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::UINT32);
        $this->first_half_lineup = $arr;

        return $this;
    }

    /**
     * Generated from protobuf field <code>map<uint32, .ChallengeBossEquipmentInfo> challenge_avatar_equipment_map = 4;</code>
     * @return \Google\Protobuf\Internal\MapField
     */
    public function getChallengeAvatarEquipmentMap()
    {
        return $this->challenge_avatar_equipment_map;
    }

    /**
     * Generated from protobuf field <code>map<uint32, .ChallengeBossEquipmentInfo> challenge_avatar_equipment_map = 4;</code>
     * @param array|\Google\Protobuf\Internal\MapField $var
     * @return $this
     */
    public function setChallengeAvatarEquipmentMap($var)
    {
        $arr = GPBUtil::checkMapField($var, \Google\Protobuf\Internal\GPBType::UINT32, \Google\Protobuf\Internal\GPBType::MESSAGE, \ChallengeBossEquipmentInfo::class);
        $this->challenge_avatar_equipment_map = $arr;

        return $this;
    }

    /**
     * Generated from protobuf field <code>map<uint32, .ChallengeBossAvatarRelicInfo> kfokoccaejc = 10;</code>
     * @return \Google\Protobuf\Internal\MapField
     */
    public function getKfokoccaejc()
    {
        return $this->kfokoccaejc;
    }

    /**
     * Generated from protobuf field <code>map<uint32, .ChallengeBossAvatarRelicInfo> kfokoccaejc = 10;</code>
     * @param array|\Google\Protobuf\Internal\MapField $var
     * @return $this
     */
    public function setKfokoccaejc($var)
    {
        $arr = GPBUtil::checkMapField($var, \Google\Protobuf\Internal\GPBType::UINT32, \Google\Protobuf\Internal\GPBType::MESSAGE, \ChallengeBossAvatarRelicInfo::class);
        $this->kfokoccaejc = $arr;

        return $this;
    }

    /**
     * Generated from protobuf field <code>bool njkcjbloibk = 7;</code>
     * @return bool
     */
    public function getNjkcjbloibk()
    {
        return $this->njkcjbloibk;
    }

    /**
     * Generated from protobuf field <code>bool njkcjbloibk = 7;</code>
     * @param bool $var
     * @return $this
     */
    public function setNjkcjbloibk($var)
    {
        GPBUtil::checkBool($var);
        $this->njkcjbloibk = $var;

        return $this;
    }

}

