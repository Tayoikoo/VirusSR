<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# NO CHECKED-IN PROTOBUF GENCODE
# source: StarRail.proto

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>FCPOCIKPEBN</code>
 */
class FCPOCIKPEBN extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>uint32 ILIFHHJFMIH = 6;</code>
     */
    protected $ILIFHHJFMIH = 0;
    /**
     * Generated from protobuf field <code>uint32 BMOBDFECHFF = 5;</code>
     */
    protected $BMOBDFECHFF = 0;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type int $ILIFHHJFMIH
     *     @type int $BMOBDFECHFF
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\StarRail::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>uint32 ILIFHHJFMIH = 6;</code>
     * @return int
     */
    public function getILIFHHJFMIH()
    {
        return $this->ILIFHHJFMIH;
    }

    /**
     * Generated from protobuf field <code>uint32 ILIFHHJFMIH = 6;</code>
     * @param int $var
     * @return $this
     */
    public function setILIFHHJFMIH($var)
    {
        GPBUtil::checkUint32($var);
        $this->ILIFHHJFMIH = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>uint32 BMOBDFECHFF = 5;</code>
     * @return int
     */
    public function getBMOBDFECHFF()
    {
        return $this->BMOBDFECHFF;
    }

    /**
     * Generated from protobuf field <code>uint32 BMOBDFECHFF = 5;</code>
     * @param int $var
     * @return $this
     */
    public function setBMOBDFECHFF($var)
    {
        GPBUtil::checkUint32($var);
        $this->BMOBDFECHFF = $var;

        return $this;
    }

}

