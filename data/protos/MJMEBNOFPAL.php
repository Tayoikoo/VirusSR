<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# NO CHECKED-IN PROTOBUF GENCODE
# source: StarRail.proto

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>MJMEBNOFPAL</code>
 */
class MJMEBNOFPAL extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>uint32 EGPPMMBCKNE = 13;</code>
     */
    protected $EGPPMMBCKNE = 0;
    /**
     * Generated from protobuf field <code>.PLDBMBNBHJE IGFNCPGBDIJ = 5;</code>
     */
    protected $IGFNCPGBDIJ = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type int $EGPPMMBCKNE
     *     @type \PLDBMBNBHJE $IGFNCPGBDIJ
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\StarRail::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>uint32 EGPPMMBCKNE = 13;</code>
     * @return int
     */
    public function getEGPPMMBCKNE()
    {
        return $this->EGPPMMBCKNE;
    }

    /**
     * Generated from protobuf field <code>uint32 EGPPMMBCKNE = 13;</code>
     * @param int $var
     * @return $this
     */
    public function setEGPPMMBCKNE($var)
    {
        GPBUtil::checkUint32($var);
        $this->EGPPMMBCKNE = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>.PLDBMBNBHJE IGFNCPGBDIJ = 5;</code>
     * @return \PLDBMBNBHJE|null
     */
    public function getIGFNCPGBDIJ()
    {
        return $this->IGFNCPGBDIJ;
    }

    public function hasIGFNCPGBDIJ()
    {
        return isset($this->IGFNCPGBDIJ);
    }

    public function clearIGFNCPGBDIJ()
    {
        unset($this->IGFNCPGBDIJ);
    }

    /**
     * Generated from protobuf field <code>.PLDBMBNBHJE IGFNCPGBDIJ = 5;</code>
     * @param \PLDBMBNBHJE $var
     * @return $this
     */
    public function setIGFNCPGBDIJ($var)
    {
        GPBUtil::checkMessage($var, \PLDBMBNBHJE::class);
        $this->IGFNCPGBDIJ = $var;

        return $this;
    }

}

