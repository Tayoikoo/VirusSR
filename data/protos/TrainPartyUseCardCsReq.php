<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# NO CHECKED-IN PROTOBUF GENCODE
# source: StarRail.proto

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * KBEDFCGDKLH (8084)
 *
 * Generated from protobuf message <code>TrainPartyUseCardCsReq</code>
 */
class TrainPartyUseCardCsReq extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>uint32 ocidfbobheh = 14;</code>
     */
    protected $ocidfbobheh = 0;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type int $ocidfbobheh
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\StarRail::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>uint32 ocidfbobheh = 14;</code>
     * @return int
     */
    public function getOcidfbobheh()
    {
        return $this->ocidfbobheh;
    }

    /**
     * Generated from protobuf field <code>uint32 ocidfbobheh = 14;</code>
     * @param int $var
     * @return $this
     */
    public function setOcidfbobheh($var)
    {
        GPBUtil::checkUint32($var);
        $this->ocidfbobheh = $var;

        return $this;
    }

}
