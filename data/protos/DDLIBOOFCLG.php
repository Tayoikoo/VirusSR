<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# NO CHECKED-IN PROTOBUF GENCODE
# source: StarRail.proto

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>DDLIBOOFCLG</code>
 */
class DDLIBOOFCLG extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>.JCEDNEMPMAJ PDLAHDEBOIL = 8;</code>
     */
    protected $PDLAHDEBOIL = null;
    /**
     * Generated from protobuf field <code>.FightGameModeType DJNELABFJLF = 10;</code>
     */
    protected $DJNELABFJLF = 0;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \JCEDNEMPMAJ $PDLAHDEBOIL
     *     @type int $DJNELABFJLF
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\StarRail::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>.JCEDNEMPMAJ PDLAHDEBOIL = 8;</code>
     * @return \JCEDNEMPMAJ|null
     */
    public function getPDLAHDEBOIL()
    {
        return $this->PDLAHDEBOIL;
    }

    public function hasPDLAHDEBOIL()
    {
        return isset($this->PDLAHDEBOIL);
    }

    public function clearPDLAHDEBOIL()
    {
        unset($this->PDLAHDEBOIL);
    }

    /**
     * Generated from protobuf field <code>.JCEDNEMPMAJ PDLAHDEBOIL = 8;</code>
     * @param \JCEDNEMPMAJ $var
     * @return $this
     */
    public function setPDLAHDEBOIL($var)
    {
        GPBUtil::checkMessage($var, \JCEDNEMPMAJ::class);
        $this->PDLAHDEBOIL = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>.FightGameModeType DJNELABFJLF = 10;</code>
     * @return int
     */
    public function getDJNELABFJLF()
    {
        return $this->DJNELABFJLF;
    }

    /**
     * Generated from protobuf field <code>.FightGameModeType DJNELABFJLF = 10;</code>
     * @param int $var
     * @return $this
     */
    public function setDJNELABFJLF($var)
    {
        GPBUtil::checkEnum($var, \FightGameModeType::class);
        $this->DJNELABFJLF = $var;

        return $this;
    }

}

