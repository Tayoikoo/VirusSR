<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# NO CHECKED-IN PROTOBUF GENCODE
# source: StarRail.proto

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>RogueExploreScoreInfo</code>
 */
class RogueExploreScoreInfo extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>repeated .RogueExploreScore ledhadhhcad = 1;</code>
     */
    private $ledhadhhcad;
    /**
     * Generated from protobuf field <code>uint32 aaijabgnada = 8;</code>
     */
    protected $aaijabgnada = 0;
    /**
     * Generated from protobuf field <code>float kfjibjojdjj = 4;</code>
     */
    protected $kfjibjojdjj = 0.0;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type array<\RogueExploreScore>|\Google\Protobuf\Internal\RepeatedField $ledhadhhcad
     *     @type int $aaijabgnada
     *     @type float $kfjibjojdjj
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\StarRail::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>repeated .RogueExploreScore ledhadhhcad = 1;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getLedhadhhcad()
    {
        return $this->ledhadhhcad;
    }

    /**
     * Generated from protobuf field <code>repeated .RogueExploreScore ledhadhhcad = 1;</code>
     * @param array<\RogueExploreScore>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setLedhadhhcad($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \RogueExploreScore::class);
        $this->ledhadhhcad = $arr;

        return $this;
    }

    /**
     * Generated from protobuf field <code>uint32 aaijabgnada = 8;</code>
     * @return int
     */
    public function getAaijabgnada()
    {
        return $this->aaijabgnada;
    }

    /**
     * Generated from protobuf field <code>uint32 aaijabgnada = 8;</code>
     * @param int $var
     * @return $this
     */
    public function setAaijabgnada($var)
    {
        GPBUtil::checkUint32($var);
        $this->aaijabgnada = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>float kfjibjojdjj = 4;</code>
     * @return float
     */
    public function getKfjibjojdjj()
    {
        return $this->kfjibjojdjj;
    }

    /**
     * Generated from protobuf field <code>float kfjibjojdjj = 4;</code>
     * @param float $var
     * @return $this
     */
    public function setKfjibjojdjj($var)
    {
        GPBUtil::checkFloat($var);
        $this->kfjibjojdjj = $var;

        return $this;
    }

}

