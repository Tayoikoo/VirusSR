<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# NO CHECKED-IN PROTOBUF GENCODE
# source: StarRail.proto

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * KGIEEPDMOPH (7554)
 *
 * Generated from protobuf message <code>QuitTrackPhotoStageCsReq</code>
 */
class QuitTrackPhotoStageCsReq extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>uint32 stage_id = 7;</code>
     */
    protected $stage_id = 0;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type int $stage_id
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\StarRail::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>uint32 stage_id = 7;</code>
     * @return int
     */
    public function getStageId()
    {
        return $this->stage_id;
    }

    /**
     * Generated from protobuf field <code>uint32 stage_id = 7;</code>
     * @param int $var
     * @return $this
     */
    public function setStageId($var)
    {
        GPBUtil::checkUint32($var);
        $this->stage_id = $var;

        return $this;
    }

}
