<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# NO CHECKED-IN PROTOBUF GENCODE
# source: StarRail.proto

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * MMHAOBBFJFH (4124)
 *
 * Generated from protobuf message <code>CancelCacheNotifyCsReq</code>
 */
class CancelCacheNotifyCsReq extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>.IHHMHLDLFHN type = 6;</code>
     */
    protected $type = 0;
    /**
     * Generated from protobuf field <code>repeated uint32 dnnhnhabfio = 14;</code>
     */
    private $dnnhnhabfio;
    /**
     * Generated from protobuf field <code>repeated string bgemfghabba = 15;</code>
     */
    private $bgemfghabba;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type int $type
     *     @type array<int>|\Google\Protobuf\Internal\RepeatedField $dnnhnhabfio
     *     @type array<string>|\Google\Protobuf\Internal\RepeatedField $bgemfghabba
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\StarRail::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>.IHHMHLDLFHN type = 6;</code>
     * @return int
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * Generated from protobuf field <code>.IHHMHLDLFHN type = 6;</code>
     * @param int $var
     * @return $this
     */
    public function setType($var)
    {
        GPBUtil::checkEnum($var, \IHHMHLDLFHN::class);
        $this->type = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>repeated uint32 dnnhnhabfio = 14;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getDnnhnhabfio()
    {
        return $this->dnnhnhabfio;
    }

    /**
     * Generated from protobuf field <code>repeated uint32 dnnhnhabfio = 14;</code>
     * @param array<int>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setDnnhnhabfio($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::UINT32);
        $this->dnnhnhabfio = $arr;

        return $this;
    }

    /**
     * Generated from protobuf field <code>repeated string bgemfghabba = 15;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getBgemfghabba()
    {
        return $this->bgemfghabba;
    }

    /**
     * Generated from protobuf field <code>repeated string bgemfghabba = 15;</code>
     * @param array<string>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setBgemfghabba($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::STRING);
        $this->bgemfghabba = $arr;

        return $this;
    }

}

