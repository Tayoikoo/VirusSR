<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# NO CHECKED-IN PROTOBUF GENCODE
# source: StarRail.proto

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>EOMPJFLDBFP</code>
 */
class EOMPJFLDBFP extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>.IOOJFGPOAPG EDPHOKHAPIK = 1;</code>
     */
    protected $EDPHOKHAPIK = null;
    /**
     * Generated from protobuf field <code>uint32 retcode = 12;</code>
     */
    protected $retcode = 0;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \IOOJFGPOAPG $EDPHOKHAPIK
     *     @type int $retcode
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\StarRail::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>.IOOJFGPOAPG EDPHOKHAPIK = 1;</code>
     * @return \IOOJFGPOAPG|null
     */
    public function getEDPHOKHAPIK()
    {
        return $this->EDPHOKHAPIK;
    }

    public function hasEDPHOKHAPIK()
    {
        return isset($this->EDPHOKHAPIK);
    }

    public function clearEDPHOKHAPIK()
    {
        unset($this->EDPHOKHAPIK);
    }

    /**
     * Generated from protobuf field <code>.IOOJFGPOAPG EDPHOKHAPIK = 1;</code>
     * @param \IOOJFGPOAPG $var
     * @return $this
     */
    public function setEDPHOKHAPIK($var)
    {
        GPBUtil::checkMessage($var, \IOOJFGPOAPG::class);
        $this->EDPHOKHAPIK = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>uint32 retcode = 12;</code>
     * @return int
     */
    public function getRetcode()
    {
        return $this->retcode;
    }

    /**
     * Generated from protobuf field <code>uint32 retcode = 12;</code>
     * @param int $var
     * @return $this
     */
    public function setRetcode($var)
    {
        GPBUtil::checkUint32($var);
        $this->retcode = $var;

        return $this;
    }

}

