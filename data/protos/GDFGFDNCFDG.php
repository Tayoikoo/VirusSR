<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# NO CHECKED-IN PROTOBUF GENCODE
# source: StarRail.proto

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>GDFGFDNCFDG</code>
 */
class GDFGFDNCFDG extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>repeated uint32 kmnmoacaenj = 6;</code>
     */
    private $kmnmoacaenj;
    /**
     * Generated from protobuf field <code>repeated .GJLNLGCBOFL train_party_card_info = 8;</code>
     */
    private $train_party_card_info;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type array<int>|\Google\Protobuf\Internal\RepeatedField $kmnmoacaenj
     *     @type array<\GJLNLGCBOFL>|\Google\Protobuf\Internal\RepeatedField $train_party_card_info
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\StarRail::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>repeated uint32 kmnmoacaenj = 6;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getKmnmoacaenj()
    {
        return $this->kmnmoacaenj;
    }

    /**
     * Generated from protobuf field <code>repeated uint32 kmnmoacaenj = 6;</code>
     * @param array<int>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setKmnmoacaenj($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::UINT32);
        $this->kmnmoacaenj = $arr;

        return $this;
    }

    /**
     * Generated from protobuf field <code>repeated .GJLNLGCBOFL train_party_card_info = 8;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getTrainPartyCardInfo()
    {
        return $this->train_party_card_info;
    }

    /**
     * Generated from protobuf field <code>repeated .GJLNLGCBOFL train_party_card_info = 8;</code>
     * @param array<\GJLNLGCBOFL>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setTrainPartyCardInfo($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \GJLNLGCBOFL::class);
        $this->train_party_card_info = $arr;

        return $this;
    }

}

