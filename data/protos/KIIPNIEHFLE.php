<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# NO CHECKED-IN PROTOBUF GENCODE
# source: StarRail.proto

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>KIIPNIEHFLE</code>
 */
class KIIPNIEHFLE extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>uint32 retcode = 13;</code>
     */
    protected $retcode = 0;
    /**
     * Generated from protobuf field <code>uint32 AKFMFBKKEOI = 11;</code>
     */
    protected $AKFMFBKKEOI = 0;
    /**
     * Generated from protobuf field <code>.HHBFGOMBIMA HBOCMBOBJNG = 15;</code>
     */
    protected $HBOCMBOBJNG = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type int $retcode
     *     @type int $AKFMFBKKEOI
     *     @type \HHBFGOMBIMA $HBOCMBOBJNG
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\StarRail::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>uint32 retcode = 13;</code>
     * @return int
     */
    public function getRetcode()
    {
        return $this->retcode;
    }

    /**
     * Generated from protobuf field <code>uint32 retcode = 13;</code>
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
     * Generated from protobuf field <code>uint32 AKFMFBKKEOI = 11;</code>
     * @return int
     */
    public function getAKFMFBKKEOI()
    {
        return $this->AKFMFBKKEOI;
    }

    /**
     * Generated from protobuf field <code>uint32 AKFMFBKKEOI = 11;</code>
     * @param int $var
     * @return $this
     */
    public function setAKFMFBKKEOI($var)
    {
        GPBUtil::checkUint32($var);
        $this->AKFMFBKKEOI = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>.HHBFGOMBIMA HBOCMBOBJNG = 15;</code>
     * @return \HHBFGOMBIMA|null
     */
    public function getHBOCMBOBJNG()
    {
        return $this->HBOCMBOBJNG;
    }

    public function hasHBOCMBOBJNG()
    {
        return isset($this->HBOCMBOBJNG);
    }

    public function clearHBOCMBOBJNG()
    {
        unset($this->HBOCMBOBJNG);
    }

    /**
     * Generated from protobuf field <code>.HHBFGOMBIMA HBOCMBOBJNG = 15;</code>
     * @param \HHBFGOMBIMA $var
     * @return $this
     */
    public function setHBOCMBOBJNG($var)
    {
        GPBUtil::checkMessage($var, \HHBFGOMBIMA::class);
        $this->HBOCMBOBJNG = $var;

        return $this;
    }

}
