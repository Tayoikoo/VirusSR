<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# NO CHECKED-IN PROTOBUF GENCODE
# source: StarRail.proto

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * BNBBHHNHBGF (5521)
 *
 * Generated from protobuf message <code>ChessRogueUpdateAllowedSelectCellScNotify</code>
 */
class ChessRogueUpdateAllowedSelectCellScNotify extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>repeated uint32 allow_select_cell_id_list = 3;</code>
     */
    private $allow_select_cell_id_list;
    /**
     * Generated from protobuf field <code>uint32 hedddekoolb = 13;</code>
     */
    protected $hedddekoolb = 0;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type array<int>|\Google\Protobuf\Internal\RepeatedField $allow_select_cell_id_list
     *     @type int $hedddekoolb
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\StarRail::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>repeated uint32 allow_select_cell_id_list = 3;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getAllowSelectCellIdList()
    {
        return $this->allow_select_cell_id_list;
    }

    /**
     * Generated from protobuf field <code>repeated uint32 allow_select_cell_id_list = 3;</code>
     * @param array<int>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setAllowSelectCellIdList($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::UINT32);
        $this->allow_select_cell_id_list = $arr;

        return $this;
    }

    /**
     * Generated from protobuf field <code>uint32 hedddekoolb = 13;</code>
     * @return int
     */
    public function getHedddekoolb()
    {
        return $this->hedddekoolb;
    }

    /**
     * Generated from protobuf field <code>uint32 hedddekoolb = 13;</code>
     * @param int $var
     * @return $this
     */
    public function setHedddekoolb($var)
    {
        GPBUtil::checkUint32($var);
        $this->hedddekoolb = $var;

        return $this;
    }

}

