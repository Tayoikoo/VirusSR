<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# NO CHECKED-IN PROTOBUF GENCODE
# source: StarRail.proto

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * NKHCGHLADOF (7265)
 *
 * Generated from protobuf message <code>FightFestScoreUpdateNotify</code>
 */
class FightFestScoreUpdateNotify extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>uint32 score_id = 12;</code>
     */
    protected $score_id = 0;
    /**
     * Generated from protobuf field <code>uint32 ddbidgekhfk = 13;</code>
     */
    protected $ddbidgekhfk = 0;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type int $score_id
     *     @type int $ddbidgekhfk
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\StarRail::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>uint32 score_id = 12;</code>
     * @return int
     */
    public function getScoreId()
    {
        return $this->score_id;
    }

    /**
     * Generated from protobuf field <code>uint32 score_id = 12;</code>
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
     * Generated from protobuf field <code>uint32 ddbidgekhfk = 13;</code>
     * @return int
     */
    public function getDdbidgekhfk()
    {
        return $this->ddbidgekhfk;
    }

    /**
     * Generated from protobuf field <code>uint32 ddbidgekhfk = 13;</code>
     * @param int $var
     * @return $this
     */
    public function setDdbidgekhfk($var)
    {
        GPBUtil::checkUint32($var);
        $this->ddbidgekhfk = $var;

        return $this;
    }

}

