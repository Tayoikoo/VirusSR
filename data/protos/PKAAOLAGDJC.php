<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# NO CHECKED-IN PROTOBUF GENCODE
# source: StarRail.proto

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>PKAAOLAGDJC</code>
 */
class PKAAOLAGDJC extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>uint32 EHFNPFCACGJ = 15;</code>
     */
    protected $EHFNPFCACGJ = 0;
    /**
     * Generated from protobuf field <code>.CLILPLKGFDM LIPJJJKALKB = 8;</code>
     */
    protected $LIPJJJKALKB = 0;
    /**
     * Generated from protobuf field <code>uint32 EAFCLNOFMHB = 12;</code>
     */
    protected $EAFCLNOFMHB = 0;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type int $EHFNPFCACGJ
     *     @type int $LIPJJJKALKB
     *     @type int $EAFCLNOFMHB
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\StarRail::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>uint32 EHFNPFCACGJ = 15;</code>
     * @return int
     */
    public function getEHFNPFCACGJ()
    {
        return $this->EHFNPFCACGJ;
    }

    /**
     * Generated from protobuf field <code>uint32 EHFNPFCACGJ = 15;</code>
     * @param int $var
     * @return $this
     */
    public function setEHFNPFCACGJ($var)
    {
        GPBUtil::checkUint32($var);
        $this->EHFNPFCACGJ = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>.CLILPLKGFDM LIPJJJKALKB = 8;</code>
     * @return int
     */
    public function getLIPJJJKALKB()
    {
        return $this->LIPJJJKALKB;
    }

    /**
     * Generated from protobuf field <code>.CLILPLKGFDM LIPJJJKALKB = 8;</code>
     * @param int $var
     * @return $this
     */
    public function setLIPJJJKALKB($var)
    {
        GPBUtil::checkEnum($var, \CLILPLKGFDM::class);
        $this->LIPJJJKALKB = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>uint32 EAFCLNOFMHB = 12;</code>
     * @return int
     */
    public function getEAFCLNOFMHB()
    {
        return $this->EAFCLNOFMHB;
    }

    /**
     * Generated from protobuf field <code>uint32 EAFCLNOFMHB = 12;</code>
     * @param int $var
     * @return $this
     */
    public function setEAFCLNOFMHB($var)
    {
        GPBUtil::checkUint32($var);
        $this->EAFCLNOFMHB = $var;

        return $this;
    }

}

