<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# NO CHECKED-IN PROTOBUF GENCODE
# source: StarRail.proto

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>ClientTurnSnapshot</code>
 */
class ClientTurnSnapshot extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>uint32 turn_counter = 1;</code>
     */
    protected $turn_counter = 0;
    /**
     * Generated from protobuf field <code>uint32 random_counter = 2;</code>
     */
    protected $random_counter = 0;
    /**
     * Generated from protobuf field <code>uint32 anim_event_counter = 3;</code>
     */
    protected $anim_event_counter = 0;
    /**
     * Generated from protobuf field <code>repeated .CharacterSnapshot snapshot_list = 4;</code>
     */
    private $snapshot_list;
    /**
     * Generated from protobuf field <code>repeated .AnimEventSnapshot anim_event_list = 5;</code>
     */
    private $anim_event_list;
    /**
     * Generated from protobuf field <code>uint32 accfcdcfgnl = 6;</code>
     */
    protected $accfcdcfgnl = 0;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type int $turn_counter
     *     @type int $random_counter
     *     @type int $anim_event_counter
     *     @type array<\CharacterSnapshot>|\Google\Protobuf\Internal\RepeatedField $snapshot_list
     *     @type array<\AnimEventSnapshot>|\Google\Protobuf\Internal\RepeatedField $anim_event_list
     *     @type int $accfcdcfgnl
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\StarRail::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>uint32 turn_counter = 1;</code>
     * @return int
     */
    public function getTurnCounter()
    {
        return $this->turn_counter;
    }

    /**
     * Generated from protobuf field <code>uint32 turn_counter = 1;</code>
     * @param int $var
     * @return $this
     */
    public function setTurnCounter($var)
    {
        GPBUtil::checkUint32($var);
        $this->turn_counter = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>uint32 random_counter = 2;</code>
     * @return int
     */
    public function getRandomCounter()
    {
        return $this->random_counter;
    }

    /**
     * Generated from protobuf field <code>uint32 random_counter = 2;</code>
     * @param int $var
     * @return $this
     */
    public function setRandomCounter($var)
    {
        GPBUtil::checkUint32($var);
        $this->random_counter = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>uint32 anim_event_counter = 3;</code>
     * @return int
     */
    public function getAnimEventCounter()
    {
        return $this->anim_event_counter;
    }

    /**
     * Generated from protobuf field <code>uint32 anim_event_counter = 3;</code>
     * @param int $var
     * @return $this
     */
    public function setAnimEventCounter($var)
    {
        GPBUtil::checkUint32($var);
        $this->anim_event_counter = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>repeated .CharacterSnapshot snapshot_list = 4;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getSnapshotList()
    {
        return $this->snapshot_list;
    }

    /**
     * Generated from protobuf field <code>repeated .CharacterSnapshot snapshot_list = 4;</code>
     * @param array<\CharacterSnapshot>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setSnapshotList($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \CharacterSnapshot::class);
        $this->snapshot_list = $arr;

        return $this;
    }

    /**
     * Generated from protobuf field <code>repeated .AnimEventSnapshot anim_event_list = 5;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getAnimEventList()
    {
        return $this->anim_event_list;
    }

    /**
     * Generated from protobuf field <code>repeated .AnimEventSnapshot anim_event_list = 5;</code>
     * @param array<\AnimEventSnapshot>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setAnimEventList($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \AnimEventSnapshot::class);
        $this->anim_event_list = $arr;

        return $this;
    }

    /**
     * Generated from protobuf field <code>uint32 accfcdcfgnl = 6;</code>
     * @return int
     */
    public function getAccfcdcfgnl()
    {
        return $this->accfcdcfgnl;
    }

    /**
     * Generated from protobuf field <code>uint32 accfcdcfgnl = 6;</code>
     * @param int $var
     * @return $this
     */
    public function setAccfcdcfgnl($var)
    {
        GPBUtil::checkUint32($var);
        $this->accfcdcfgnl = $var;

        return $this;
    }

}
