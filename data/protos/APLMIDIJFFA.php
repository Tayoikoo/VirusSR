<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# NO CHECKED-IN PROTOBUF GENCODE
# source: StarRail.proto

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>APLMIDIJFFA</code>
 */
class APLMIDIJFFA extends \Google\Protobuf\Internal\Message
{
    protected $IPFIEHLNEON;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \BGBDLOPNMAA $kohgaokngji
     *     @type \GJPLDENOPEN $dcccihekhfo
     *     @type \KPGPGKJDFII $ghpghllemfg
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\StarRail::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>.BGBDLOPNMAA kohgaokngji = 8;</code>
     * @return \BGBDLOPNMAA|null
     */
    public function getKohgaokngji()
    {
        return $this->readOneof(8);
    }

    public function hasKohgaokngji()
    {
        return $this->hasOneof(8);
    }

    /**
     * Generated from protobuf field <code>.BGBDLOPNMAA kohgaokngji = 8;</code>
     * @param \BGBDLOPNMAA $var
     * @return $this
     */
    public function setKohgaokngji($var)
    {
        GPBUtil::checkMessage($var, \BGBDLOPNMAA::class);
        $this->writeOneof(8, $var);

        return $this;
    }

    /**
     * Generated from protobuf field <code>.GJPLDENOPEN dcccihekhfo = 9;</code>
     * @return \GJPLDENOPEN|null
     */
    public function getDcccihekhfo()
    {
        return $this->readOneof(9);
    }

    public function hasDcccihekhfo()
    {
        return $this->hasOneof(9);
    }

    /**
     * Generated from protobuf field <code>.GJPLDENOPEN dcccihekhfo = 9;</code>
     * @param \GJPLDENOPEN $var
     * @return $this
     */
    public function setDcccihekhfo($var)
    {
        GPBUtil::checkMessage($var, \GJPLDENOPEN::class);
        $this->writeOneof(9, $var);

        return $this;
    }

    /**
     * Generated from protobuf field <code>.KPGPGKJDFII ghpghllemfg = 13;</code>
     * @return \KPGPGKJDFII|null
     */
    public function getGhpghllemfg()
    {
        return $this->readOneof(13);
    }

    public function hasGhpghllemfg()
    {
        return $this->hasOneof(13);
    }

    /**
     * Generated from protobuf field <code>.KPGPGKJDFII ghpghllemfg = 13;</code>
     * @param \KPGPGKJDFII $var
     * @return $this
     */
    public function setGhpghllemfg($var)
    {
        GPBUtil::checkMessage($var, \KPGPGKJDFII::class);
        $this->writeOneof(13, $var);

        return $this;
    }

    /**
     * @return string
     */
    public function getIPFIEHLNEON()
    {
        return $this->whichOneof("IPFIEHLNEON");
    }

}

