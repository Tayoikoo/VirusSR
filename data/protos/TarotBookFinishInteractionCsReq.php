<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# NO CHECKED-IN PROTOBUF GENCODE
# source: StarRail.proto

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * LOLLGFMACPJ (8148)
 *
 * Generated from protobuf message <code>TarotBookFinishInteractionCsReq</code>
 */
class TarotBookFinishInteractionCsReq extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>uint32 hfciaffpapm = 10;</code>
     */
    protected $hfciaffpapm = 0;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type int $hfciaffpapm
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\StarRail::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>uint32 hfciaffpapm = 10;</code>
     * @return int
     */
    public function getHfciaffpapm()
    {
        return $this->hfciaffpapm;
    }

    /**
     * Generated from protobuf field <code>uint32 hfciaffpapm = 10;</code>
     * @param int $var
     * @return $this
     */
    public function setHfciaffpapm($var)
    {
        GPBUtil::checkUint32($var);
        $this->hfciaffpapm = $var;

        return $this;
    }

}

