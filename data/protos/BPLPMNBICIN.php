<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# NO CHECKED-IN PROTOBUF GENCODE
# source: StarRail.proto

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>BPLPMNBICIN</code>
 */
class BPLPMNBICIN extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>.BIFPDOCGFLC KCNBPDMKBOG = 6;</code>
     */
    protected $KCNBPDMKBOG = null;
    /**
     * Generated from protobuf field <code>.ItemList AJOHOAICBFD = 5;</code>
     */
    protected $AJOHOAICBFD = null;
    /**
     * Generated from protobuf field <code>uint32 retcode = 10;</code>
     */
    protected $retcode = 0;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \BIFPDOCGFLC $KCNBPDMKBOG
     *     @type \ItemList $AJOHOAICBFD
     *     @type int $retcode
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\StarRail::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>.BIFPDOCGFLC KCNBPDMKBOG = 6;</code>
     * @return \BIFPDOCGFLC|null
     */
    public function getKCNBPDMKBOG()
    {
        return $this->KCNBPDMKBOG;
    }

    public function hasKCNBPDMKBOG()
    {
        return isset($this->KCNBPDMKBOG);
    }

    public function clearKCNBPDMKBOG()
    {
        unset($this->KCNBPDMKBOG);
    }

    /**
     * Generated from protobuf field <code>.BIFPDOCGFLC KCNBPDMKBOG = 6;</code>
     * @param \BIFPDOCGFLC $var
     * @return $this
     */
    public function setKCNBPDMKBOG($var)
    {
        GPBUtil::checkMessage($var, \BIFPDOCGFLC::class);
        $this->KCNBPDMKBOG = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>.ItemList AJOHOAICBFD = 5;</code>
     * @return \ItemList|null
     */
    public function getAJOHOAICBFD()
    {
        return $this->AJOHOAICBFD;
    }

    public function hasAJOHOAICBFD()
    {
        return isset($this->AJOHOAICBFD);
    }

    public function clearAJOHOAICBFD()
    {
        unset($this->AJOHOAICBFD);
    }

    /**
     * Generated from protobuf field <code>.ItemList AJOHOAICBFD = 5;</code>
     * @param \ItemList $var
     * @return $this
     */
    public function setAJOHOAICBFD($var)
    {
        GPBUtil::checkMessage($var, \ItemList::class);
        $this->AJOHOAICBFD = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>uint32 retcode = 10;</code>
     * @return int
     */
    public function getRetcode()
    {
        return $this->retcode;
    }

    /**
     * Generated from protobuf field <code>uint32 retcode = 10;</code>
     * @param int $var
     * @return $this
     */
    public function setRetcode($var)
    {
        GPBUtil::checkUint32($var);
        $this->retcode = $var;

        return $this;
    }

}

