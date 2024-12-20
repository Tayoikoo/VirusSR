<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# NO CHECKED-IN PROTOBUF GENCODE
# source: StarRail.proto

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * JPOGEJCENLD (4927)
 *
 * Generated from protobuf message <code>EnterFantasticStoryActivityStageCsReq</code>
 */
class EnterFantasticStoryActivityStageCsReq extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>uint32 battle_id = 5;</code>
     */
    protected $battle_id = 0;
    /**
     * Generated from protobuf field <code>repeated .OLHLJPHENMO avatar_list = 9;</code>
     */
    private $avatar_list;
    /**
     * Generated from protobuf field <code>uint32 hemobibindg = 8;</code>
     */
    protected $hemobibindg = 0;
    /**
     * Generated from protobuf field <code>repeated uint32 buff_list = 13;</code>
     */
    private $buff_list;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type int $battle_id
     *     @type array<\OLHLJPHENMO>|\Google\Protobuf\Internal\RepeatedField $avatar_list
     *     @type int $hemobibindg
     *     @type array<int>|\Google\Protobuf\Internal\RepeatedField $buff_list
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\StarRail::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>uint32 battle_id = 5;</code>
     * @return int
     */
    public function getBattleId()
    {
        return $this->battle_id;
    }

    /**
     * Generated from protobuf field <code>uint32 battle_id = 5;</code>
     * @param int $var
     * @return $this
     */
    public function setBattleId($var)
    {
        GPBUtil::checkUint32($var);
        $this->battle_id = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>repeated .OLHLJPHENMO avatar_list = 9;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getAvatarList()
    {
        return $this->avatar_list;
    }

    /**
     * Generated from protobuf field <code>repeated .OLHLJPHENMO avatar_list = 9;</code>
     * @param array<\OLHLJPHENMO>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setAvatarList($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \OLHLJPHENMO::class);
        $this->avatar_list = $arr;

        return $this;
    }

    /**
     * Generated from protobuf field <code>uint32 hemobibindg = 8;</code>
     * @return int
     */
    public function getHemobibindg()
    {
        return $this->hemobibindg;
    }

    /**
     * Generated from protobuf field <code>uint32 hemobibindg = 8;</code>
     * @param int $var
     * @return $this
     */
    public function setHemobibindg($var)
    {
        GPBUtil::checkUint32($var);
        $this->hemobibindg = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>repeated uint32 buff_list = 13;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getBuffList()
    {
        return $this->buff_list;
    }

    /**
     * Generated from protobuf field <code>repeated uint32 buff_list = 13;</code>
     * @param array<int>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setBuffList($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::UINT32);
        $this->buff_list = $arr;

        return $this;
    }

}

