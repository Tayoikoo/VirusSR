<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# NO CHECKED-IN PROTOBUF GENCODE
# source: StarRail.proto

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>FLKCDNNGDNP</code>
 */
class FLKCDNNGDNP extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>uint32 GBEABPKGNHD = 1;</code>
     */
    protected $GBEABPKGNHD = 0;
    /**
     * Generated from protobuf field <code>uint32 LGBJLFEMFOL = 3;</code>
     */
    protected $LGBJLFEMFOL = 0;
    /**
     * Generated from protobuf field <code>uint32 BFMEPOPIGOL = 12;</code>
     */
    protected $BFMEPOPIGOL = 0;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type int $GBEABPKGNHD
     *     @type int $LGBJLFEMFOL
     *     @type int $BFMEPOPIGOL
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\StarRail::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>uint32 GBEABPKGNHD = 1;</code>
     * @return int
     */
    public function getGBEABPKGNHD()
    {
        return $this->GBEABPKGNHD;
    }

    /**
     * Generated from protobuf field <code>uint32 GBEABPKGNHD = 1;</code>
     * @param int $var
     * @return $this
     */
    public function setGBEABPKGNHD($var)
    {
        GPBUtil::checkUint32($var);
        $this->GBEABPKGNHD = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>uint32 LGBJLFEMFOL = 3;</code>
     * @return int
     */
    public function getLGBJLFEMFOL()
    {
        return $this->LGBJLFEMFOL;
    }

    /**
     * Generated from protobuf field <code>uint32 LGBJLFEMFOL = 3;</code>
     * @param int $var
     * @return $this
     */
    public function setLGBJLFEMFOL($var)
    {
        GPBUtil::checkUint32($var);
        $this->LGBJLFEMFOL = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>uint32 BFMEPOPIGOL = 12;</code>
     * @return int
     */
    public function getBFMEPOPIGOL()
    {
        return $this->BFMEPOPIGOL;
    }

    /**
     * Generated from protobuf field <code>uint32 BFMEPOPIGOL = 12;</code>
     * @param int $var
     * @return $this
     */
    public function setBFMEPOPIGOL($var)
    {
        GPBUtil::checkUint32($var);
        $this->BFMEPOPIGOL = $var;

        return $this;
    }

}
