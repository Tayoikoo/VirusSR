<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# NO CHECKED-IN PROTOBUF GENCODE
# source: StarRail.proto

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>MAFOIHJJDDN</code>
 */
class MAFOIHJJDDN extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>.ILECGGEOCKN CIAGMLEDKNI = 6;</code>
     */
    protected $CIAGMLEDKNI = 0;
    /**
     * Generated from protobuf field <code>.MOCJBLJJEDO COLEFCFBMFL = 10;</code>
     */
    protected $COLEFCFBMFL = 0;
    /**
     * Generated from protobuf field <code>uint32 OMBLHJDKEJA = 13;</code>
     */
    protected $OMBLHJDKEJA = 0;
    /**
     * Generated from protobuf field <code>bool AEEEBFLDCBG = 9;</code>
     */
    protected $AEEEBFLDCBG = false;
    /**
     * Generated from protobuf field <code>uint32 LBHJLPCJDPA = 15;</code>
     */
    protected $LBHJLPCJDPA = 0;
    /**
     * Generated from protobuf field <code>uint32 LNGJKFGLHBE = 12;</code>
     */
    protected $LNGJKFGLHBE = 0;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type int $CIAGMLEDKNI
     *     @type int $COLEFCFBMFL
     *     @type int $OMBLHJDKEJA
     *     @type bool $AEEEBFLDCBG
     *     @type int $LBHJLPCJDPA
     *     @type int $LNGJKFGLHBE
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\StarRail::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>.ILECGGEOCKN CIAGMLEDKNI = 6;</code>
     * @return int
     */
    public function getCIAGMLEDKNI()
    {
        return $this->CIAGMLEDKNI;
    }

    /**
     * Generated from protobuf field <code>.ILECGGEOCKN CIAGMLEDKNI = 6;</code>
     * @param int $var
     * @return $this
     */
    public function setCIAGMLEDKNI($var)
    {
        GPBUtil::checkEnum($var, \ILECGGEOCKN::class);
        $this->CIAGMLEDKNI = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>.MOCJBLJJEDO COLEFCFBMFL = 10;</code>
     * @return int
     */
    public function getCOLEFCFBMFL()
    {
        return $this->COLEFCFBMFL;
    }

    /**
     * Generated from protobuf field <code>.MOCJBLJJEDO COLEFCFBMFL = 10;</code>
     * @param int $var
     * @return $this
     */
    public function setCOLEFCFBMFL($var)
    {
        GPBUtil::checkEnum($var, \MOCJBLJJEDO::class);
        $this->COLEFCFBMFL = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>uint32 OMBLHJDKEJA = 13;</code>
     * @return int
     */
    public function getOMBLHJDKEJA()
    {
        return $this->OMBLHJDKEJA;
    }

    /**
     * Generated from protobuf field <code>uint32 OMBLHJDKEJA = 13;</code>
     * @param int $var
     * @return $this
     */
    public function setOMBLHJDKEJA($var)
    {
        GPBUtil::checkUint32($var);
        $this->OMBLHJDKEJA = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>bool AEEEBFLDCBG = 9;</code>
     * @return bool
     */
    public function getAEEEBFLDCBG()
    {
        return $this->AEEEBFLDCBG;
    }

    /**
     * Generated from protobuf field <code>bool AEEEBFLDCBG = 9;</code>
     * @param bool $var
     * @return $this
     */
    public function setAEEEBFLDCBG($var)
    {
        GPBUtil::checkBool($var);
        $this->AEEEBFLDCBG = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>uint32 LBHJLPCJDPA = 15;</code>
     * @return int
     */
    public function getLBHJLPCJDPA()
    {
        return $this->LBHJLPCJDPA;
    }

    /**
     * Generated from protobuf field <code>uint32 LBHJLPCJDPA = 15;</code>
     * @param int $var
     * @return $this
     */
    public function setLBHJLPCJDPA($var)
    {
        GPBUtil::checkUint32($var);
        $this->LBHJLPCJDPA = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>uint32 LNGJKFGLHBE = 12;</code>
     * @return int
     */
    public function getLNGJKFGLHBE()
    {
        return $this->LNGJKFGLHBE;
    }

    /**
     * Generated from protobuf field <code>uint32 LNGJKFGLHBE = 12;</code>
     * @param int $var
     * @return $this
     */
    public function setLNGJKFGLHBE($var)
    {
        GPBUtil::checkUint32($var);
        $this->LNGJKFGLHBE = $var;

        return $this;
    }

}

