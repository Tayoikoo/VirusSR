<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# NO CHECKED-IN PROTOBUF GENCODE
# source: StarRail.proto

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>CAAGKBLBKJA</code>
 */
class CAAGKBLBKJA extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>uint32 GDNMMKJAJIA = 1;</code>
     */
    protected $GDNMMKJAJIA = 0;
    /**
     * Generated from protobuf field <code>uint32 PHMADFPFEAD = 2;</code>
     */
    protected $PHMADFPFEAD = 0;
    /**
     * Generated from protobuf field <code>uint32 HFBECHJALHJ = 3;</code>
     */
    protected $HFBECHJALHJ = 0;
    /**
     * Generated from protobuf field <code>repeated .AFJHBIJOBBD OEKPNIDDPGC = 4;</code>
     */
    private $OEKPNIDDPGC;
    /**
     * Generated from protobuf field <code>repeated .PKHIDJDAKKL HGFENFJHJGI = 5;</code>
     */
    private $HGFENFJHJGI;
    /**
     * Generated from protobuf field <code>uint32 HBONNBKBLLA = 6;</code>
     */
    protected $HBONNBKBLLA = 0;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type int $GDNMMKJAJIA
     *     @type int $PHMADFPFEAD
     *     @type int $HFBECHJALHJ
     *     @type array<\AFJHBIJOBBD>|\Google\Protobuf\Internal\RepeatedField $OEKPNIDDPGC
     *     @type array<\PKHIDJDAKKL>|\Google\Protobuf\Internal\RepeatedField $HGFENFJHJGI
     *     @type int $HBONNBKBLLA
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\StarRail::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>uint32 GDNMMKJAJIA = 1;</code>
     * @return int
     */
    public function getGDNMMKJAJIA()
    {
        return $this->GDNMMKJAJIA;
    }

    /**
     * Generated from protobuf field <code>uint32 GDNMMKJAJIA = 1;</code>
     * @param int $var
     * @return $this
     */
    public function setGDNMMKJAJIA($var)
    {
        GPBUtil::checkUint32($var);
        $this->GDNMMKJAJIA = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>uint32 PHMADFPFEAD = 2;</code>
     * @return int
     */
    public function getPHMADFPFEAD()
    {
        return $this->PHMADFPFEAD;
    }

    /**
     * Generated from protobuf field <code>uint32 PHMADFPFEAD = 2;</code>
     * @param int $var
     * @return $this
     */
    public function setPHMADFPFEAD($var)
    {
        GPBUtil::checkUint32($var);
        $this->PHMADFPFEAD = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>uint32 HFBECHJALHJ = 3;</code>
     * @return int
     */
    public function getHFBECHJALHJ()
    {
        return $this->HFBECHJALHJ;
    }

    /**
     * Generated from protobuf field <code>uint32 HFBECHJALHJ = 3;</code>
     * @param int $var
     * @return $this
     */
    public function setHFBECHJALHJ($var)
    {
        GPBUtil::checkUint32($var);
        $this->HFBECHJALHJ = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>repeated .AFJHBIJOBBD OEKPNIDDPGC = 4;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getOEKPNIDDPGC()
    {
        return $this->OEKPNIDDPGC;
    }

    /**
     * Generated from protobuf field <code>repeated .AFJHBIJOBBD OEKPNIDDPGC = 4;</code>
     * @param array<\AFJHBIJOBBD>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setOEKPNIDDPGC($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \AFJHBIJOBBD::class);
        $this->OEKPNIDDPGC = $arr;

        return $this;
    }

    /**
     * Generated from protobuf field <code>repeated .PKHIDJDAKKL HGFENFJHJGI = 5;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getHGFENFJHJGI()
    {
        return $this->HGFENFJHJGI;
    }

    /**
     * Generated from protobuf field <code>repeated .PKHIDJDAKKL HGFENFJHJGI = 5;</code>
     * @param array<\PKHIDJDAKKL>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setHGFENFJHJGI($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \PKHIDJDAKKL::class);
        $this->HGFENFJHJGI = $arr;

        return $this;
    }

    /**
     * Generated from protobuf field <code>uint32 HBONNBKBLLA = 6;</code>
     * @return int
     */
    public function getHBONNBKBLLA()
    {
        return $this->HBONNBKBLLA;
    }

    /**
     * Generated from protobuf field <code>uint32 HBONNBKBLLA = 6;</code>
     * @param int $var
     * @return $this
     */
    public function setHBONNBKBLLA($var)
    {
        GPBUtil::checkUint32($var);
        $this->HBONNBKBLLA = $var;

        return $this;
    }

}
