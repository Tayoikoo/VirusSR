<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# NO CHECKED-IN PROTOBUF GENCODE
# source: StarRail.proto

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>EFMAHDIBNJO</code>
 */
class EFMAHDIBNJO extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>uint32 ILIFHHJFMIH = 6;</code>
     */
    protected $ILIFHHJFMIH = 0;
    /**
     * Generated from protobuf field <code>int32 GMCBMDCOGGO = 15;</code>
     */
    protected $GMCBMDCOGGO = 0;
    /**
     * Generated from protobuf field <code>string LBLFEKKPCNC = 10;</code>
     */
    protected $LBLFEKKPCNC = '';
    /**
     * Generated from protobuf field <code>uint32 PMCIJKIINJL = 4;</code>
     */
    protected $PMCIJKIINJL = 0;
    /**
     * Generated from protobuf field <code>uint32 floor_id = 9;</code>
     */
    protected $floor_id = 0;
    /**
     * Generated from protobuf field <code>int32 GODEPPFKMNP = 13;</code>
     */
    protected $GODEPPFKMNP = 0;
    /**
     * Generated from protobuf field <code>uint32 retcode = 5;</code>
     */
    protected $retcode = 0;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type int $ILIFHHJFMIH
     *     @type int $GMCBMDCOGGO
     *     @type string $LBLFEKKPCNC
     *     @type int $PMCIJKIINJL
     *     @type int $floor_id
     *     @type int $GODEPPFKMNP
     *     @type int $retcode
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\StarRail::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>uint32 ILIFHHJFMIH = 6;</code>
     * @return int
     */
    public function getILIFHHJFMIH()
    {
        return $this->ILIFHHJFMIH;
    }

    /**
     * Generated from protobuf field <code>uint32 ILIFHHJFMIH = 6;</code>
     * @param int $var
     * @return $this
     */
    public function setILIFHHJFMIH($var)
    {
        GPBUtil::checkUint32($var);
        $this->ILIFHHJFMIH = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>int32 GMCBMDCOGGO = 15;</code>
     * @return int
     */
    public function getGMCBMDCOGGO()
    {
        return $this->GMCBMDCOGGO;
    }

    /**
     * Generated from protobuf field <code>int32 GMCBMDCOGGO = 15;</code>
     * @param int $var
     * @return $this
     */
    public function setGMCBMDCOGGO($var)
    {
        GPBUtil::checkInt32($var);
        $this->GMCBMDCOGGO = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>string LBLFEKKPCNC = 10;</code>
     * @return string
     */
    public function getLBLFEKKPCNC()
    {
        return $this->LBLFEKKPCNC;
    }

    /**
     * Generated from protobuf field <code>string LBLFEKKPCNC = 10;</code>
     * @param string $var
     * @return $this
     */
    public function setLBLFEKKPCNC($var)
    {
        GPBUtil::checkString($var, True);
        $this->LBLFEKKPCNC = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>uint32 PMCIJKIINJL = 4;</code>
     * @return int
     */
    public function getPMCIJKIINJL()
    {
        return $this->PMCIJKIINJL;
    }

    /**
     * Generated from protobuf field <code>uint32 PMCIJKIINJL = 4;</code>
     * @param int $var
     * @return $this
     */
    public function setPMCIJKIINJL($var)
    {
        GPBUtil::checkUint32($var);
        $this->PMCIJKIINJL = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>uint32 floor_id = 9;</code>
     * @return int
     */
    public function getFloorId()
    {
        return $this->floor_id;
    }

    /**
     * Generated from protobuf field <code>uint32 floor_id = 9;</code>
     * @param int $var
     * @return $this
     */
    public function setFloorId($var)
    {
        GPBUtil::checkUint32($var);
        $this->floor_id = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>int32 GODEPPFKMNP = 13;</code>
     * @return int
     */
    public function getGODEPPFKMNP()
    {
        return $this->GODEPPFKMNP;
    }

    /**
     * Generated from protobuf field <code>int32 GODEPPFKMNP = 13;</code>
     * @param int $var
     * @return $this
     */
    public function setGODEPPFKMNP($var)
    {
        GPBUtil::checkInt32($var);
        $this->GODEPPFKMNP = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>uint32 retcode = 5;</code>
     * @return int
     */
    public function getRetcode()
    {
        return $this->retcode;
    }

    /**
     * Generated from protobuf field <code>uint32 retcode = 5;</code>
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
