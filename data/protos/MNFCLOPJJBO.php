<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# NO CHECKED-IN PROTOBUF GENCODE
# source: StarRail.proto

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>MNFCLOPJJBO</code>
 */
class MNFCLOPJJBO extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>uint32 OLNEPHADOEA = 6;</code>
     */
    protected $OLNEPHADOEA = 0;
    /**
     * Generated from protobuf field <code>uint32 FCAHIJPIIEB = 11;</code>
     */
    protected $FCAHIJPIIEB = 0;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type int $OLNEPHADOEA
     *     @type int $FCAHIJPIIEB
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\StarRail::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>uint32 OLNEPHADOEA = 6;</code>
     * @return int
     */
    public function getOLNEPHADOEA()
    {
        return $this->OLNEPHADOEA;
    }

    /**
     * Generated from protobuf field <code>uint32 OLNEPHADOEA = 6;</code>
     * @param int $var
     * @return $this
     */
    public function setOLNEPHADOEA($var)
    {
        GPBUtil::checkUint32($var);
        $this->OLNEPHADOEA = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>uint32 FCAHIJPIIEB = 11;</code>
     * @return int
     */
    public function getFCAHIJPIIEB()
    {
        return $this->FCAHIJPIIEB;
    }

    /**
     * Generated from protobuf field <code>uint32 FCAHIJPIIEB = 11;</code>
     * @param int $var
     * @return $this
     */
    public function setFCAHIJPIIEB($var)
    {
        GPBUtil::checkUint32($var);
        $this->FCAHIJPIIEB = $var;

        return $this;
    }

}

