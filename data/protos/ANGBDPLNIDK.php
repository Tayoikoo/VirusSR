<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# NO CHECKED-IN PROTOBUF GENCODE
# source: StarRail.proto

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>ANGBDPLNIDK</code>
 */
class ANGBDPLNIDK extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>uint32 eepighijpfp = 8;</code>
     */
    protected $eepighijpfp = 0;
    /**
     * Generated from protobuf field <code>bool ldnbeppjjkn = 4;</code>
     */
    protected $ldnbeppjjkn = false;
    /**
     * Generated from protobuf field <code>uint32 jimjoedaclm = 12;</code>
     */
    protected $jimjoedaclm = 0;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type int $eepighijpfp
     *     @type bool $ldnbeppjjkn
     *     @type int $jimjoedaclm
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\StarRail::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>uint32 eepighijpfp = 8;</code>
     * @return int
     */
    public function getEepighijpfp()
    {
        return $this->eepighijpfp;
    }

    /**
     * Generated from protobuf field <code>uint32 eepighijpfp = 8;</code>
     * @param int $var
     * @return $this
     */
    public function setEepighijpfp($var)
    {
        GPBUtil::checkUint32($var);
        $this->eepighijpfp = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>bool ldnbeppjjkn = 4;</code>
     * @return bool
     */
    public function getLdnbeppjjkn()
    {
        return $this->ldnbeppjjkn;
    }

    /**
     * Generated from protobuf field <code>bool ldnbeppjjkn = 4;</code>
     * @param bool $var
     * @return $this
     */
    public function setLdnbeppjjkn($var)
    {
        GPBUtil::checkBool($var);
        $this->ldnbeppjjkn = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>uint32 jimjoedaclm = 12;</code>
     * @return int
     */
    public function getJimjoedaclm()
    {
        return $this->jimjoedaclm;
    }

    /**
     * Generated from protobuf field <code>uint32 jimjoedaclm = 12;</code>
     * @param int $var
     * @return $this
     */
    public function setJimjoedaclm($var)
    {
        GPBUtil::checkUint32($var);
        $this->jimjoedaclm = $var;

        return $this;
    }

}

