<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# NO CHECKED-IN PROTOBUF GENCODE
# source: StarRail.proto

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>GameMiracleInfo</code>
 */
class GameMiracleInfo extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>.RogueMiracleInfo game_miracle_info = 6;</code>
     */
    protected $game_miracle_info = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \RogueMiracleInfo $game_miracle_info
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\StarRail::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>.RogueMiracleInfo game_miracle_info = 6;</code>
     * @return \RogueMiracleInfo|null
     */
    public function getGameMiracleInfo()
    {
        return $this->game_miracle_info;
    }

    public function hasGameMiracleInfo()
    {
        return isset($this->game_miracle_info);
    }

    public function clearGameMiracleInfo()
    {
        unset($this->game_miracle_info);
    }

    /**
     * Generated from protobuf field <code>.RogueMiracleInfo game_miracle_info = 6;</code>
     * @param \RogueMiracleInfo $var
     * @return $this
     */
    public function setGameMiracleInfo($var)
    {
        GPBUtil::checkMessage($var, \RogueMiracleInfo::class);
        $this->game_miracle_info = $var;

        return $this;
    }

}
