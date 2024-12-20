<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# NO CHECKED-IN PROTOBUF GENCODE
# source: StarRail.proto

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * IKNAMJANCNK (5564)
 *
 * Generated from protobuf message <code>ChessRogueFinishCurRoomNotify</code>
 */
class ChessRogueFinishCurRoomNotify extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>.ChessRogueLevelInfo level_info = 7;</code>
     */
    protected $level_info = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \ChessRogueLevelInfo $level_info
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\StarRail::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>.ChessRogueLevelInfo level_info = 7;</code>
     * @return \ChessRogueLevelInfo|null
     */
    public function getLevelInfo()
    {
        return $this->level_info;
    }

    public function hasLevelInfo()
    {
        return isset($this->level_info);
    }

    public function clearLevelInfo()
    {
        unset($this->level_info);
    }

    /**
     * Generated from protobuf field <code>.ChessRogueLevelInfo level_info = 7;</code>
     * @param \ChessRogueLevelInfo $var
     * @return $this
     */
    public function setLevelInfo($var)
    {
        GPBUtil::checkMessage($var, \ChessRogueLevelInfo::class);
        $this->level_info = $var;

        return $this;
    }

}

