<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# NO CHECKED-IN PROTOBUF GENCODE
# source: StarRail.proto

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>IFDLBAFMEKG</code>
 */
class IFDLBAFMEKG extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>uint32 CLLDMNPOOPJ = 15;</code>
     */
    protected $CLLDMNPOOPJ = 0;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type int $CLLDMNPOOPJ
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\StarRail::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>uint32 CLLDMNPOOPJ = 15;</code>
     * @return int
     */
    public function getCLLDMNPOOPJ()
    {
        return $this->CLLDMNPOOPJ;
    }

    /**
     * Generated from protobuf field <code>uint32 CLLDMNPOOPJ = 15;</code>
     * @param int $var
     * @return $this
     */
    public function setCLLDMNPOOPJ($var)
    {
        GPBUtil::checkUint32($var);
        $this->CLLDMNPOOPJ = $var;

        return $this;
    }

}

