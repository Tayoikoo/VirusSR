<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# NO CHECKED-IN PROTOBUF GENCODE
# source: StarRail.proto

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>PAPOHMGJENI</code>
 */
class PAPOHMGJENI extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>.MAOMNIPPCDG KCCJCMEPHNC = 8;</code>
     */
    protected $KCCJCMEPHNC = 0;
    /**
     * Generated from protobuf field <code>uint32 PHJFNNJNADL = 9;</code>
     */
    protected $PHJFNNJNADL = 0;
    /**
     * Generated from protobuf field <code>uint32 MLEAOJNCEFO = 5;</code>
     */
    protected $MLEAOJNCEFO = 0;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type int $KCCJCMEPHNC
     *     @type int $PHJFNNJNADL
     *     @type int $MLEAOJNCEFO
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\StarRail::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>.MAOMNIPPCDG KCCJCMEPHNC = 8;</code>
     * @return int
     */
    public function getKCCJCMEPHNC()
    {
        return $this->KCCJCMEPHNC;
    }

    /**
     * Generated from protobuf field <code>.MAOMNIPPCDG KCCJCMEPHNC = 8;</code>
     * @param int $var
     * @return $this
     */
    public function setKCCJCMEPHNC($var)
    {
        GPBUtil::checkEnum($var, \MAOMNIPPCDG::class);
        $this->KCCJCMEPHNC = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>uint32 PHJFNNJNADL = 9;</code>
     * @return int
     */
    public function getPHJFNNJNADL()
    {
        return $this->PHJFNNJNADL;
    }

    /**
     * Generated from protobuf field <code>uint32 PHJFNNJNADL = 9;</code>
     * @param int $var
     * @return $this
     */
    public function setPHJFNNJNADL($var)
    {
        GPBUtil::checkUint32($var);
        $this->PHJFNNJNADL = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>uint32 MLEAOJNCEFO = 5;</code>
     * @return int
     */
    public function getMLEAOJNCEFO()
    {
        return $this->MLEAOJNCEFO;
    }

    /**
     * Generated from protobuf field <code>uint32 MLEAOJNCEFO = 5;</code>
     * @param int $var
     * @return $this
     */
    public function setMLEAOJNCEFO($var)
    {
        GPBUtil::checkUint32($var);
        $this->MLEAOJNCEFO = $var;

        return $this;
    }

}
