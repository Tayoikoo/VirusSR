<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# NO CHECKED-IN PROTOBUF GENCODE
# source: StarRail.proto

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>ChallengeStoryStatistics</code>
 */
class ChallengeStoryStatistics extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>.ChallengeStoryStageTertinggi stage_tertinggi = 3;</code>
     */
    protected $stage_tertinggi = null;
    /**
     * Generated from protobuf field <code>uint32 record_id = 13;</code>
     */
    protected $record_id = 0;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \ChallengeStoryStageTertinggi $stage_tertinggi
     *     @type int $record_id
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\StarRail::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>.ChallengeStoryStageTertinggi stage_tertinggi = 3;</code>
     * @return \ChallengeStoryStageTertinggi|null
     */
    public function getStageTertinggi()
    {
        return $this->stage_tertinggi;
    }

    public function hasStageTertinggi()
    {
        return isset($this->stage_tertinggi);
    }

    public function clearStageTertinggi()
    {
        unset($this->stage_tertinggi);
    }

    /**
     * Generated from protobuf field <code>.ChallengeStoryStageTertinggi stage_tertinggi = 3;</code>
     * @param \ChallengeStoryStageTertinggi $var
     * @return $this
     */
    public function setStageTertinggi($var)
    {
        GPBUtil::checkMessage($var, \ChallengeStoryStageTertinggi::class);
        $this->stage_tertinggi = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>uint32 record_id = 13;</code>
     * @return int
     */
    public function getRecordId()
    {
        return $this->record_id;
    }

    /**
     * Generated from protobuf field <code>uint32 record_id = 13;</code>
     * @param int $var
     * @return $this
     */
    public function setRecordId($var)
    {
        GPBUtil::checkUint32($var);
        $this->record_id = $var;

        return $this;
    }

}

