<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# NO CHECKED-IN PROTOBUF GENCODE
# source: StarRail.proto

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>IEKNCNOJHDJ</code>
 */
class IEKNCNOJHDJ extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>uint32 CBMBKGCHMOK = 12;</code>
     */
    protected $CBMBKGCHMOK = 0;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type int $CBMBKGCHMOK
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\StarRail::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>uint32 CBMBKGCHMOK = 12;</code>
     * @return int
     */
    public function getCBMBKGCHMOK()
    {
        return $this->CBMBKGCHMOK;
    }

    /**
     * Generated from protobuf field <code>uint32 CBMBKGCHMOK = 12;</code>
     * @param int $var
     * @return $this
     */
    public function setCBMBKGCHMOK($var)
    {
        GPBUtil::checkUint32($var);
        $this->CBMBKGCHMOK = $var;

        return $this;
    }

}

