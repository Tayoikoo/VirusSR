<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# NO CHECKED-IN PROTOBUF GENCODE
# source: StarRail.proto

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>FBHNOFKECKB</code>
 */
class FBHNOFKECKB extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>.BCIHKEKHFEE DJALEJINHLN = 14;</code>
     */
    protected $DJALEJINHLN = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \BCIHKEKHFEE $DJALEJINHLN
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\StarRail::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>.BCIHKEKHFEE DJALEJINHLN = 14;</code>
     * @return \BCIHKEKHFEE|null
     */
    public function getDJALEJINHLN()
    {
        return $this->DJALEJINHLN;
    }

    public function hasDJALEJINHLN()
    {
        return isset($this->DJALEJINHLN);
    }

    public function clearDJALEJINHLN()
    {
        unset($this->DJALEJINHLN);
    }

    /**
     * Generated from protobuf field <code>.BCIHKEKHFEE DJALEJINHLN = 14;</code>
     * @param \BCIHKEKHFEE $var
     * @return $this
     */
    public function setDJALEJINHLN($var)
    {
        GPBUtil::checkMessage($var, \BCIHKEKHFEE::class);
        $this->DJALEJINHLN = $var;

        return $this;
    }

}
