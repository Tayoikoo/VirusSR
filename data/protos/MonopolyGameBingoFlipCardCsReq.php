<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# NO CHECKED-IN PROTOBUF GENCODE
# source: StarRail.proto

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * FDHPMNIODLM (7017)
 *
 * Generated from protobuf message <code>MonopolyGameBingoFlipCardCsReq</code>
 */
class MonopolyGameBingoFlipCardCsReq extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>uint32 khmokmcehbb = 5;</code>
     */
    protected $khmokmcehbb = 0;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type int $khmokmcehbb
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\StarRail::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>uint32 khmokmcehbb = 5;</code>
     * @return int
     */
    public function getKhmokmcehbb()
    {
        return $this->khmokmcehbb;
    }

    /**
     * Generated from protobuf field <code>uint32 khmokmcehbb = 5;</code>
     * @param int $var
     * @return $this
     */
    public function setKhmokmcehbb($var)
    {
        GPBUtil::checkUint32($var);
        $this->khmokmcehbb = $var;

        return $this;
    }

}

