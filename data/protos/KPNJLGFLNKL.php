<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# NO CHECKED-IN PROTOBUF GENCODE
# source: StarRail.proto

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>KPNJLGFLNKL</code>
 */
class KPNJLGFLNKL extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>uint32 GPPJCCCOGBD = 5;</code>
     */
    protected $GPPJCCCOGBD = 0;
    /**
     * Generated from protobuf field <code>.ItemList AGPKHOOCMPE = 1;</code>
     */
    protected $AGPKHOOCMPE = null;
    /**
     * Generated from protobuf field <code>uint32 IDNJKLHPNLI = 11;</code>
     */
    protected $IDNJKLHPNLI = 0;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type int $GPPJCCCOGBD
     *     @type \ItemList $AGPKHOOCMPE
     *     @type int $IDNJKLHPNLI
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\StarRail::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>uint32 GPPJCCCOGBD = 5;</code>
     * @return int
     */
    public function getGPPJCCCOGBD()
    {
        return $this->GPPJCCCOGBD;
    }

    /**
     * Generated from protobuf field <code>uint32 GPPJCCCOGBD = 5;</code>
     * @param int $var
     * @return $this
     */
    public function setGPPJCCCOGBD($var)
    {
        GPBUtil::checkUint32($var);
        $this->GPPJCCCOGBD = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>.ItemList AGPKHOOCMPE = 1;</code>
     * @return \ItemList|null
     */
    public function getAGPKHOOCMPE()
    {
        return $this->AGPKHOOCMPE;
    }

    public function hasAGPKHOOCMPE()
    {
        return isset($this->AGPKHOOCMPE);
    }

    public function clearAGPKHOOCMPE()
    {
        unset($this->AGPKHOOCMPE);
    }

    /**
     * Generated from protobuf field <code>.ItemList AGPKHOOCMPE = 1;</code>
     * @param \ItemList $var
     * @return $this
     */
    public function setAGPKHOOCMPE($var)
    {
        GPBUtil::checkMessage($var, \ItemList::class);
        $this->AGPKHOOCMPE = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>uint32 IDNJKLHPNLI = 11;</code>
     * @return int
     */
    public function getIDNJKLHPNLI()
    {
        return $this->IDNJKLHPNLI;
    }

    /**
     * Generated from protobuf field <code>uint32 IDNJKLHPNLI = 11;</code>
     * @param int $var
     * @return $this
     */
    public function setIDNJKLHPNLI($var)
    {
        GPBUtil::checkUint32($var);
        $this->IDNJKLHPNLI = $var;

        return $this;
    }

}
