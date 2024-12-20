<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# NO CHECKED-IN PROTOBUF GENCODE
# source: StarRail.proto

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>GJPLDENOPEN</code>
 */
class GJPLDENOPEN extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>uint32 exp = 15;</code>
     */
    protected $exp = 0;
    /**
     * Generated from protobuf field <code>uint32 level = 8;</code>
     */
    protected $level = 0;
    /**
     * Generated from protobuf field <code>uint32 tid = 3;</code>
     */
    protected $tid = 0;
    /**
     * Generated from protobuf field <code>uint32 promotion = 12;</code>
     */
    protected $promotion = 0;
    /**
     * Generated from protobuf field <code>uint32 rank = 10;</code>
     */
    protected $rank = 0;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type int $exp
     *     @type int $level
     *     @type int $tid
     *     @type int $promotion
     *     @type int $rank
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\StarRail::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>uint32 exp = 15;</code>
     * @return int
     */
    public function getExp()
    {
        return $this->exp;
    }

    /**
     * Generated from protobuf field <code>uint32 exp = 15;</code>
     * @param int $var
     * @return $this
     */
    public function setExp($var)
    {
        GPBUtil::checkUint32($var);
        $this->exp = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>uint32 level = 8;</code>
     * @return int
     */
    public function getLevel()
    {
        return $this->level;
    }

    /**
     * Generated from protobuf field <code>uint32 level = 8;</code>
     * @param int $var
     * @return $this
     */
    public function setLevel($var)
    {
        GPBUtil::checkUint32($var);
        $this->level = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>uint32 tid = 3;</code>
     * @return int
     */
    public function getTid()
    {
        return $this->tid;
    }

    /**
     * Generated from protobuf field <code>uint32 tid = 3;</code>
     * @param int $var
     * @return $this
     */
    public function setTid($var)
    {
        GPBUtil::checkUint32($var);
        $this->tid = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>uint32 promotion = 12;</code>
     * @return int
     */
    public function getPromotion()
    {
        return $this->promotion;
    }

    /**
     * Generated from protobuf field <code>uint32 promotion = 12;</code>
     * @param int $var
     * @return $this
     */
    public function setPromotion($var)
    {
        GPBUtil::checkUint32($var);
        $this->promotion = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>uint32 rank = 10;</code>
     * @return int
     */
    public function getRank()
    {
        return $this->rank;
    }

    /**
     * Generated from protobuf field <code>uint32 rank = 10;</code>
     * @param int $var
     * @return $this
     */
    public function setRank($var)
    {
        GPBUtil::checkUint32($var);
        $this->rank = $var;

        return $this;
    }

}

