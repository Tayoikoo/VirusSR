<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# NO CHECKED-IN PROTOBUF GENCODE
# source: StarRail.proto

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>FNIDDMJNACK</code>
 */
class FNIDDMJNACK extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>.HHEJBAAIMFE BMLGHAOBNFB = 3;</code>
     */
    protected $BMLGHAOBNFB = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \HHEJBAAIMFE $BMLGHAOBNFB
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\StarRail::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>.HHEJBAAIMFE BMLGHAOBNFB = 3;</code>
     * @return \HHEJBAAIMFE|null
     */
    public function getBMLGHAOBNFB()
    {
        return $this->BMLGHAOBNFB;
    }

    public function hasBMLGHAOBNFB()
    {
        return isset($this->BMLGHAOBNFB);
    }

    public function clearBMLGHAOBNFB()
    {
        unset($this->BMLGHAOBNFB);
    }

    /**
     * Generated from protobuf field <code>.HHEJBAAIMFE BMLGHAOBNFB = 3;</code>
     * @param \HHEJBAAIMFE $var
     * @return $this
     */
    public function setBMLGHAOBNFB($var)
    {
        GPBUtil::checkMessage($var, \HHEJBAAIMFE::class);
        $this->BMLGHAOBNFB = $var;

        return $this;
    }

}
