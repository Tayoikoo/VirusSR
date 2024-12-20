<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# NO CHECKED-IN PROTOBUF GENCODE
# source: StarRail.proto

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>NpcMonsterExtraInfo</code>
 */
class NpcMonsterExtraInfo extends \Google\Protobuf\Internal\Message
{
    protected $info_case;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \NpcMonsterRogueInfo $rogue_game_info
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\StarRail::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>.NpcMonsterRogueInfo rogue_game_info = 5;</code>
     * @return \NpcMonsterRogueInfo|null
     */
    public function getRogueGameInfo()
    {
        return $this->readOneof(5);
    }

    public function hasRogueGameInfo()
    {
        return $this->hasOneof(5);
    }

    /**
     * Generated from protobuf field <code>.NpcMonsterRogueInfo rogue_game_info = 5;</code>
     * @param \NpcMonsterRogueInfo $var
     * @return $this
     */
    public function setRogueGameInfo($var)
    {
        GPBUtil::checkMessage($var, \NpcMonsterRogueInfo::class);
        $this->writeOneof(5, $var);

        return $this;
    }

    /**
     * @return string
     */
    public function getInfoCase()
    {
        return $this->whichOneof("info_case");
    }

}
