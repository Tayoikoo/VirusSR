<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# NO CHECKED-IN PROTOBUF GENCODE
# source: StarRail.proto

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>KLIOLGAIKGL</code>
 */
class KLIOLGAIKGL extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>uint32 EAFCLNOFMHB = 4;</code>
     */
    protected $EAFCLNOFMHB = 0;
    /**
     * Generated from protobuf field <code>uint32 EHFNPFCACGJ = 8;</code>
     */
    protected $EHFNPFCACGJ = 0;
    /**
     * Generated from protobuf field <code>uint32 LGBJLFEMFOL = 9;</code>
     */
    protected $LGBJLFEMFOL = 0;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type int $EAFCLNOFMHB
     *     @type int $EHFNPFCACGJ
     *     @type int $LGBJLFEMFOL
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\StarRail::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>uint32 EAFCLNOFMHB = 4;</code>
     * @return int
     */
    public function getEAFCLNOFMHB()
    {
        return $this->EAFCLNOFMHB;
    }

    /**
     * Generated from protobuf field <code>uint32 EAFCLNOFMHB = 4;</code>
     * @param int $var
     * @return $this
     */
    public function setEAFCLNOFMHB($var)
    {
        GPBUtil::checkUint32($var);
        $this->EAFCLNOFMHB = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>uint32 EHFNPFCACGJ = 8;</code>
     * @return int
     */
    public function getEHFNPFCACGJ()
    {
        return $this->EHFNPFCACGJ;
    }

    /**
     * Generated from protobuf field <code>uint32 EHFNPFCACGJ = 8;</code>
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
     * Generated from protobuf field <code>uint32 LGBJLFEMFOL = 9;</code>
     * @return int
     */
    public function getLGBJLFEMFOL()
    {
        return $this->LGBJLFEMFOL;
    }

    /**
     * Generated from protobuf field <code>uint32 LGBJLFEMFOL = 9;</code>
     * @param int $var
     * @return $this
     */
    public function setLGBJLFEMFOL($var)
    {
        GPBUtil::checkUint32($var);
        $this->LGBJLFEMFOL = $var;

        return $this;
    }

}

