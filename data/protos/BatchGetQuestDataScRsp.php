<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# NO CHECKED-IN PROTOBUF GENCODE
# source: StarRail.proto

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * AFKIHIEBIEM (905)
 *
 * Generated from protobuf message <code>BatchGetQuestDataScRsp</code>
 */
class BatchGetQuestDataScRsp extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>repeated .Quest quest_list = 13;</code>
     */
    private $quest_list;
    /**
     * Generated from protobuf field <code>uint32 retcode = 6;</code>
     */
    protected $retcode = 0;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type array<\Quest>|\Google\Protobuf\Internal\RepeatedField $quest_list
     *     @type int $retcode
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\StarRail::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>repeated .Quest quest_list = 13;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getQuestList()
    {
        return $this->quest_list;
    }

    /**
     * Generated from protobuf field <code>repeated .Quest quest_list = 13;</code>
     * @param array<\Quest>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setQuestList($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Quest::class);
        $this->quest_list = $arr;

        return $this;
    }

    /**
     * Generated from protobuf field <code>uint32 retcode = 6;</code>
     * @return int
     */
    public function getRetcode()
    {
        return $this->retcode;
    }

    /**
     * Generated from protobuf field <code>uint32 retcode = 6;</code>
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

