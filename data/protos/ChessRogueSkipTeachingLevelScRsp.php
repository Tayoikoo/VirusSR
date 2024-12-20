<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# NO CHECKED-IN PROTOBUF GENCODE
# source: StarRail.proto

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * ChessRogueSkipTeachingLevelScRsp (5577)
 *
 * Generated from protobuf message <code>ChessRogueSkipTeachingLevelScRsp</code>
 */
class ChessRogueSkipTeachingLevelScRsp extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>.ItemList SkipRewardList = 14;</code>
     */
    protected $SkipRewardList = null;
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
     *     @type \ItemList $SkipRewardList
     *     @type int $retcode
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\StarRail::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>.ItemList SkipRewardList = 14;</code>
     * @return \ItemList|null
     */
    public function getSkipRewardList()
    {
        return $this->SkipRewardList;
    }

    public function hasSkipRewardList()
    {
        return isset($this->SkipRewardList);
    }

    public function clearSkipRewardList()
    {
        unset($this->SkipRewardList);
    }

    /**
     * Generated from protobuf field <code>.ItemList SkipRewardList = 14;</code>
     * @param \ItemList $var
     * @return $this
     */
    public function setSkipRewardList($var)
    {
        GPBUtil::checkMessage($var, \ItemList::class);
        $this->SkipRewardList = $var;

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

