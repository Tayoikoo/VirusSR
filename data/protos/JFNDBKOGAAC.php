<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# NO CHECKED-IN PROTOBUF GENCODE
# source: StarRail.proto

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>JFNDBKOGAAC</code>
 */
class JFNDBKOGAAC extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>uint32 hp = 3;</code>
     */
    protected $hp = 0;
    /**
     * Generated from protobuf field <code>uint32 jfapdndchjc = 2;</code>
     */
    protected $jfapdndchjc = 0;
    /**
     * Generated from protobuf field <code>uint32 fokmjkdgeme = 4;</code>
     */
    protected $fokmjkdgeme = 0;
    /**
     * Generated from protobuf field <code>uint32 score_id = 10;</code>
     */
    protected $score_id = 0;
    /**
     * Generated from protobuf field <code>uint32 rank = 9;</code>
     */
    protected $rank = 0;
    /**
     * Generated from protobuf field <code>.CKMJGCGAEEI state = 8;</code>
     */
    protected $state = 0;
    /**
     * Generated from protobuf field <code>bool kbaeiekokng = 12;</code>
     */
    protected $kbaeiekokng = false;
    /**
     * Generated from protobuf field <code>uint32 bcbjkkaojhl = 13;</code>
     */
    protected $bcbjkkaojhl = 0;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type int $hp
     *     @type int $jfapdndchjc
     *     @type int $fokmjkdgeme
     *     @type int $score_id
     *     @type int $rank
     *     @type int $state
     *     @type bool $kbaeiekokng
     *     @type int $bcbjkkaojhl
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\StarRail::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>uint32 hp = 3;</code>
     * @return int
     */
    public function getHp()
    {
        return $this->hp;
    }

    /**
     * Generated from protobuf field <code>uint32 hp = 3;</code>
     * @param int $var
     * @return $this
     */
    public function setHp($var)
    {
        GPBUtil::checkUint32($var);
        $this->hp = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>uint32 jfapdndchjc = 2;</code>
     * @return int
     */
    public function getJfapdndchjc()
    {
        return $this->jfapdndchjc;
    }

    /**
     * Generated from protobuf field <code>uint32 jfapdndchjc = 2;</code>
     * @param int $var
     * @return $this
     */
    public function setJfapdndchjc($var)
    {
        GPBUtil::checkUint32($var);
        $this->jfapdndchjc = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>uint32 fokmjkdgeme = 4;</code>
     * @return int
     */
    public function getFokmjkdgeme()
    {
        return $this->fokmjkdgeme;
    }

    /**
     * Generated from protobuf field <code>uint32 fokmjkdgeme = 4;</code>
     * @param int $var
     * @return $this
     */
    public function setFokmjkdgeme($var)
    {
        GPBUtil::checkUint32($var);
        $this->fokmjkdgeme = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>uint32 score_id = 10;</code>
     * @return int
     */
    public function getScoreId()
    {
        return $this->score_id;
    }

    /**
     * Generated from protobuf field <code>uint32 score_id = 10;</code>
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
     * Generated from protobuf field <code>uint32 rank = 9;</code>
     * @return int
     */
    public function getRank()
    {
        return $this->rank;
    }

    /**
     * Generated from protobuf field <code>uint32 rank = 9;</code>
     * @param int $var
     * @return $this
     */
    public function setRank($var)
    {
        GPBUtil::checkUint32($var);
        $this->rank = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>.CKMJGCGAEEI state = 8;</code>
     * @return int
     */
    public function getState()
    {
        return $this->state;
    }

    /**
     * Generated from protobuf field <code>.CKMJGCGAEEI state = 8;</code>
     * @param int $var
     * @return $this
     */
    public function setState($var)
    {
        GPBUtil::checkEnum($var, \CKMJGCGAEEI::class);
        $this->state = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>bool kbaeiekokng = 12;</code>
     * @return bool
     */
    public function getKbaeiekokng()
    {
        return $this->kbaeiekokng;
    }

    /**
     * Generated from protobuf field <code>bool kbaeiekokng = 12;</code>
     * @param bool $var
     * @return $this
     */
    public function setKbaeiekokng($var)
    {
        GPBUtil::checkBool($var);
        $this->kbaeiekokng = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>uint32 bcbjkkaojhl = 13;</code>
     * @return int
     */
    public function getBcbjkkaojhl()
    {
        return $this->bcbjkkaojhl;
    }

    /**
     * Generated from protobuf field <code>uint32 bcbjkkaojhl = 13;</code>
     * @param int $var
     * @return $this
     */
    public function setBcbjkkaojhl($var)
    {
        GPBUtil::checkUint32($var);
        $this->bcbjkkaojhl = $var;

        return $this;
    }

}

