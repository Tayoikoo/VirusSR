<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# NO CHECKED-IN PROTOBUF GENCODE
# source: StarRail.proto

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>FarmStageGachaInfo</code>
 */
class FarmStageGachaInfo extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>int64 end_time = 15;</code>
     */
    protected $end_time = 0;
    /**
     * Generated from protobuf field <code>uint32 gacha_id = 3;</code>
     */
    protected $gacha_id = 0;
    /**
     * Generated from protobuf field <code>int64 begin_time = 9;</code>
     */
    protected $begin_time = 0;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type int|string $end_time
     *     @type int $gacha_id
     *     @type int|string $begin_time
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\StarRail::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>int64 end_time = 15;</code>
     * @return int|string
     */
    public function getEndTime()
    {
        return $this->end_time;
    }

    /**
     * Generated from protobuf field <code>int64 end_time = 15;</code>
     * @param int|string $var
     * @return $this
     */
    public function setEndTime($var)
    {
        GPBUtil::checkInt64($var);
        $this->end_time = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>uint32 gacha_id = 3;</code>
     * @return int
     */
    public function getGachaId()
    {
        return $this->gacha_id;
    }

    /**
     * Generated from protobuf field <code>uint32 gacha_id = 3;</code>
     * @param int $var
     * @return $this
     */
    public function setGachaId($var)
    {
        GPBUtil::checkUint32($var);
        $this->gacha_id = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>int64 begin_time = 9;</code>
     * @return int|string
     */
    public function getBeginTime()
    {
        return $this->begin_time;
    }

    /**
     * Generated from protobuf field <code>int64 begin_time = 9;</code>
     * @param int|string $var
     * @return $this
     */
    public function setBeginTime($var)
    {
        GPBUtil::checkInt64($var);
        $this->begin_time = $var;

        return $this;
    }

}

