<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# NO CHECKED-IN PROTOBUF GENCODE
# source: StarRail.proto

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>MJKBNJAKOJH</code>
 */
class MJKBNJAKOJH extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>.HCAEMAPAEGN ONGDCBBDNGB = 15;</code>
     */
    protected $ONGDCBBDNGB = null;
    /**
     * Generated from protobuf field <code>.OPFGFMECLBE ILIOLNDJHCN = 10;</code>
     */
    protected $ILIOLNDJHCN = null;
    /**
     * Generated from protobuf field <code>uint32 KNPFNNGBAIC = 5;</code>
     */
    protected $KNPFNNGBAIC = 0;
    /**
     * Generated from protobuf field <code>.KIBHPLLKFAM POAFBAKKLJI = 7;</code>
     */
    protected $POAFBAKKLJI = null;
    /**
     * Generated from protobuf field <code>.EJJBPHADAOC FEOIPHDDMDH = 4;</code>
     */
    protected $FEOIPHDDMDH = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \HCAEMAPAEGN $ONGDCBBDNGB
     *     @type \OPFGFMECLBE $ILIOLNDJHCN
     *     @type int $KNPFNNGBAIC
     *     @type \KIBHPLLKFAM $POAFBAKKLJI
     *     @type \EJJBPHADAOC $FEOIPHDDMDH
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\StarRail::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>.HCAEMAPAEGN ONGDCBBDNGB = 15;</code>
     * @return \HCAEMAPAEGN|null
     */
    public function getONGDCBBDNGB()
    {
        return $this->ONGDCBBDNGB;
    }

    public function hasONGDCBBDNGB()
    {
        return isset($this->ONGDCBBDNGB);
    }

    public function clearONGDCBBDNGB()
    {
        unset($this->ONGDCBBDNGB);
    }

    /**
     * Generated from protobuf field <code>.HCAEMAPAEGN ONGDCBBDNGB = 15;</code>
     * @param \HCAEMAPAEGN $var
     * @return $this
     */
    public function setONGDCBBDNGB($var)
    {
        GPBUtil::checkMessage($var, \HCAEMAPAEGN::class);
        $this->ONGDCBBDNGB = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>.OPFGFMECLBE ILIOLNDJHCN = 10;</code>
     * @return \OPFGFMECLBE|null
     */
    public function getILIOLNDJHCN()
    {
        return $this->ILIOLNDJHCN;
    }

    public function hasILIOLNDJHCN()
    {
        return isset($this->ILIOLNDJHCN);
    }

    public function clearILIOLNDJHCN()
    {
        unset($this->ILIOLNDJHCN);
    }

    /**
     * Generated from protobuf field <code>.OPFGFMECLBE ILIOLNDJHCN = 10;</code>
     * @param \OPFGFMECLBE $var
     * @return $this
     */
    public function setILIOLNDJHCN($var)
    {
        GPBUtil::checkMessage($var, \OPFGFMECLBE::class);
        $this->ILIOLNDJHCN = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>uint32 KNPFNNGBAIC = 5;</code>
     * @return int
     */
    public function getKNPFNNGBAIC()
    {
        return $this->KNPFNNGBAIC;
    }

    /**
     * Generated from protobuf field <code>uint32 KNPFNNGBAIC = 5;</code>
     * @param int $var
     * @return $this
     */
    public function setKNPFNNGBAIC($var)
    {
        GPBUtil::checkUint32($var);
        $this->KNPFNNGBAIC = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>.KIBHPLLKFAM POAFBAKKLJI = 7;</code>
     * @return \KIBHPLLKFAM|null
     */
    public function getPOAFBAKKLJI()
    {
        return $this->POAFBAKKLJI;
    }

    public function hasPOAFBAKKLJI()
    {
        return isset($this->POAFBAKKLJI);
    }

    public function clearPOAFBAKKLJI()
    {
        unset($this->POAFBAKKLJI);
    }

    /**
     * Generated from protobuf field <code>.KIBHPLLKFAM POAFBAKKLJI = 7;</code>
     * @param \KIBHPLLKFAM $var
     * @return $this
     */
    public function setPOAFBAKKLJI($var)
    {
        GPBUtil::checkMessage($var, \KIBHPLLKFAM::class);
        $this->POAFBAKKLJI = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>.EJJBPHADAOC FEOIPHDDMDH = 4;</code>
     * @return \EJJBPHADAOC|null
     */
    public function getFEOIPHDDMDH()
    {
        return $this->FEOIPHDDMDH;
    }

    public function hasFEOIPHDDMDH()
    {
        return isset($this->FEOIPHDDMDH);
    }

    public function clearFEOIPHDDMDH()
    {
        unset($this->FEOIPHDDMDH);
    }

    /**
     * Generated from protobuf field <code>.EJJBPHADAOC FEOIPHDDMDH = 4;</code>
     * @param \EJJBPHADAOC $var
     * @return $this
     */
    public function setFEOIPHDDMDH($var)
    {
        GPBUtil::checkMessage($var, \EJJBPHADAOC::class);
        $this->FEOIPHDDMDH = $var;

        return $this;
    }

}

