<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# NO CHECKED-IN PROTOBUF GENCODE
# source: StarRail.proto

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>CellMonsterSelectInfo</code>
 */
class CellMonsterSelectInfo extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>repeated uint32 select_decay_id = 9;</code>
     */
    private $select_decay_id;
    /**
     * Generated from protobuf field <code>repeated uint32 maze_buff_list = 3;</code>
     */
    private $maze_buff_list;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type array<int>|\Google\Protobuf\Internal\RepeatedField $select_decay_id
     *     @type array<int>|\Google\Protobuf\Internal\RepeatedField $maze_buff_list
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\StarRail::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>repeated uint32 select_decay_id = 9;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getSelectDecayId()
    {
        return $this->select_decay_id;
    }

    /**
     * Generated from protobuf field <code>repeated uint32 select_decay_id = 9;</code>
     * @param array<int>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setSelectDecayId($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::UINT32);
        $this->select_decay_id = $arr;

        return $this;
    }

    /**
     * Generated from protobuf field <code>repeated uint32 maze_buff_list = 3;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getMazeBuffList()
    {
        return $this->maze_buff_list;
    }

    /**
     * Generated from protobuf field <code>repeated uint32 maze_buff_list = 3;</code>
     * @param array<int>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setMazeBuffList($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::UINT32);
        $this->maze_buff_list = $arr;

        return $this;
    }

}
