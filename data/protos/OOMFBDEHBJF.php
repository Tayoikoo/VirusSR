<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# NO CHECKED-IN PROTOBUF GENCODE
# source: StarRail.proto

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>OOMFBDEHBJF</code>
 */
class OOMFBDEHBJF extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>.HHBFGOMBIMA HBOCMBOBJNG = 4;</code>
     */
    protected $HBOCMBOBJNG = null;
    /**
     * Generated from protobuf field <code>repeated .HHBFGOMBIMA HMLAHCFILKI = 5;</code>
     */
    private $HMLAHCFILKI;
    /**
     * Generated from protobuf field <code>uint32 AKFMFBKKEOI = 15;</code>
     */
    protected $AKFMFBKKEOI = 0;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \HHBFGOMBIMA $HBOCMBOBJNG
     *     @type array<\HHBFGOMBIMA>|\Google\Protobuf\Internal\RepeatedField $HMLAHCFILKI
     *     @type int $AKFMFBKKEOI
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\StarRail::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>.HHBFGOMBIMA HBOCMBOBJNG = 4;</code>
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
     * Generated from protobuf field <code>.HHBFGOMBIMA HBOCMBOBJNG = 4;</code>
     * @param \HHBFGOMBIMA $var
     * @return $this
     */
    public function setHBOCMBOBJNG($var)
    {
        GPBUtil::checkMessage($var, \HHBFGOMBIMA::class);
        $this->HBOCMBOBJNG = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>repeated .HHBFGOMBIMA HMLAHCFILKI = 5;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getHMLAHCFILKI()
    {
        return $this->HMLAHCFILKI;
    }

    /**
     * Generated from protobuf field <code>repeated .HHBFGOMBIMA HMLAHCFILKI = 5;</code>
     * @param array<\HHBFGOMBIMA>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setHMLAHCFILKI($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \HHBFGOMBIMA::class);
        $this->HMLAHCFILKI = $arr;

        return $this;
    }

    /**
     * Generated from protobuf field <code>uint32 AKFMFBKKEOI = 15;</code>
     * @return int
     */
    public function getAKFMFBKKEOI()
    {
        return $this->AKFMFBKKEOI;
    }

    /**
     * Generated from protobuf field <code>uint32 AKFMFBKKEOI = 15;</code>
     * @param int $var
     * @return $this
     */
    public function setAKFMFBKKEOI($var)
    {
        GPBUtil::checkUint32($var);
        $this->AKFMFBKKEOI = $var;

        return $this;
    }

}

