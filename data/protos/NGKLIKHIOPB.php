<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# NO CHECKED-IN PROTOBUF GENCODE
# source: StarRail.proto

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>NGKLIKHIOPB</code>
 */
class NGKLIKHIOPB extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>uint32 hepkmkajngb = 9;</code>
     */
    protected $hepkmkajngb = 0;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type int $hepkmkajngb
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\StarRail::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>uint32 hepkmkajngb = 9;</code>
     * @return int
     */
    public function getHepkmkajngb()
    {
        return $this->hepkmkajngb;
    }

    /**
     * Generated from protobuf field <code>uint32 hepkmkajngb = 9;</code>
     * @param int $var
     * @return $this
     */
    public function setHepkmkajngb($var)
    {
        GPBUtil::checkUint32($var);
        $this->hepkmkajngb = $var;

        return $this;
    }

}

