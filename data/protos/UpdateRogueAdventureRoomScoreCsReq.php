<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# NO CHECKED-IN PROTOBUF GENCODE
# source: StarRail.proto

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * KHHDHGAJLFL (5655)
 *
 * Generated from protobuf message <code>UpdateRogueAdventureRoomScoreCsReq</code>
 */
class UpdateRogueAdventureRoomScoreCsReq extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>uint32 dpokcfkndig = 4;</code>
     */
    protected $dpokcfkndig = 0;
    /**
     * Generated from protobuf field <code>uint32 score_id = 2;</code>
     */
    protected $score_id = 0;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type int $dpokcfkndig
     *     @type int $score_id
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\StarRail::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>uint32 dpokcfkndig = 4;</code>
     * @return int
     */
    public function getDpokcfkndig()
    {
        return $this->dpokcfkndig;
    }

    /**
     * Generated from protobuf field <code>uint32 dpokcfkndig = 4;</code>
     * @param int $var
     * @return $this
     */
    public function setDpokcfkndig($var)
    {
        GPBUtil::checkUint32($var);
        $this->dpokcfkndig = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>uint32 score_id = 2;</code>
     * @return int
     */
    public function getScoreId()
    {
        return $this->score_id;
    }

    /**
     * Generated from protobuf field <code>uint32 score_id = 2;</code>
     * @param int $var
     * @return $this
     */
    public function setScoreId($var)
    {
        GPBUtil::checkUint32($var);
        $this->score_id = $var;

        return $this;
    }

}
