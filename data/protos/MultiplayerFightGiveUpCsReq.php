<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# NO CHECKED-IN PROTOBUF GENCODE
# source: StarRail.proto

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * ABLHPHEJMOC (1067)
 *
 * Generated from protobuf message <code>MultiplayerFightGiveUpCsReq</code>
 */
class MultiplayerFightGiveUpCsReq extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>uint64 fdboeognpfb = 1;</code>
     */
    protected $fdboeognpfb = 0;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type int|string $fdboeognpfb
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\StarRail::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>uint64 fdboeognpfb = 1;</code>
     * @return int|string
     */
    public function getFdboeognpfb()
    {
        return $this->fdboeognpfb;
    }

    /**
     * Generated from protobuf field <code>uint64 fdboeognpfb = 1;</code>
     * @param int|string $var
     * @return $this
     */
    public function setFdboeognpfb($var)
    {
        GPBUtil::checkUint64($var);
        $this->fdboeognpfb = $var;

        return $this;
    }

}

