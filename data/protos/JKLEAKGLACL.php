<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# NO CHECKED-IN PROTOBUF GENCODE
# source: StarRail.proto

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>JKLEAKGLACL</code>
 */
class JKLEAKGLACL extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>.CHDECELMAGI FGMBFKBCGFH = 2;</code>
     */
    protected $FGMBFKBCGFH = 0;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type int $FGMBFKBCGFH
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\StarRail::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>.CHDECELMAGI FGMBFKBCGFH = 2;</code>
     * @return int
     */
    public function getFGMBFKBCGFH()
    {
        return $this->FGMBFKBCGFH;
    }

    /**
     * Generated from protobuf field <code>.CHDECELMAGI FGMBFKBCGFH = 2;</code>
     * @param int $var
     * @return $this
     */
    public function setFGMBFKBCGFH($var)
    {
        GPBUtil::checkEnum($var, \CHDECELMAGI::class);
        $this->FGMBFKBCGFH = $var;

        return $this;
    }

}
