<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# NO CHECKED-IN PROTOBUF GENCODE
# source: StarRail.proto

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>FEKNIDJJABA</code>
 */
class FEKNIDJJABA extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>uint32 PNOAKGNANBO = 12;</code>
     */
    protected $PNOAKGNANBO = 0;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type int $PNOAKGNANBO
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\StarRail::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>uint32 PNOAKGNANBO = 12;</code>
     * @return int
     */
    public function getPNOAKGNANBO()
    {
        return $this->PNOAKGNANBO;
    }

    /**
     * Generated from protobuf field <code>uint32 PNOAKGNANBO = 12;</code>
     * @param int $var
     * @return $this
     */
    public function setPNOAKGNANBO($var)
    {
        GPBUtil::checkUint32($var);
        $this->PNOAKGNANBO = $var;

        return $this;
    }

}

