<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# NO CHECKED-IN PROTOBUF GENCODE
# source: StarRail.proto

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * CCDHMGHGDJN (5584)
 *
 * Generated from protobuf message <code>FinishChessRogueNousSubStoryScRsp</code>
 */
class FinishChessRogueNousSubStoryScRsp extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>uint32 bhondmalhbo = 12;</code>
     */
    protected $bhondmalhbo = 0;
    /**
     * Generated from protobuf field <code>uint32 retcode = 10;</code>
     */
    protected $retcode = 0;
    /**
     * Generated from protobuf field <code>uint32 cedpklpefmj = 9;</code>
     */
    protected $cedpklpefmj = 0;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type int $bhondmalhbo
     *     @type int $retcode
     *     @type int $cedpklpefmj
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\StarRail::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>uint32 bhondmalhbo = 12;</code>
     * @return int
     */
    public function getBhondmalhbo()
    {
        return $this->bhondmalhbo;
    }

    /**
     * Generated from protobuf field <code>uint32 bhondmalhbo = 12;</code>
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
     * Generated from protobuf field <code>uint32 retcode = 10;</code>
     * @return int
     */
    public function getRetcode()
    {
        return $this->retcode;
    }

    /**
     * Generated from protobuf field <code>uint32 retcode = 10;</code>
     * @param int $var
     * @return $this
     */
    public function setRetcode($var)
    {
        GPBUtil::checkUint32($var);
        $this->retcode = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>uint32 cedpklpefmj = 9;</code>
     * @return int
     */
    public function getCedpklpefmj()
    {
        return $this->cedpklpefmj;
    }

    /**
     * Generated from protobuf field <code>uint32 cedpklpefmj = 9;</code>
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

