<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# NO CHECKED-IN PROTOBUF GENCODE
# source: StarRail.proto

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * CHLCOEJNKMJ (4173)
 *
 * Generated from protobuf message <code>MazeKillDirectScRsp</code>
 */
class MazeKillDirectScRsp extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>uint32 retcode = 14;</code>
     */
    protected $retcode = 0;
    /**
     * Generated from protobuf field <code>repeated uint32 entity_list = 2;</code>
     */
    private $entity_list;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type int $retcode
     *     @type array<int>|\Google\Protobuf\Internal\RepeatedField $entity_list
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\StarRail::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>uint32 retcode = 14;</code>
     * @return int
     */
    public function getRetcode()
    {
        return $this->retcode;
    }

    /**
     * Generated from protobuf field <code>uint32 retcode = 14;</code>
     * @param int $var
     * @return $this
     */
    public function setRetcode($var)
    {
        GPBUtil::checkUint32($var);
        $this->retcode = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>repeated uint32 entity_list = 2;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getEntityList()
    {
        return $this->entity_list;
    }

    /**
     * Generated from protobuf field <code>repeated uint32 entity_list = 2;</code>
     * @param array<int>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setEntityList($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::UINT32);
        $this->entity_list = $arr;

        return $this;
    }

}

