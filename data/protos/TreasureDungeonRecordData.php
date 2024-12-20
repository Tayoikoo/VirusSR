<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# NO CHECKED-IN PROTOBUF GENCODE
# source: StarRail.proto

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>TreasureDungeonRecordData</code>
 */
class TreasureDungeonRecordData extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>uint32 TargetGridId = 8;</code>
     */
    protected $TargetGridId = 0;
    /**
     * Generated from protobuf field <code>uint32 SourceGridId = 13;</code>
     */
    protected $SourceGridId = 0;
    /**
     * Generated from protobuf field <code>uint32 Param1 = 14;</code>
     */
    protected $Param1 = 0;
    /**
     * Generated from protobuf field <code>uint32 Param2 = 15;</code>
     */
    protected $Param2 = 0;
    /**
     * Generated from protobuf field <code>.MGGEMNJKHCF Type = 6;</code>
     */
    protected $Type = 0;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type int $TargetGridId
     *     @type int $SourceGridId
     *     @type int $Param1
     *     @type int $Param2
     *     @type int $Type
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\StarRail::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>uint32 TargetGridId = 8;</code>
     * @return int
     */
    public function getTargetGridId()
    {
        return $this->TargetGridId;
    }

    /**
     * Generated from protobuf field <code>uint32 TargetGridId = 8;</code>
     * @param int $var
     * @return $this
     */
    public function setTargetGridId($var)
    {
        GPBUtil::checkUint32($var);
        $this->TargetGridId = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>uint32 SourceGridId = 13;</code>
     * @return int
     */
    public function getSourceGridId()
    {
        return $this->SourceGridId;
    }

    /**
     * Generated from protobuf field <code>uint32 SourceGridId = 13;</code>
     * @param int $var
     * @return $this
     */
    public function setSourceGridId($var)
    {
        GPBUtil::checkUint32($var);
        $this->SourceGridId = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>uint32 Param1 = 14;</code>
     * @return int
     */
    public function getParam1()
    {
        return $this->Param1;
    }

    /**
     * Generated from protobuf field <code>uint32 Param1 = 14;</code>
     * @param int $var
     * @return $this
     */
    public function setParam1($var)
    {
        GPBUtil::checkUint32($var);
        $this->Param1 = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>uint32 Param2 = 15;</code>
     * @return int
     */
    public function getParam2()
    {
        return $this->Param2;
    }

    /**
     * Generated from protobuf field <code>uint32 Param2 = 15;</code>
     * @param int $var
     * @return $this
     */
    public function setParam2($var)
    {
        GPBUtil::checkUint32($var);
        $this->Param2 = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>.MGGEMNJKHCF Type = 6;</code>
     * @return int
     */
    public function getType()
    {
        return $this->Type;
    }

    /**
     * Generated from protobuf field <code>.MGGEMNJKHCF Type = 6;</code>
     * @param int $var
     * @return $this
     */
    public function setType($var)
    {
        GPBUtil::checkEnum($var, \MGGEMNJKHCF::class);
        $this->Type = $var;

        return $this;
    }

}

