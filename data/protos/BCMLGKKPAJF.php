<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# NO CHECKED-IN PROTOBUF GENCODE
# source: StarRail.proto

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>BCMLGKKPAJF</code>
 */
class BCMLGKKPAJF extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>repeated uint32 LJLGCAGEFED = 8;</code>
     */
    private $LJLGCAGEFED;
    /**
     * Generated from protobuf field <code>uint32 MNAKFNFJLFK = 11;</code>
     */
    protected $MNAKFNFJLFK = 0;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type array<int>|\Google\Protobuf\Internal\RepeatedField $LJLGCAGEFED
     *     @type int $MNAKFNFJLFK
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\StarRail::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>repeated uint32 LJLGCAGEFED = 8;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getLJLGCAGEFED()
    {
        return $this->LJLGCAGEFED;
    }

    /**
     * Generated from protobuf field <code>repeated uint32 LJLGCAGEFED = 8;</code>
     * @param array<int>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setLJLGCAGEFED($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::UINT32);
        $this->LJLGCAGEFED = $arr;

        return $this;
    }

    /**
     * Generated from protobuf field <code>uint32 MNAKFNFJLFK = 11;</code>
     * @return int
     */
    public function getMNAKFNFJLFK()
    {
        return $this->MNAKFNFJLFK;
    }

    /**
     * Generated from protobuf field <code>uint32 MNAKFNFJLFK = 11;</code>
     * @param int $var
     * @return $this
     */
    public function setMNAKFNFJLFK($var)
    {
        GPBUtil::checkUint32($var);
        $this->MNAKFNFJLFK = $var;

        return $this;
    }

}

