<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# NO CHECKED-IN PROTOBUF GENCODE
# source: StarRail.proto

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>LOOAFABIALP</code>
 */
class LOOAFABIALP extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>uint32 retcode = 15;</code>
     */
    protected $retcode = 0;
    /**
     * Generated from protobuf field <code>string DDEHNCDHFEO = 14;</code>
     */
    protected $DDEHNCDHFEO = '';
    /**
     * Generated from protobuf field <code>uint32 AHCAOJCBIOM = 9;</code>
     */
    protected $AHCAOJCBIOM = 0;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type int $retcode
     *     @type string $DDEHNCDHFEO
     *     @type int $AHCAOJCBIOM
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\StarRail::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>uint32 retcode = 15;</code>
     * @return int
     */
    public function getRetcode()
    {
        return $this->retcode;
    }

    /**
     * Generated from protobuf field <code>uint32 retcode = 15;</code>
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
     * Generated from protobuf field <code>string DDEHNCDHFEO = 14;</code>
     * @return string
     */
    public function getDDEHNCDHFEO()
    {
        return $this->DDEHNCDHFEO;
    }

    /**
     * Generated from protobuf field <code>string DDEHNCDHFEO = 14;</code>
     * @param string $var
     * @return $this
     */
    public function setDDEHNCDHFEO($var)
    {
        GPBUtil::checkString($var, True);
        $this->DDEHNCDHFEO = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>uint32 AHCAOJCBIOM = 9;</code>
     * @return int
     */
    public function getAHCAOJCBIOM()
    {
        return $this->AHCAOJCBIOM;
    }

    /**
     * Generated from protobuf field <code>uint32 AHCAOJCBIOM = 9;</code>
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

