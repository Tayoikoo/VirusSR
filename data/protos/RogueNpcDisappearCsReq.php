<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# NO CHECKED-IN PROTOBUF GENCODE
# source: StarRail.proto

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * MNHCGMEFKKD (5643)
 *
 * Generated from protobuf message <code>RogueNpcDisappearCsReq</code>
 */
class RogueNpcDisappearCsReq extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>uint32 oeopaonkghk = 14;</code>
     */
    protected $oeopaonkghk = 0;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type int $oeopaonkghk
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\StarRail::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>uint32 oeopaonkghk = 14;</code>
     * @return int
     */
    public function getOeopaonkghk()
    {
        return $this->oeopaonkghk;
    }

    /**
     * Generated from protobuf field <code>uint32 oeopaonkghk = 14;</code>
     * @param int $var
     * @return $this
     */
    public function setOeopaonkghk($var)
    {
        GPBUtil::checkUint32($var);
        $this->oeopaonkghk = $var;

        return $this;
    }

}

