<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# NO CHECKED-IN PROTOBUF GENCODE
# source: StarRail.proto

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>BCGBCCNKFDN</code>
 */
class BCGBCCNKFDN extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>uint32 IMEENEHMHCF = 1;</code>
     */
    protected $IMEENEHMHCF = 0;
    /**
     * Generated from protobuf field <code>uint32 level = 2;</code>
     */
    protected $level = 0;
    /**
     * Generated from protobuf field <code>double HODGJHOAHGG = 3;</code>
     */
    protected $HODGJHOAHGG = 0.0;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type int $IMEENEHMHCF
     *     @type int $level
     *     @type float $HODGJHOAHGG
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\StarRail::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>uint32 IMEENEHMHCF = 1;</code>
     * @return int
     */
    public function getIMEENEHMHCF()
    {
        return $this->IMEENEHMHCF;
    }

    /**
     * Generated from protobuf field <code>uint32 IMEENEHMHCF = 1;</code>
     * @param int $var
     * @return $this
     */
    public function setIMEENEHMHCF($var)
    {
        GPBUtil::checkUint32($var);
        $this->IMEENEHMHCF = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>uint32 level = 2;</code>
     * @return int
     */
    public function getLevel()
    {
        return $this->level;
    }

    /**
     * Generated from protobuf field <code>uint32 level = 2;</code>
     * @param int $var
     * @return $this
     */
    public function setLevel($var)
    {
        GPBUtil::checkUint32($var);
        $this->level = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>double HODGJHOAHGG = 3;</code>
     * @return float
     */
    public function getHODGJHOAHGG()
    {
        return $this->HODGJHOAHGG;
    }

    /**
     * Generated from protobuf field <code>double HODGJHOAHGG = 3;</code>
     * @param float $var
     * @return $this
     */
    public function setHODGJHOAHGG($var)
    {
        GPBUtil::checkDouble($var);
        $this->HODGJHOAHGG = $var;

        return $this;
    }

}
