<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# NO CHECKED-IN PROTOBUF GENCODE
# source: StarRail.proto

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>AGCPKKEONOO</code>
 */
class AGCPKKEONOO extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>.KIIGOOGKAGC JNILGIBNCAO = 3;</code>
     */
    protected $JNILGIBNCAO = null;
    /**
     * Generated from protobuf field <code>.FOBDDFLBEBP EGOHGFDMFBF = 7;</code>
     */
    protected $EGOHGFDMFBF = null;
    /**
     * Generated from protobuf field <code>.MLHHEHMBHFD CLMNPBBLEKL = 4;</code>
     */
    protected $CLMNPBBLEKL = null;
    protected $HMANCHJJDIK;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \FFOOKABHHFF $bnckkfjmgai
     *     @type \EBFJCBGDCFL $mobpgidpgag
     *     @type \KIIGOOGKAGC $JNILGIBNCAO
     *     @type \FOBDDFLBEBP $EGOHGFDMFBF
     *     @type \MLHHEHMBHFD $CLMNPBBLEKL
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\StarRail::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>.FFOOKABHHFF bnckkfjmgai = 1221;</code>
     * @return \FFOOKABHHFF|null
     */
    public function getBnckkfjmgai()
    {
        return $this->readOneof(1221);
    }

    public function hasBnckkfjmgai()
    {
        return $this->hasOneof(1221);
    }

    /**
     * Generated from protobuf field <code>.FFOOKABHHFF bnckkfjmgai = 1221;</code>
     * @param \FFOOKABHHFF $var
     * @return $this
     */
    public function setBnckkfjmgai($var)
    {
        GPBUtil::checkMessage($var, \FFOOKABHHFF::class);
        $this->writeOneof(1221, $var);

        return $this;
    }

    /**
     * Generated from protobuf field <code>.EBFJCBGDCFL mobpgidpgag = 1682;</code>
     * @return \EBFJCBGDCFL|null
     */
    public function getMobpgidpgag()
    {
        return $this->readOneof(1682);
    }

    public function hasMobpgidpgag()
    {
        return $this->hasOneof(1682);
    }

    /**
     * Generated from protobuf field <code>.EBFJCBGDCFL mobpgidpgag = 1682;</code>
     * @param \EBFJCBGDCFL $var
     * @return $this
     */
    public function setMobpgidpgag($var)
    {
        GPBUtil::checkMessage($var, \EBFJCBGDCFL::class);
        $this->writeOneof(1682, $var);

        return $this;
    }

    /**
     * Generated from protobuf field <code>.KIIGOOGKAGC JNILGIBNCAO = 3;</code>
     * @return \KIIGOOGKAGC|null
     */
    public function getJNILGIBNCAO()
    {
        return $this->JNILGIBNCAO;
    }

    public function hasJNILGIBNCAO()
    {
        return isset($this->JNILGIBNCAO);
    }

    public function clearJNILGIBNCAO()
    {
        unset($this->JNILGIBNCAO);
    }

    /**
     * Generated from protobuf field <code>.KIIGOOGKAGC JNILGIBNCAO = 3;</code>
     * @param \KIIGOOGKAGC $var
     * @return $this
     */
    public function setJNILGIBNCAO($var)
    {
        GPBUtil::checkMessage($var, \KIIGOOGKAGC::class);
        $this->JNILGIBNCAO = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>.FOBDDFLBEBP EGOHGFDMFBF = 7;</code>
     * @return \FOBDDFLBEBP|null
     */
    public function getEGOHGFDMFBF()
    {
        return $this->EGOHGFDMFBF;
    }

    public function hasEGOHGFDMFBF()
    {
        return isset($this->EGOHGFDMFBF);
    }

    public function clearEGOHGFDMFBF()
    {
        unset($this->EGOHGFDMFBF);
    }

    /**
     * Generated from protobuf field <code>.FOBDDFLBEBP EGOHGFDMFBF = 7;</code>
     * @param \FOBDDFLBEBP $var
     * @return $this
     */
    public function setEGOHGFDMFBF($var)
    {
        GPBUtil::checkMessage($var, \FOBDDFLBEBP::class);
        $this->EGOHGFDMFBF = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>.MLHHEHMBHFD CLMNPBBLEKL = 4;</code>
     * @return \MLHHEHMBHFD|null
     */
    public function getCLMNPBBLEKL()
    {
        return $this->CLMNPBBLEKL;
    }

    public function hasCLMNPBBLEKL()
    {
        return isset($this->CLMNPBBLEKL);
    }

    public function clearCLMNPBBLEKL()
    {
        unset($this->CLMNPBBLEKL);
    }

    /**
     * Generated from protobuf field <code>.MLHHEHMBHFD CLMNPBBLEKL = 4;</code>
     * @param \MLHHEHMBHFD $var
     * @return $this
     */
    public function setCLMNPBBLEKL($var)
    {
        GPBUtil::checkMessage($var, \MLHHEHMBHFD::class);
        $this->CLMNPBBLEKL = $var;

        return $this;
    }

    /**
     * @return string
     */
    public function getHMANCHJJDIK()
    {
        return $this->whichOneof("HMANCHJJDIK");
    }

}
