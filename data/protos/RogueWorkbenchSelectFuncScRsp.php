<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# NO CHECKED-IN PROTOBUF GENCODE
# source: StarRail.proto

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * HBHAPMDNBGB (5689)
 *
 * Generated from protobuf message <code>RogueWorkbenchSelectFuncScRsp</code>
 */
class RogueWorkbenchSelectFuncScRsp extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>uint32 retcode = 9;</code>
     */
    protected $retcode = 0;
    /**
     * Generated from protobuf field <code>uint32 cbahfgpjemp = 7;</code>
     */
    protected $cbahfgpjemp = 0;
    /**
     * Generated from protobuf field <code>.IIGDKLANFDC lipngbcpgon = 1;</code>
     */
    protected $lipngbcpgon = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type int $retcode
     *     @type int $cbahfgpjemp
     *     @type \IIGDKLANFDC $lipngbcpgon
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\StarRail::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>uint32 retcode = 9;</code>
     * @return int
     */
    public function getRetcode()
    {
        return $this->retcode;
    }

    /**
     * Generated from protobuf field <code>uint32 retcode = 9;</code>
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
     * Generated from protobuf field <code>uint32 cbahfgpjemp = 7;</code>
     * @return int
     */
    public function getCbahfgpjemp()
    {
        return $this->cbahfgpjemp;
    }

    /**
     * Generated from protobuf field <code>uint32 cbahfgpjemp = 7;</code>
     * @param int $var
     * @return $this
     */
    public function setCbahfgpjemp($var)
    {
        GPBUtil::checkUint32($var);
        $this->cbahfgpjemp = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>.IIGDKLANFDC lipngbcpgon = 1;</code>
     * @return \IIGDKLANFDC|null
     */
    public function getLipngbcpgon()
    {
        return $this->lipngbcpgon;
    }

    public function hasLipngbcpgon()
    {
        return isset($this->lipngbcpgon);
    }

    public function clearLipngbcpgon()
    {
        unset($this->lipngbcpgon);
    }

    /**
     * Generated from protobuf field <code>.IIGDKLANFDC lipngbcpgon = 1;</code>
     * @param \IIGDKLANFDC $var
     * @return $this
     */
    public function setLipngbcpgon($var)
    {
        GPBUtil::checkMessage($var, \IIGDKLANFDC::class);
        $this->lipngbcpgon = $var;

        return $this;
    }

}
