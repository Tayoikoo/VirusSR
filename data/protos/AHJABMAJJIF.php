<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# NO CHECKED-IN PROTOBUF GENCODE
# source: StarRail.proto

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>AHJABMAJJIF</code>
 */
class AHJABMAJJIF extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>uint32 PGHNMIDJOAC = 8;</code>
     */
    protected $PGHNMIDJOAC = 0;
    /**
     * Generated from protobuf field <code>string EANJBBEKKII = 6;</code>
     */
    protected $EANJBBEKKII = '';
    /**
     * Generated from protobuf field <code>uint32 NKEANFPKDMN = 15;</code>
     */
    protected $NKEANFPKDMN = 0;
    /**
     * Generated from protobuf field <code>uint32 JFELPOKMMOA = 12;</code>
     */
    protected $JFELPOKMMOA = 0;
    /**
     * Generated from protobuf field <code>string FANNOHCHAMP = 4;</code>
     */
    protected $FANNOHCHAMP = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type int $PGHNMIDJOAC
     *     @type string $EANJBBEKKII
     *     @type int $NKEANFPKDMN
     *     @type int $JFELPOKMMOA
     *     @type string $FANNOHCHAMP
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\StarRail::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>uint32 PGHNMIDJOAC = 8;</code>
     * @return int
     */
    public function getPGHNMIDJOAC()
    {
        return $this->PGHNMIDJOAC;
    }

    /**
     * Generated from protobuf field <code>uint32 PGHNMIDJOAC = 8;</code>
     * @param int $var
     * @return $this
     */
    public function setPGHNMIDJOAC($var)
    {
        GPBUtil::checkUint32($var);
        $this->PGHNMIDJOAC = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>string EANJBBEKKII = 6;</code>
     * @return string
     */
    public function getEANJBBEKKII()
    {
        return $this->EANJBBEKKII;
    }

    /**
     * Generated from protobuf field <code>string EANJBBEKKII = 6;</code>
     * @param string $var
     * @return $this
     */
    public function setEANJBBEKKII($var)
    {
        GPBUtil::checkString($var, True);
        $this->EANJBBEKKII = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>uint32 NKEANFPKDMN = 15;</code>
     * @return int
     */
    public function getNKEANFPKDMN()
    {
        return $this->NKEANFPKDMN;
    }

    /**
     * Generated from protobuf field <code>uint32 NKEANFPKDMN = 15;</code>
     * @param int $var
     * @return $this
     */
    public function setNKEANFPKDMN($var)
    {
        GPBUtil::checkUint32($var);
        $this->NKEANFPKDMN = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>uint32 JFELPOKMMOA = 12;</code>
     * @return int
     */
    public function getJFELPOKMMOA()
    {
        return $this->JFELPOKMMOA;
    }

    /**
     * Generated from protobuf field <code>uint32 JFELPOKMMOA = 12;</code>
     * @param int $var
     * @return $this
     */
    public function setJFELPOKMMOA($var)
    {
        GPBUtil::checkUint32($var);
        $this->JFELPOKMMOA = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>string FANNOHCHAMP = 4;</code>
     * @return string
     */
    public function getFANNOHCHAMP()
    {
        return $this->FANNOHCHAMP;
    }

    /**
     * Generated from protobuf field <code>string FANNOHCHAMP = 4;</code>
     * @param string $var
     * @return $this
     */
    public function setFANNOHCHAMP($var)
    {
        GPBUtil::checkString($var, True);
        $this->FANNOHCHAMP = $var;

        return $this;
    }

}
