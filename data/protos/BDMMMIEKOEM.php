<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# NO CHECKED-IN PROTOBUF GENCODE
# source: StarRail.proto

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>BDMMMIEKOEM</code>
 */
class BDMMMIEKOEM extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>uint32 PDHJAOBLIFK = 7;</code>
     */
    protected $PDHJAOBLIFK = 0;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type int $PDHJAOBLIFK
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\StarRail::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>uint32 PDHJAOBLIFK = 7;</code>
     * @return int
     */
    public function getPDHJAOBLIFK()
    {
        return $this->PDHJAOBLIFK;
    }

    /**
     * Generated from protobuf field <code>uint32 PDHJAOBLIFK = 7;</code>
     * @param int $var
     * @return $this
     */
    public function setPDHJAOBLIFK($var)
    {
        GPBUtil::checkUint32($var);
        $this->PDHJAOBLIFK = $var;

        return $this;
    }

}
