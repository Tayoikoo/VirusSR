<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# NO CHECKED-IN PROTOBUF GENCODE
# source: StarRail.proto

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>EAEOIGDLADM</code>
 */
class EAEOIGDLADM extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>uint32 LJJHBMHGNBL = 5;</code>
     */
    protected $LJJHBMHGNBL = 0;
    /**
     * Generated from protobuf field <code>uint32 NHIEMDHCMOE = 4;</code>
     */
    protected $NHIEMDHCMOE = 0;
    /**
     * Generated from protobuf field <code>uint32 OFGKGCHGECA = 13;</code>
     */
    protected $OFGKGCHGECA = 0;
    /**
     * Generated from protobuf field <code>uint32 OOHGFCAKDOI = 1;</code>
     */
    protected $OOHGFCAKDOI = 0;
    /**
     * Generated from protobuf field <code>uint32 LGGDDDLGLIG = 6;</code>
     */
    protected $LGGDDDLGLIG = 0;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type int $LJJHBMHGNBL
     *     @type int $NHIEMDHCMOE
     *     @type int $OFGKGCHGECA
     *     @type int $OOHGFCAKDOI
     *     @type int $LGGDDDLGLIG
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\StarRail::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>uint32 LJJHBMHGNBL = 5;</code>
     * @return int
     */
    public function getLJJHBMHGNBL()
    {
        return $this->LJJHBMHGNBL;
    }

    /**
     * Generated from protobuf field <code>uint32 LJJHBMHGNBL = 5;</code>
     * @param int $var
     * @return $this
     */
    public function setLJJHBMHGNBL($var)
    {
        GPBUtil::checkUint32($var);
        $this->LJJHBMHGNBL = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>uint32 NHIEMDHCMOE = 4;</code>
     * @return int
     */
    public function getNHIEMDHCMOE()
    {
        return $this->NHIEMDHCMOE;
    }

    /**
     * Generated from protobuf field <code>uint32 NHIEMDHCMOE = 4;</code>
     * @param int $var
     * @return $this
     */
    public function setNHIEMDHCMOE($var)
    {
        GPBUtil::checkUint32($var);
        $this->NHIEMDHCMOE = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>uint32 OFGKGCHGECA = 13;</code>
     * @return int
     */
    public function getOFGKGCHGECA()
    {
        return $this->OFGKGCHGECA;
    }

    /**
     * Generated from protobuf field <code>uint32 OFGKGCHGECA = 13;</code>
     * @param int $var
     * @return $this
     */
    public function setOFGKGCHGECA($var)
    {
        GPBUtil::checkUint32($var);
        $this->OFGKGCHGECA = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>uint32 OOHGFCAKDOI = 1;</code>
     * @return int
     */
    public function getOOHGFCAKDOI()
    {
        return $this->OOHGFCAKDOI;
    }

    /**
     * Generated from protobuf field <code>uint32 OOHGFCAKDOI = 1;</code>
     * @param int $var
     * @return $this
     */
    public function setOOHGFCAKDOI($var)
    {
        GPBUtil::checkUint32($var);
        $this->OOHGFCAKDOI = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>uint32 LGGDDDLGLIG = 6;</code>
     * @return int
     */
    public function getLGGDDDLGLIG()
    {
        return $this->LGGDDDLGLIG;
    }

    /**
     * Generated from protobuf field <code>uint32 LGGDDDLGLIG = 6;</code>
     * @param int $var
     * @return $this
     */
    public function setLGGDDDLGLIG($var)
    {
        GPBUtil::checkUint32($var);
        $this->LGGDDDLGLIG = $var;

        return $this;
    }

}
