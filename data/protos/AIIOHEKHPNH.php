<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# NO CHECKED-IN PROTOBUF GENCODE
# source: StarRail.proto

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>AIIOHEKHPNH</code>
 */
class AIIOHEKHPNH extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>uint32 IGEDBPIKHIO = 1;</code>
     */
    protected $IGEDBPIKHIO = 0;
    /**
     * Generated from protobuf field <code>uint32 retcode = 2;</code>
     */
    protected $retcode = 0;
    /**
     * Generated from protobuf field <code>uint32 AHCAOJCBIOM = 15;</code>
     */
    protected $AHCAOJCBIOM = 0;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type int $IGEDBPIKHIO
     *     @type int $retcode
     *     @type int $AHCAOJCBIOM
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\StarRail::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>uint32 IGEDBPIKHIO = 1;</code>
     * @return int
     */
    public function getIGEDBPIKHIO()
    {
        return $this->IGEDBPIKHIO;
    }

    /**
     * Generated from protobuf field <code>uint32 IGEDBPIKHIO = 1;</code>
     * @param int $var
     * @return $this
     */
    public function setIGEDBPIKHIO($var)
    {
        GPBUtil::checkUint32($var);
        $this->IGEDBPIKHIO = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>uint32 retcode = 2;</code>
     * @return int
     */
    public function getRetcode()
    {
        return $this->retcode;
    }

    /**
     * Generated from protobuf field <code>uint32 retcode = 2;</code>
     * @param int $var
     * @return $this
     */
    public function setRetcode($var)
    {
        GPBUtil::checkUint32($var);
        $this->retcode = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>uint32 AHCAOJCBIOM = 15;</code>
     * @return int
     */
    public function getAHCAOJCBIOM()
    {
        return $this->AHCAOJCBIOM;
    }

    /**
     * Generated from protobuf field <code>uint32 AHCAOJCBIOM = 15;</code>
     * @param int $var
     * @return $this
     */
    public function setAHCAOJCBIOM($var)
    {
        GPBUtil::checkUint32($var);
        $this->AHCAOJCBIOM = $var;

        return $this;
    }

}

