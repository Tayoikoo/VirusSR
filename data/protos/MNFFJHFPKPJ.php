<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# NO CHECKED-IN PROTOBUF GENCODE
# source: StarRail.proto

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>MNFFJHFPKPJ</code>
 */
class MNFFJHFPKPJ extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>repeated .KMFBLAGAOEE jehopbnjppl = 5;</code>
     */
    private $jehopbnjppl;
    /**
     * Generated from protobuf field <code>uint32 loiamejhcil = 7;</code>
     */
    protected $loiamejhcil = 0;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type array<\KMFBLAGAOEE>|\Google\Protobuf\Internal\RepeatedField $jehopbnjppl
     *     @type int $loiamejhcil
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\StarRail::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>repeated .KMFBLAGAOEE jehopbnjppl = 5;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getJehopbnjppl()
    {
        return $this->jehopbnjppl;
    }

    /**
     * Generated from protobuf field <code>repeated .KMFBLAGAOEE jehopbnjppl = 5;</code>
     * @param array<\KMFBLAGAOEE>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setJehopbnjppl($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \KMFBLAGAOEE::class);
        $this->jehopbnjppl = $arr;

        return $this;
    }

    /**
     * Generated from protobuf field <code>uint32 loiamejhcil = 7;</code>
     * @return int
     */
    public function getLoiamejhcil()
    {
        return $this->loiamejhcil;
    }

    /**
     * Generated from protobuf field <code>uint32 loiamejhcil = 7;</code>
     * @param int $var
     * @return $this
     */
    public function setLoiamejhcil($var)
    {
        GPBUtil::checkUint32($var);
        $this->loiamejhcil = $var;

        return $this;
    }

}

