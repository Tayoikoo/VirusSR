<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# NO CHECKED-IN PROTOBUF GENCODE
# source: StarRail.proto

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * DNBLJEGDGBA (3628)
 *
 * Generated from protobuf message <code>TakeFightActivityRewardCsReq</code>
 */
class TakeFightActivityRewardCsReq extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>uint32 group_id = 11;</code>
     */
    protected $group_id = 0;
    /**
     * Generated from protobuf field <code>uint32 ibafdobbegd = 3;</code>
     */
    protected $ibafdobbegd = 0;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type int $group_id
     *     @type int $ibafdobbegd
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\StarRail::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>uint32 group_id = 11;</code>
     * @return int
     */
    public function getGroupId()
    {
        return $this->group_id;
    }

    /**
     * Generated from protobuf field <code>uint32 group_id = 11;</code>
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
     * Generated from protobuf field <code>uint32 ibafdobbegd = 3;</code>
     * @return int
     */
    public function getIbafdobbegd()
    {
        return $this->ibafdobbegd;
    }

    /**
     * Generated from protobuf field <code>uint32 ibafdobbegd = 3;</code>
     * @param int $var
     * @return $this
     */
    public function setIbafdobbegd($var)
    {
        GPBUtil::checkUint32($var);
        $this->ibafdobbegd = $var;

        return $this;
    }

}
