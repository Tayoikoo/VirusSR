<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# NO CHECKED-IN PROTOBUF GENCODE
# source: StarRail.proto

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * LEEADNPNPGI (1444)
 *
 * Generated from protobuf message <code>GetUnlockTeleportCsReq</code>
 */
class GetUnlockTeleportCsReq extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>repeated uint32 entry_id_list = 12;</code>
     */
    private $entry_id_list;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type array<int>|\Google\Protobuf\Internal\RepeatedField $entry_id_list
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\StarRail::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>repeated uint32 entry_id_list = 12;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getEntryIdList()
    {
        return $this->entry_id_list;
    }

    /**
     * Generated from protobuf field <code>repeated uint32 entry_id_list = 12;</code>
     * @param array<int>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setEntryIdList($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::UINT32);
        $this->entry_id_list = $arr;

        return $this;
    }

}
