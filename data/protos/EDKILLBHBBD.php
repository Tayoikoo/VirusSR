<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# NO CHECKED-IN PROTOBUF GENCODE
# source: StarRail.proto

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>EDKILLBHBBD</code>
 */
class EDKILLBHBBD extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>uint32 GCIMMFIDPJP = 4;</code>
     */
    protected $GCIMMFIDPJP = 0;
    /**
     * Generated from protobuf field <code>uint32 HMPPFGCIFJK = 11;</code>
     */
    protected $HMPPFGCIFJK = 0;
    /**
     * Generated from protobuf field <code>uint32 LGBJLFEMFOL = 13;</code>
     */
    protected $LGBJLFEMFOL = 0;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type int $GCIMMFIDPJP
     *     @type int $HMPPFGCIFJK
     *     @type int $LGBJLFEMFOL
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\StarRail::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>uint32 GCIMMFIDPJP = 4;</code>
     * @return int
     */
    public function getGCIMMFIDPJP()
    {
        return $this->GCIMMFIDPJP;
    }

    /**
     * Generated from protobuf field <code>uint32 GCIMMFIDPJP = 4;</code>
     * @param int $var
     * @return $this
     */
    public function setGCIMMFIDPJP($var)
    {
        GPBUtil::checkUint32($var);
        $this->GCIMMFIDPJP = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>uint32 HMPPFGCIFJK = 11;</code>
     * @return int
     */
    public function getHMPPFGCIFJK()
    {
        return $this->HMPPFGCIFJK;
    }

    /**
     * Generated from protobuf field <code>uint32 HMPPFGCIFJK = 11;</code>
     * @param int $var
     * @return $this
     */
    public function setHMPPFGCIFJK($var)
    {
        GPBUtil::checkUint32($var);
        $this->HMPPFGCIFJK = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>uint32 LGBJLFEMFOL = 13;</code>
     * @return int
     */
    public function getLGBJLFEMFOL()
    {
        return $this->LGBJLFEMFOL;
    }

    /**
     * Generated from protobuf field <code>uint32 LGBJLFEMFOL = 13;</code>
     * @param int $var
     * @return $this
     */
    public function setLGBJLFEMFOL($var)
    {
        GPBUtil::checkUint32($var);
        $this->LGBJLFEMFOL = $var;

        return $this;
    }

}

