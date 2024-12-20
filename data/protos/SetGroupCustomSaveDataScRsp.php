<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# NO CHECKED-IN PROTOBUF GENCODE
# source: StarRail.proto

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * HINPIPPFMAE (1440)
 *
 * Generated from protobuf message <code>SetGroupCustomSaveDataScRsp</code>
 */
class SetGroupCustomSaveDataScRsp extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>uint32 retcode = 2;</code>
     */
    protected $retcode = 0;
    /**
     * Generated from protobuf field <code>uint32 group_id = 13;</code>
     */
    protected $group_id = 0;
    /**
     * Generated from protobuf field <code>uint32 entry_id = 11;</code>
     */
    protected $entry_id = 0;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type int $retcode
     *     @type int $group_id
     *     @type int $entry_id
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\StarRail::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>uint32 retcode = 2;</code>
     * @return int
     */
    public function getRetcode()
    {
        return $this->retcode;
    }

    /**
     * Generated from protobuf field <code>uint32 retcode = 2;</code>
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
     * Generated from protobuf field <code>uint32 group_id = 13;</code>
     * @return int
     */
    public function getGroupId()
    {
        return $this->group_id;
    }

    /**
     * Generated from protobuf field <code>uint32 group_id = 13;</code>
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
     * Generated from protobuf field <code>uint32 entry_id = 11;</code>
     * @return int
     */
    public function getEntryId()
    {
        return $this->entry_id;
    }

    /**
     * Generated from protobuf field <code>uint32 entry_id = 11;</code>
     * @param int $var
     * @return $this
     */
    public function setEntryId($var)
    {
        GPBUtil::checkUint32($var);
        $this->entry_id = $var;

        return $this;
    }

}
