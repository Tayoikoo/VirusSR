<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# NO CHECKED-IN PROTOBUF GENCODE
# source: StarRail.proto

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>MOIOACLAJHI</code>
 */
class MOIOACLAJHI extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>uint32 retcode = 2;</code>
     */
    protected $retcode = 0;
    /**
     * Generated from protobuf field <code>uint32 PGHAPHCHHDA = 13;</code>
     */
    protected $PGHAPHCHHDA = 0;
    /**
     * Generated from protobuf field <code>uint32 LBMIPLJOCFE = 15;</code>
     */
    protected $LBMIPLJOCFE = 0;
    /**
     * Generated from protobuf field <code>uint32 IBGBNAJCIHD = 3;</code>
     */
    protected $IBGBNAJCIHD = 0;
    /**
     * Generated from protobuf field <code>uint32 ICCDOBIGCLN = 4;</code>
     */
    protected $ICCDOBIGCLN = 0;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type int $retcode
     *     @type int $PGHAPHCHHDA
     *     @type int $LBMIPLJOCFE
     *     @type int $IBGBNAJCIHD
     *     @type int $ICCDOBIGCLN
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\StarRail::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>uint32 retcode = 2;</code>
     * @return int
     */
    public function getRetcode()
    {
        return $this->retcode;
    }

    /**
     * Generated from protobuf field <code>uint32 retcode = 2;</code>
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
     * Generated from protobuf field <code>uint32 PGHAPHCHHDA = 13;</code>
     * @return int
     */
    public function getPGHAPHCHHDA()
    {
        return $this->PGHAPHCHHDA;
    }

    /**
     * Generated from protobuf field <code>uint32 PGHAPHCHHDA = 13;</code>
     * @param int $var
     * @return $this
     */
    public function setPGHAPHCHHDA($var)
    {
        GPBUtil::checkUint32($var);
        $this->PGHAPHCHHDA = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>uint32 LBMIPLJOCFE = 15;</code>
     * @return int
     */
    public function getLBMIPLJOCFE()
    {
        return $this->LBMIPLJOCFE;
    }

    /**
     * Generated from protobuf field <code>uint32 LBMIPLJOCFE = 15;</code>
     * @param int $var
     * @return $this
     */
    public function setLBMIPLJOCFE($var)
    {
        GPBUtil::checkUint32($var);
        $this->LBMIPLJOCFE = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>uint32 IBGBNAJCIHD = 3;</code>
     * @return int
     */
    public function getIBGBNAJCIHD()
    {
        return $this->IBGBNAJCIHD;
    }

    /**
     * Generated from protobuf field <code>uint32 IBGBNAJCIHD = 3;</code>
     * @param int $var
     * @return $this
     */
    public function setIBGBNAJCIHD($var)
    {
        GPBUtil::checkUint32($var);
        $this->IBGBNAJCIHD = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>uint32 ICCDOBIGCLN = 4;</code>
     * @return int
     */
    public function getICCDOBIGCLN()
    {
        return $this->ICCDOBIGCLN;
    }

    /**
     * Generated from protobuf field <code>uint32 ICCDOBIGCLN = 4;</code>
     * @param int $var
     * @return $this
     */
    public function setICCDOBIGCLN($var)
    {
        GPBUtil::checkUint32($var);
        $this->ICCDOBIGCLN = $var;

        return $this;
    }

}
