<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# NO CHECKED-IN PROTOBUF GENCODE
# source: StarRail.proto

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>AKPEJLAIBLA</code>
 */
class AKPEJLAIBLA extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>uint32 card_id = 1;</code>
     */
    protected $card_id = 0;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type int $card_id
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\StarRail::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>uint32 card_id = 1;</code>
     * @return int
     */
    public function getCardId()
    {
        return $this->card_id;
    }

    /**
     * Generated from protobuf field <code>uint32 card_id = 1;</code>
     * @param int $var
     * @return $this
     */
    public function setCardId($var)
    {
        GPBUtil::checkUint32($var);
        $this->card_id = $var;

        return $this;
    }

}

