<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# NO CHECKED-IN PROTOBUF GENCODE
# source: StarRail.proto

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>JHOHBGMHKPD</code>
 */
class JHOHBGMHKPD extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>uint32 GPKEAKPHIPA = 7;</code>
     */
    protected $GPKEAKPHIPA = 0;
    /**
     * Generated from protobuf field <code>uint32 FAJKDKDKOLG = 9;</code>
     */
    protected $FAJKDKDKOLG = 0;
    /**
     * Generated from protobuf field <code>bool PMFJECKMAEI = 11;</code>
     */
    protected $PMFJECKMAEI = false;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type int $GPKEAKPHIPA
     *     @type int $FAJKDKDKOLG
     *     @type bool $PMFJECKMAEI
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\StarRail::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>uint32 GPKEAKPHIPA = 7;</code>
     * @return int
     */
    public function getGPKEAKPHIPA()
    {
        return $this->GPKEAKPHIPA;
    }

    /**
     * Generated from protobuf field <code>uint32 GPKEAKPHIPA = 7;</code>
     * @param int $var
     * @return $this
     */
    public function setGPKEAKPHIPA($var)
    {
        GPBUtil::checkUint32($var);
        $this->GPKEAKPHIPA = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>uint32 FAJKDKDKOLG = 9;</code>
     * @return int
     */
    public function getFAJKDKDKOLG()
    {
        return $this->FAJKDKDKOLG;
    }

    /**
     * Generated from protobuf field <code>uint32 FAJKDKDKOLG = 9;</code>
     * @param int $var
     * @return $this
     */
    public function setFAJKDKDKOLG($var)
    {
        GPBUtil::checkUint32($var);
        $this->FAJKDKDKOLG = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>bool PMFJECKMAEI = 11;</code>
     * @return bool
     */
    public function getPMFJECKMAEI()
    {
        return $this->PMFJECKMAEI;
    }

    /**
     * Generated from protobuf field <code>bool PMFJECKMAEI = 11;</code>
     * @param bool $var
     * @return $this
     */
    public function setPMFJECKMAEI($var)
    {
        GPBUtil::checkBool($var);
        $this->PMFJECKMAEI = $var;

        return $this;
    }

}
