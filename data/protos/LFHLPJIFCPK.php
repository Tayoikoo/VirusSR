<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# NO CHECKED-IN PROTOBUF GENCODE
# source: StarRail.proto

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>LFHLPJIFCPK</code>
 */
class LFHLPJIFCPK extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>.FEJANODACCD JIKDFKJKKGM = 5;</code>
     */
    protected $JIKDFKJKKGM = 0;
    /**
     * Generated from protobuf field <code>uint32 KNBAMKJEMFP = 1;</code>
     */
    protected $KNBAMKJEMFP = 0;
    /**
     * Generated from protobuf field <code>uint32 DPDAJBHIFLB = 3;</code>
     */
    protected $DPDAJBHIFLB = 0;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type int $JIKDFKJKKGM
     *     @type int $KNBAMKJEMFP
     *     @type int $DPDAJBHIFLB
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\StarRail::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>.FEJANODACCD JIKDFKJKKGM = 5;</code>
     * @return int
     */
    public function getJIKDFKJKKGM()
    {
        return $this->JIKDFKJKKGM;
    }

    /**
     * Generated from protobuf field <code>.FEJANODACCD JIKDFKJKKGM = 5;</code>
     * @param int $var
     * @return $this
     */
    public function setJIKDFKJKKGM($var)
    {
        GPBUtil::checkEnum($var, \FEJANODACCD::class);
        $this->JIKDFKJKKGM = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>uint32 KNBAMKJEMFP = 1;</code>
     * @return int
     */
    public function getKNBAMKJEMFP()
    {
        return $this->KNBAMKJEMFP;
    }

    /**
     * Generated from protobuf field <code>uint32 KNBAMKJEMFP = 1;</code>
     * @param int $var
     * @return $this
     */
    public function setKNBAMKJEMFP($var)
    {
        GPBUtil::checkUint32($var);
        $this->KNBAMKJEMFP = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>uint32 DPDAJBHIFLB = 3;</code>
     * @return int
     */
    public function getDPDAJBHIFLB()
    {
        return $this->DPDAJBHIFLB;
    }

    /**
     * Generated from protobuf field <code>uint32 DPDAJBHIFLB = 3;</code>
     * @param int $var
     * @return $this
     */
    public function setDPDAJBHIFLB($var)
    {
        GPBUtil::checkUint32($var);
        $this->DPDAJBHIFLB = $var;

        return $this;
    }

}
