<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# NO CHECKED-IN PROTOBUF GENCODE
# source: StarRail.proto

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * HEANGCFNDFL (7128)
 *
 * Generated from protobuf message <code>EvolveBuildReRandomStageCsReq</code>
 */
class EvolveBuildReRandomStageCsReq extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>uint32 level_id = 9;</code>
     */
    protected $level_id = 0;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type int $level_id
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\StarRail::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>uint32 level_id = 9;</code>
     * @return int
     */
    public function getLevelId()
    {
        return $this->level_id;
    }

    /**
     * Generated from protobuf field <code>uint32 level_id = 9;</code>
     * @param int $var
     * @return $this
     */
    public function setLevelId($var)
    {
        GPBUtil::checkUint32($var);
        $this->level_id = $var;

        return $this;
    }

}
