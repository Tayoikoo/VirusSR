<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# NO CHECKED-IN PROTOBUF GENCODE
# source: StarRail.proto

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>DFOABLGPKBG</code>
 */
class DFOABLGPKBG extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>uint32 BFMEPOPIGOL = 3;</code>
     */
    protected $BFMEPOPIGOL = 0;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type int $BFMEPOPIGOL
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\StarRail::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>uint32 BFMEPOPIGOL = 3;</code>
     * @return int
     */
    public function getBFMEPOPIGOL()
    {
        return $this->BFMEPOPIGOL;
    }

    /**
     * Generated from protobuf field <code>uint32 BFMEPOPIGOL = 3;</code>
     * @param int $var
     * @return $this
     */
    public function setBFMEPOPIGOL($var)
    {
        GPBUtil::checkUint32($var);
        $this->BFMEPOPIGOL = $var;

        return $this;
    }

}

