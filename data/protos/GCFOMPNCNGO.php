<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# NO CHECKED-IN PROTOBUF GENCODE
# source: StarRail.proto

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>GCFOMPNCNGO</code>
 */
class GCFOMPNCNGO extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>uint32 AAJBKDEDOFP = 3;</code>
     */
    protected $AAJBKDEDOFP = 0;
    /**
     * Generated from protobuf field <code>uint32 BNJGOFNGAJA = 9;</code>
     */
    protected $BNJGOFNGAJA = 0;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type int $AAJBKDEDOFP
     *     @type int $BNJGOFNGAJA
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\StarRail::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>uint32 AAJBKDEDOFP = 3;</code>
     * @return int
     */
    public function getAAJBKDEDOFP()
    {
        return $this->AAJBKDEDOFP;
    }

    /**
     * Generated from protobuf field <code>uint32 AAJBKDEDOFP = 3;</code>
     * @param int $var
     * @return $this
     */
    public function setAAJBKDEDOFP($var)
    {
        GPBUtil::checkUint32($var);
        $this->AAJBKDEDOFP = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>uint32 BNJGOFNGAJA = 9;</code>
     * @return int
     */
    public function getBNJGOFNGAJA()
    {
        return $this->BNJGOFNGAJA;
    }

    /**
     * Generated from protobuf field <code>uint32 BNJGOFNGAJA = 9;</code>
     * @param int $var
     * @return $this
     */
    public function setBNJGOFNGAJA($var)
    {
        GPBUtil::checkUint32($var);
        $this->BNJGOFNGAJA = $var;

        return $this;
    }

}

