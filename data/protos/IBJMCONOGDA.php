<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# NO CHECKED-IN PROTOBUF GENCODE
# source: StarRail.proto

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>IBJMCONOGDA</code>
 */
class IBJMCONOGDA extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>uint32 retcode = 14;</code>
     */
    protected $retcode = 0;
    /**
     * Generated from protobuf field <code>uint32 NKEANFPKDMN = 8;</code>
     */
    protected $NKEANFPKDMN = 0;
    /**
     * Generated from protobuf field <code>uint32 PGHNMIDJOAC = 9;</code>
     */
    protected $PGHNMIDJOAC = 0;
    /**
     * Generated from protobuf field <code>string EANJBBEKKII = 10;</code>
     */
    protected $EANJBBEKKII = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type int $retcode
     *     @type int $NKEANFPKDMN
     *     @type int $PGHNMIDJOAC
     *     @type string $EANJBBEKKII
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\StarRail::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>uint32 retcode = 14;</code>
     * @return int
     */
    public function getRetcode()
    {
        return $this->retcode;
    }

    /**
     * Generated from protobuf field <code>uint32 retcode = 14;</code>
     * @param int $var
     * @return $this
     */
    public function setRetcode($var)
    {
        GPBUtil::checkUint32($var);
        $this->retcode = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>uint32 NKEANFPKDMN = 8;</code>
     * @return int
     */
    public function getNKEANFPKDMN()
    {
        return $this->NKEANFPKDMN;
    }

    /**
     * Generated from protobuf field <code>uint32 NKEANFPKDMN = 8;</code>
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
     * Generated from protobuf field <code>uint32 PGHNMIDJOAC = 9;</code>
     * @return int
     */
    public function getPGHNMIDJOAC()
    {
        return $this->PGHNMIDJOAC;
    }

    /**
     * Generated from protobuf field <code>uint32 PGHNMIDJOAC = 9;</code>
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
     * Generated from protobuf field <code>string EANJBBEKKII = 10;</code>
     * @return string
     */
    public function getEANJBBEKKII()
    {
        return $this->EANJBBEKKII;
    }

    /**
     * Generated from protobuf field <code>string EANJBBEKKII = 10;</code>
     * @param string $var
     * @return $this
     */
    public function setEANJBBEKKII($var)
    {
        GPBUtil::checkString($var, True);
        $this->EANJBBEKKII = $var;

        return $this;
    }

}

