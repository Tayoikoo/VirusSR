<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# NO CHECKED-IN PROTOBUF GENCODE
# source: StarRail.proto

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>HOAACFPNJAK</code>
 */
class HOAACFPNJAK extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>uint32 EMFKONBHCOM = 15;</code>
     */
    protected $EMFKONBHCOM = 0;
    /**
     * Generated from protobuf field <code>uint32 stamina = 7;</code>
     */
    protected $stamina = 0;
    /**
     * Generated from protobuf field <code>int64 OMLFCKHIGNA = 10;</code>
     */
    protected $OMLFCKHIGNA = 0;
    /**
     * Generated from protobuf field <code>int64 BBCIOBJDBOC = 12;</code>
     */
    protected $BBCIOBJDBOC = 0;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type int $EMFKONBHCOM
     *     @type int $stamina
     *     @type int|string $OMLFCKHIGNA
     *     @type int|string $BBCIOBJDBOC
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\StarRail::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>uint32 EMFKONBHCOM = 15;</code>
     * @return int
     */
    public function getEMFKONBHCOM()
    {
        return $this->EMFKONBHCOM;
    }

    /**
     * Generated from protobuf field <code>uint32 EMFKONBHCOM = 15;</code>
     * @param int $var
     * @return $this
     */
    public function setEMFKONBHCOM($var)
    {
        GPBUtil::checkUint32($var);
        $this->EMFKONBHCOM = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>uint32 stamina = 7;</code>
     * @return int
     */
    public function getStamina()
    {
        return $this->stamina;
    }

    /**
     * Generated from protobuf field <code>uint32 stamina = 7;</code>
     * @param int $var
     * @return $this
     */
    public function setStamina($var)
    {
        GPBUtil::checkUint32($var);
        $this->stamina = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>int64 OMLFCKHIGNA = 10;</code>
     * @return int|string
     */
    public function getOMLFCKHIGNA()
    {
        return $this->OMLFCKHIGNA;
    }

    /**
     * Generated from protobuf field <code>int64 OMLFCKHIGNA = 10;</code>
     * @param int|string $var
     * @return $this
     */
    public function setOMLFCKHIGNA($var)
    {
        GPBUtil::checkInt64($var);
        $this->OMLFCKHIGNA = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>int64 BBCIOBJDBOC = 12;</code>
     * @return int|string
     */
    public function getBBCIOBJDBOC()
    {
        return $this->BBCIOBJDBOC;
    }

    /**
     * Generated from protobuf field <code>int64 BBCIOBJDBOC = 12;</code>
     * @param int|string $var
     * @return $this
     */
    public function setBBCIOBJDBOC($var)
    {
        GPBUtil::checkInt64($var);
        $this->BBCIOBJDBOC = $var;

        return $this;
    }

}
