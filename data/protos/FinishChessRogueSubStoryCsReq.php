<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# NO CHECKED-IN PROTOBUF GENCODE
# source: StarRail.proto

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * HOBKMBFNEIH (5516)
 *
 * Generated from protobuf message <code>FinishChessRogueSubStoryCsReq</code>
 */
class FinishChessRogueSubStoryCsReq extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>uint32 inbgenaaibg = 11;</code>
     */
    protected $inbgenaaibg = 0;
    /**
     * Generated from protobuf field <code>uint32 bhondmalhbo = 8;</code>
     */
    protected $bhondmalhbo = 0;
    /**
     * Generated from protobuf field <code>uint32 cedpklpefmj = 3;</code>
     */
    protected $cedpklpefmj = 0;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type int $inbgenaaibg
     *     @type int $bhondmalhbo
     *     @type int $cedpklpefmj
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\StarRail::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>uint32 inbgenaaibg = 11;</code>
     * @return int
     */
    public function getInbgenaaibg()
    {
        return $this->inbgenaaibg;
    }

    /**
     * Generated from protobuf field <code>uint32 inbgenaaibg = 11;</code>
     * @param int $var
     * @return $this
     */
    public function setInbgenaaibg($var)
    {
        GPBUtil::checkUint32($var);
        $this->inbgenaaibg = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>uint32 bhondmalhbo = 8;</code>
     * @return int
     */
    public function getBhondmalhbo()
    {
        return $this->bhondmalhbo;
    }

    /**
     * Generated from protobuf field <code>uint32 bhondmalhbo = 8;</code>
     * @param int $var
     * @return $this
     */
    public function setBhondmalhbo($var)
    {
        GPBUtil::checkUint32($var);
        $this->bhondmalhbo = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>uint32 cedpklpefmj = 3;</code>
     * @return int
     */
    public function getCedpklpefmj()
    {
        return $this->cedpklpefmj;
    }

    /**
     * Generated from protobuf field <code>uint32 cedpklpefmj = 3;</code>
     * @param int $var
     * @return $this
     */
    public function setCedpklpefmj($var)
    {
        GPBUtil::checkUint32($var);
        $this->cedpklpefmj = $var;

        return $this;
    }

}

