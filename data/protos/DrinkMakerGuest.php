<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# NO CHECKED-IN PROTOBUF GENCODE
# source: StarRail.proto

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>DrinkMakerGuest</code>
 */
class DrinkMakerGuest extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>repeated uint32 UnlockedFavorTagList = 8;</code>
     */
    private $UnlockedFavorTagList;
    /**
     * Generated from protobuf field <code>uint32 Faith = 4;</code>
     */
    protected $Faith = 0;
    /**
     * Generated from protobuf field <code>uint32 GuestId = 1;</code>
     */
    protected $GuestId = 0;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type array<int>|\Google\Protobuf\Internal\RepeatedField $UnlockedFavorTagList
     *     @type int $Faith
     *     @type int $GuestId
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\StarRail::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>repeated uint32 UnlockedFavorTagList = 8;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getUnlockedFavorTagList()
    {
        return $this->UnlockedFavorTagList;
    }

    /**
     * Generated from protobuf field <code>repeated uint32 UnlockedFavorTagList = 8;</code>
     * @param array<int>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setUnlockedFavorTagList($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::UINT32);
        $this->UnlockedFavorTagList = $arr;

        return $this;
    }

    /**
     * Generated from protobuf field <code>uint32 Faith = 4;</code>
     * @return int
     */
    public function getFaith()
    {
        return $this->Faith;
    }

    /**
     * Generated from protobuf field <code>uint32 Faith = 4;</code>
     * @param int $var
     * @return $this
     */
    public function setFaith($var)
    {
        GPBUtil::checkUint32($var);
        $this->Faith = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>uint32 GuestId = 1;</code>
     * @return int
     */
    public function getGuestId()
    {
        return $this->GuestId;
    }

    /**
     * Generated from protobuf field <code>uint32 GuestId = 1;</code>
     * @param int $var
     * @return $this
     */
    public function setGuestId($var)
    {
        GPBUtil::checkUint32($var);
        $this->GuestId = $var;

        return $this;
    }

}
