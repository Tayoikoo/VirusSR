<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# NO CHECKED-IN PROTOBUF GENCODE
# source: StarRail.proto

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>RogueExploreScore</code>
 */
class RogueExploreScore extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>uint32 ikhioiiojha = 11;</code>
     */
    protected $ikhioiiojha = 0;
    /**
     * Generated from protobuf field <code>uint32 score_id = 15;</code>
     */
    protected $score_id = 0;
    /**
     * Generated from protobuf field <code>uint32 dnobhlepfee = 4;</code>
     */
    protected $dnobhlepfee = 0;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type int $ikhioiiojha
     *     @type int $score_id
     *     @type int $dnobhlepfee
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\StarRail::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>uint32 ikhioiiojha = 11;</code>
     * @return int
     */
    public function getIkhioiiojha()
    {
        return $this->ikhioiiojha;
    }

    /**
     * Generated from protobuf field <code>uint32 ikhioiiojha = 11;</code>
     * @param int $var
     * @return $this
     */
    public function setIkhioiiojha($var)
    {
        GPBUtil::checkUint32($var);
        $this->ikhioiiojha = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>uint32 score_id = 15;</code>
     * @return int
     */
    public function getScoreId()
    {
        return $this->score_id;
    }

    /**
     * Generated from protobuf field <code>uint32 score_id = 15;</code>
     * @param int $var
     * @return $this
     */
    public function setScoreId($var)
    {
        GPBUtil::checkUint32($var);
        $this->score_id = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>uint32 dnobhlepfee = 4;</code>
     * @return int
     */
    public function getDnobhlepfee()
    {
        return $this->dnobhlepfee;
    }

    /**
     * Generated from protobuf field <code>uint32 dnobhlepfee = 4;</code>
     * @param int $var
     * @return $this
     */
    public function setDnobhlepfee($var)
    {
        GPBUtil::checkUint32($var);
        $this->dnobhlepfee = $var;

        return $this;
    }

}
