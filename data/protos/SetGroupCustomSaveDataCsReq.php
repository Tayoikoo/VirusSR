<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# NO CHECKED-IN PROTOBUF GENCODE
# source: StarRail.proto

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * ELFHOHJAHPH (1403)
 *
 * Generated from protobuf message <code>SetGroupCustomSaveDataCsReq</code>
 */
class SetGroupCustomSaveDataCsReq extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>uint32 group_id = 5;</code>
     */
    protected $group_id = 0;
    /**
     * Generated from protobuf field <code>uint32 entry_id = 6;</code>
     */
    protected $entry_id = 0;
    /**
     * Generated from protobuf field <code>string save_data = 14;</code>
     */
    protected $save_data = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type int $group_id
     *     @type int $entry_id
     *     @type string $save_data
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\StarRail::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>uint32 group_id = 5;</code>
     * @return int
     */
    public function getGroupId()
    {
        return $this->group_id;
    }

    /**
     * Generated from protobuf field <code>uint32 group_id = 5;</code>
     * @param int $var
     * @return $this
     */
    public function setGroupId($var)
    {
        GPBUtil::checkUint32($var);
        $this->group_id = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>uint32 entry_id = 6;</code>
     * @return int
     */
    public function getEntryId()
    {
        return $this->entry_id;
    }

    /**
     * Generated from protobuf field <code>uint32 entry_id = 6;</code>
     * @param int $var
     * @return $this
     */
    public function setEntryId($var)
    {
        GPBUtil::checkUint32($var);
        $this->entry_id = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>string save_data = 14;</code>
     * @return string
     */
    public function getSaveData()
    {
        return $this->save_data;
    }

    /**
     * Generated from protobuf field <code>string save_data = 14;</code>
     * @param string $var
     * @return $this
     */
    public function setSaveData($var)
    {
        GPBUtil::checkString($var, True);
        $this->save_data = $var;

        return $this;
    }

}
