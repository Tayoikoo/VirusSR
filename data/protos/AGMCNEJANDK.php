<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# NO CHECKED-IN PROTOBUF GENCODE
# source: StarRail.proto

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>AGMCNEJANDK</code>
 */
class AGMCNEJANDK extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>int64 goonpndocih = 13;</code>
     */
    protected $goonpndocih = 0;
    /**
     * Generated from protobuf field <code>uint32 cbahfgpjemp = 5;</code>
     */
    protected $cbahfgpjemp = 0;
    /**
     * Generated from protobuf field <code>repeated .KEKMJKOHBOH cjgmlcaklfi = 8;</code>
     */
    private $cjgmlcaklfi;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type int|string $goonpndocih
     *     @type int $cbahfgpjemp
     *     @type array<\KEKMJKOHBOH>|\Google\Protobuf\Internal\RepeatedField $cjgmlcaklfi
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\StarRail::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>int64 goonpndocih = 13;</code>
     * @return int|string
     */
    public function getGoonpndocih()
    {
        return $this->goonpndocih;
    }

    /**
     * Generated from protobuf field <code>int64 goonpndocih = 13;</code>
     * @param int|string $var
     * @return $this
     */
    public function setGoonpndocih($var)
    {
        GPBUtil::checkInt64($var);
        $this->goonpndocih = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>uint32 cbahfgpjemp = 5;</code>
     * @return int
     */
    public function getCbahfgpjemp()
    {
        return $this->cbahfgpjemp;
    }

    /**
     * Generated from protobuf field <code>uint32 cbahfgpjemp = 5;</code>
     * @param int $var
     * @return $this
     */
    public function setCbahfgpjemp($var)
    {
        GPBUtil::checkUint32($var);
        $this->cbahfgpjemp = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>repeated .KEKMJKOHBOH cjgmlcaklfi = 8;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getCjgmlcaklfi()
    {
        return $this->cjgmlcaklfi;
    }

    /**
     * Generated from protobuf field <code>repeated .KEKMJKOHBOH cjgmlcaklfi = 8;</code>
     * @param array<\KEKMJKOHBOH>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setCjgmlcaklfi($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \KEKMJKOHBOH::class);
        $this->cjgmlcaklfi = $arr;

        return $this;
    }

}

