<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# NO CHECKED-IN PROTOBUF GENCODE
# source: StarRail.proto

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>GFNOJBNEOAA</code>
 */
class GFNOJBNEOAA extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>uint32 group_id = 6;</code>
     */
    protected $group_id = 0;
    /**
     * Generated from protobuf field <code>float mgkgeeplbjl = 7;</code>
     */
    protected $mgkgeeplbjl = 0.0;
    /**
     * Generated from protobuf field <code>uint32 feofolnnldg = 5;</code>
     */
    protected $feofolnnldg = 0;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type int $group_id
     *     @type float $mgkgeeplbjl
     *     @type int $feofolnnldg
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\StarRail::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>uint32 group_id = 6;</code>
     * @return int
     */
    public function getGroupId()
    {
        return $this->group_id;
    }

    /**
     * Generated from protobuf field <code>uint32 group_id = 6;</code>
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
     * Generated from protobuf field <code>float mgkgeeplbjl = 7;</code>
     * @return float
     */
    public function getMgkgeeplbjl()
    {
        return $this->mgkgeeplbjl;
    }

    /**
     * Generated from protobuf field <code>float mgkgeeplbjl = 7;</code>
     * @param float $var
     * @return $this
     */
    public function setMgkgeeplbjl($var)
    {
        GPBUtil::checkFloat($var);
        $this->mgkgeeplbjl = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>uint32 feofolnnldg = 5;</code>
     * @return int
     */
    public function getFeofolnnldg()
    {
        return $this->feofolnnldg;
    }

    /**
     * Generated from protobuf field <code>uint32 feofolnnldg = 5;</code>
     * @param int $var
     * @return $this
     */
    public function setFeofolnnldg($var)
    {
        GPBUtil::checkUint32($var);
        $this->feofolnnldg = $var;

        return $this;
    }

}
