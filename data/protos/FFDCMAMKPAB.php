<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# NO CHECKED-IN PROTOBUF GENCODE
# source: StarRail.proto

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>FFDCMAMKPAB</code>
 */
class FFDCMAMKPAB extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>uint32 GPKEAKPHIPA = 7;</code>
     */
    protected $GPKEAKPHIPA = 0;
    /**
     * Generated from protobuf field <code>uint32 LKGNKMKFNIO = 3;</code>
     */
    protected $LKGNKMKFNIO = 0;
    /**
     * Generated from protobuf field <code>uint32 KNBAMKJEMFP = 10;</code>
     */
    protected $KNBAMKJEMFP = 0;
    /**
     * Generated from protobuf field <code>.KHBFGHPBACL JIKDFKJKKGM = 15;</code>
     */
    protected $JIKDFKJKKGM = 0;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type int $GPKEAKPHIPA
     *     @type int $LKGNKMKFNIO
     *     @type int $KNBAMKJEMFP
     *     @type int $JIKDFKJKKGM
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\StarRail::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>uint32 GPKEAKPHIPA = 7;</code>
     * @return int
     */
    public function getGPKEAKPHIPA()
    {
        return $this->GPKEAKPHIPA;
    }

    /**
     * Generated from protobuf field <code>uint32 GPKEAKPHIPA = 7;</code>
     * @param int $var
     * @return $this
     */
    public function setGPKEAKPHIPA($var)
    {
        GPBUtil::checkUint32($var);
        $this->GPKEAKPHIPA = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>uint32 LKGNKMKFNIO = 3;</code>
     * @return int
     */
    public function getLKGNKMKFNIO()
    {
        return $this->LKGNKMKFNIO;
    }

    /**
     * Generated from protobuf field <code>uint32 LKGNKMKFNIO = 3;</code>
     * @param int $var
     * @return $this
     */
    public function setLKGNKMKFNIO($var)
    {
        GPBUtil::checkUint32($var);
        $this->LKGNKMKFNIO = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>uint32 KNBAMKJEMFP = 10;</code>
     * @return int
     */
    public function getKNBAMKJEMFP()
    {
        return $this->KNBAMKJEMFP;
    }

    /**
     * Generated from protobuf field <code>uint32 KNBAMKJEMFP = 10;</code>
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
     * Generated from protobuf field <code>.KHBFGHPBACL JIKDFKJKKGM = 15;</code>
     * @return int
     */
    public function getJIKDFKJKKGM()
    {
        return $this->JIKDFKJKKGM;
    }

    /**
     * Generated from protobuf field <code>.KHBFGHPBACL JIKDFKJKKGM = 15;</code>
     * @param int $var
     * @return $this
     */
    public function setJIKDFKJKKGM($var)
    {
        GPBUtil::checkEnum($var, \KHBFGHPBACL::class);
        $this->JIKDFKJKKGM = $var;

        return $this;
    }

}
