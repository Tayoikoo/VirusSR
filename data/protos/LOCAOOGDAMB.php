<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# NO CHECKED-IN PROTOBUF GENCODE
# source: StarRail.proto

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>LOCAOOGDAMB</code>
 */
class LOCAOOGDAMB extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>.MFACNGINJIF MLMDEBKIGBH = 14;</code>
     */
    protected $MLMDEBKIGBH = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \MFACNGINJIF $MLMDEBKIGBH
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\StarRail::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>.MFACNGINJIF MLMDEBKIGBH = 14;</code>
     * @return \MFACNGINJIF|null
     */
    public function getMLMDEBKIGBH()
    {
        return $this->MLMDEBKIGBH;
    }

    public function hasMLMDEBKIGBH()
    {
        return isset($this->MLMDEBKIGBH);
    }

    public function clearMLMDEBKIGBH()
    {
        unset($this->MLMDEBKIGBH);
    }

    /**
     * Generated from protobuf field <code>.MFACNGINJIF MLMDEBKIGBH = 14;</code>
     * @param \MFACNGINJIF $var
     * @return $this
     */
    public function setMLMDEBKIGBH($var)
    {
        GPBUtil::checkMessage($var, \MFACNGINJIF::class);
        $this->MLMDEBKIGBH = $var;

        return $this;
    }

}
