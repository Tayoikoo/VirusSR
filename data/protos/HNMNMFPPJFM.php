<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# NO CHECKED-IN PROTOBUF GENCODE
# source: StarRail.proto

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>HNMNMFPPJFM</code>
 */
class HNMNMFPPJFM extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>.HBHBAOCCHDF MLPHBCLBCIP = 7;</code>
     */
    protected $MLPHBCLBCIP = null;
    /**
     * Generated from protobuf field <code>uint32 HEIKPMBPICB = 11;</code>
     */
    protected $HEIKPMBPICB = 0;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \HBHBAOCCHDF $MLPHBCLBCIP
     *     @type int $HEIKPMBPICB
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\StarRail::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>.HBHBAOCCHDF MLPHBCLBCIP = 7;</code>
     * @return \HBHBAOCCHDF|null
     */
    public function getMLPHBCLBCIP()
    {
        return $this->MLPHBCLBCIP;
    }

    public function hasMLPHBCLBCIP()
    {
        return isset($this->MLPHBCLBCIP);
    }

    public function clearMLPHBCLBCIP()
    {
        unset($this->MLPHBCLBCIP);
    }

    /**
     * Generated from protobuf field <code>.HBHBAOCCHDF MLPHBCLBCIP = 7;</code>
     * @param \HBHBAOCCHDF $var
     * @return $this
     */
    public function setMLPHBCLBCIP($var)
    {
        GPBUtil::checkMessage($var, \HBHBAOCCHDF::class);
        $this->MLPHBCLBCIP = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>uint32 HEIKPMBPICB = 11;</code>
     * @return int
     */
    public function getHEIKPMBPICB()
    {
        return $this->HEIKPMBPICB;
    }

    /**
     * Generated from protobuf field <code>uint32 HEIKPMBPICB = 11;</code>
     * @param int $var
     * @return $this
     */
    public function setHEIKPMBPICB($var)
    {
        GPBUtil::checkUint32($var);
        $this->HEIKPMBPICB = $var;

        return $this;
    }

}

