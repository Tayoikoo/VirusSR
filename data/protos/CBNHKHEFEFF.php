<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# NO CHECKED-IN PROTOBUF GENCODE
# source: StarRail.proto

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>CBNHKHEFEFF</code>
 */
class CBNHKHEFEFF extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>uint32 FCAHIJPIIEB = 1;</code>
     */
    protected $FCAHIJPIIEB = 0;
    /**
     * Generated from protobuf field <code>.ECJBKGKPJCJ IHLDLJGDCBL = 11;</code>
     */
    protected $IHLDLJGDCBL = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type int $FCAHIJPIIEB
     *     @type \ECJBKGKPJCJ $IHLDLJGDCBL
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\StarRail::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>uint32 FCAHIJPIIEB = 1;</code>
     * @return int
     */
    public function getFCAHIJPIIEB()
    {
        return $this->FCAHIJPIIEB;
    }

    /**
     * Generated from protobuf field <code>uint32 FCAHIJPIIEB = 1;</code>
     * @param int $var
     * @return $this
     */
    public function setFCAHIJPIIEB($var)
    {
        GPBUtil::checkUint32($var);
        $this->FCAHIJPIIEB = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>.ECJBKGKPJCJ IHLDLJGDCBL = 11;</code>
     * @return \ECJBKGKPJCJ|null
     */
    public function getIHLDLJGDCBL()
    {
        return $this->IHLDLJGDCBL;
    }

    public function hasIHLDLJGDCBL()
    {
        return isset($this->IHLDLJGDCBL);
    }

    public function clearIHLDLJGDCBL()
    {
        unset($this->IHLDLJGDCBL);
    }

    /**
     * Generated from protobuf field <code>.ECJBKGKPJCJ IHLDLJGDCBL = 11;</code>
     * @param \ECJBKGKPJCJ $var
     * @return $this
     */
    public function setIHLDLJGDCBL($var)
    {
        GPBUtil::checkMessage($var, \ECJBKGKPJCJ::class);
        $this->IHLDLJGDCBL = $var;

        return $this;
    }

}
