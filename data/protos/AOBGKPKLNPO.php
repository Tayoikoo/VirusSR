<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# NO CHECKED-IN PROTOBUF GENCODE
# source: StarRail.proto

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>AOBGKPKLNPO</code>
 */
class AOBGKPKLNPO extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>.GBGMBGHODGP NDKMFAJOOPG = 14;</code>
     */
    protected $NDKMFAJOOPG = null;
    /**
     * Generated from protobuf field <code>.BOIFNIIGMJG JEBIMAKIPGF = 13;</code>
     */
    protected $JEBIMAKIPGF = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \GBGMBGHODGP $NDKMFAJOOPG
     *     @type \BOIFNIIGMJG $JEBIMAKIPGF
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\StarRail::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>.GBGMBGHODGP NDKMFAJOOPG = 14;</code>
     * @return \GBGMBGHODGP|null
     */
    public function getNDKMFAJOOPG()
    {
        return $this->NDKMFAJOOPG;
    }

    public function hasNDKMFAJOOPG()
    {
        return isset($this->NDKMFAJOOPG);
    }

    public function clearNDKMFAJOOPG()
    {
        unset($this->NDKMFAJOOPG);
    }

    /**
     * Generated from protobuf field <code>.GBGMBGHODGP NDKMFAJOOPG = 14;</code>
     * @param \GBGMBGHODGP $var
     * @return $this
     */
    public function setNDKMFAJOOPG($var)
    {
        GPBUtil::checkMessage($var, \GBGMBGHODGP::class);
        $this->NDKMFAJOOPG = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>.BOIFNIIGMJG JEBIMAKIPGF = 13;</code>
     * @return \BOIFNIIGMJG|null
     */
    public function getJEBIMAKIPGF()
    {
        return $this->JEBIMAKIPGF;
    }

    public function hasJEBIMAKIPGF()
    {
        return isset($this->JEBIMAKIPGF);
    }

    public function clearJEBIMAKIPGF()
    {
        unset($this->JEBIMAKIPGF);
    }

    /**
     * Generated from protobuf field <code>.BOIFNIIGMJG JEBIMAKIPGF = 13;</code>
     * @param \BOIFNIIGMJG $var
     * @return $this
     */
    public function setJEBIMAKIPGF($var)
    {
        GPBUtil::checkMessage($var, \BOIFNIIGMJG::class);
        $this->JEBIMAKIPGF = $var;

        return $this;
    }

}
