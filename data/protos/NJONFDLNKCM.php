<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# NO CHECKED-IN PROTOBUF GENCODE
# source: StarRail.proto

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>NJONFDLNKCM</code>
 */
class NJONFDLNKCM extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>uint32 cckaekmoppp = 8;</code>
     */
    protected $cckaekmoppp = 0;
    /**
     * Generated from protobuf field <code>repeated uint32 ckmcagllhfl = 12;</code>
     */
    private $ckmcagllhfl;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type int $cckaekmoppp
     *     @type array<int>|\Google\Protobuf\Internal\RepeatedField $ckmcagllhfl
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\StarRail::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>uint32 cckaekmoppp = 8;</code>
     * @return int
     */
    public function getCckaekmoppp()
    {
        return $this->cckaekmoppp;
    }

    /**
     * Generated from protobuf field <code>uint32 cckaekmoppp = 8;</code>
     * @param int $var
     * @return $this
     */
    public function setCckaekmoppp($var)
    {
        GPBUtil::checkUint32($var);
        $this->cckaekmoppp = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>repeated uint32 ckmcagllhfl = 12;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getCkmcagllhfl()
    {
        return $this->ckmcagllhfl;
    }

    /**
     * Generated from protobuf field <code>repeated uint32 ckmcagllhfl = 12;</code>
     * @param array<int>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setCkmcagllhfl($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::UINT32);
        $this->ckmcagllhfl = $arr;

        return $this;
    }

}

