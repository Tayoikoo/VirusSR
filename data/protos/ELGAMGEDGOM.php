<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# NO CHECKED-IN PROTOBUF GENCODE
# source: StarRail.proto

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>ELGAMGEDGOM</code>
 */
class ELGAMGEDGOM extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>bool kphgmoidfnd = 8;</code>
     */
    protected $kphgmoidfnd = false;
    /**
     * Generated from protobuf field <code>repeated uint32 aonpfedmdbf = 13;</code>
     */
    private $aonpfedmdbf;
    /**
     * Generated from protobuf field <code>.LMMKDBFDOJF nmbommjjmmb = 2;</code>
     */
    protected $nmbommjjmmb = null;
    /**
     * Generated from protobuf field <code>uint32 kjkpmffamfk = 4;</code>
     */
    protected $kjkpmffamfk = 0;
    /**
     * Generated from protobuf field <code>uint32 lejnoloboge = 12;</code>
     */
    protected $lejnoloboge = 0;
    /**
     * Generated from protobuf field <code>.NCDFMCGOKLH dgkajmocfia = 3;</code>
     */
    protected $dgkajmocfia = null;
    /**
     * Generated from protobuf field <code>bool is_taken_reward = 14;</code>
     */
    protected $is_taken_reward = false;
    /**
     * Generated from protobuf field <code>bool hdmfplocpmk = 6;</code>
     */
    protected $hdmfplocpmk = false;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type bool $kphgmoidfnd
     *     @type array<int>|\Google\Protobuf\Internal\RepeatedField $aonpfedmdbf
     *     @type \LMMKDBFDOJF $nmbommjjmmb
     *     @type int $kjkpmffamfk
     *     @type int $lejnoloboge
     *     @type \NCDFMCGOKLH $dgkajmocfia
     *     @type bool $is_taken_reward
     *     @type bool $hdmfplocpmk
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\StarRail::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>bool kphgmoidfnd = 8;</code>
     * @return bool
     */
    public function getKphgmoidfnd()
    {
        return $this->kphgmoidfnd;
    }

    /**
     * Generated from protobuf field <code>bool kphgmoidfnd = 8;</code>
     * @param bool $var
     * @return $this
     */
    public function setKphgmoidfnd($var)
    {
        GPBUtil::checkBool($var);
        $this->kphgmoidfnd = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>repeated uint32 aonpfedmdbf = 13;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getAonpfedmdbf()
    {
        return $this->aonpfedmdbf;
    }

    /**
     * Generated from protobuf field <code>repeated uint32 aonpfedmdbf = 13;</code>
     * @param array<int>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setAonpfedmdbf($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::UINT32);
        $this->aonpfedmdbf = $arr;

        return $this;
    }

    /**
     * Generated from protobuf field <code>.LMMKDBFDOJF nmbommjjmmb = 2;</code>
     * @return \LMMKDBFDOJF|null
     */
    public function getNmbommjjmmb()
    {
        return $this->nmbommjjmmb;
    }

    public function hasNmbommjjmmb()
    {
        return isset($this->nmbommjjmmb);
    }

    public function clearNmbommjjmmb()
    {
        unset($this->nmbommjjmmb);
    }

    /**
     * Generated from protobuf field <code>.LMMKDBFDOJF nmbommjjmmb = 2;</code>
     * @param \LMMKDBFDOJF $var
     * @return $this
     */
    public function setNmbommjjmmb($var)
    {
        GPBUtil::checkMessage($var, \LMMKDBFDOJF::class);
        $this->nmbommjjmmb = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>uint32 kjkpmffamfk = 4;</code>
     * @return int
     */
    public function getKjkpmffamfk()
    {
        return $this->kjkpmffamfk;
    }

    /**
     * Generated from protobuf field <code>uint32 kjkpmffamfk = 4;</code>
     * @param int $var
     * @return $this
     */
    public function setKjkpmffamfk($var)
    {
        GPBUtil::checkUint32($var);
        $this->kjkpmffamfk = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>uint32 lejnoloboge = 12;</code>
     * @return int
     */
    public function getLejnoloboge()
    {
        return $this->lejnoloboge;
    }

    /**
     * Generated from protobuf field <code>uint32 lejnoloboge = 12;</code>
     * @param int $var
     * @return $this
     */
    public function setLejnoloboge($var)
    {
        GPBUtil::checkUint32($var);
        $this->lejnoloboge = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>.NCDFMCGOKLH dgkajmocfia = 3;</code>
     * @return \NCDFMCGOKLH|null
     */
    public function getDgkajmocfia()
    {
        return $this->dgkajmocfia;
    }

    public function hasDgkajmocfia()
    {
        return isset($this->dgkajmocfia);
    }

    public function clearDgkajmocfia()
    {
        unset($this->dgkajmocfia);
    }

    /**
     * Generated from protobuf field <code>.NCDFMCGOKLH dgkajmocfia = 3;</code>
     * @param \NCDFMCGOKLH $var
     * @return $this
     */
    public function setDgkajmocfia($var)
    {
        GPBUtil::checkMessage($var, \NCDFMCGOKLH::class);
        $this->dgkajmocfia = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>bool is_taken_reward = 14;</code>
     * @return bool
     */
    public function getIsTakenReward()
    {
        return $this->is_taken_reward;
    }

    /**
     * Generated from protobuf field <code>bool is_taken_reward = 14;</code>
     * @param bool $var
     * @return $this
     */
    public function setIsTakenReward($var)
    {
        GPBUtil::checkBool($var);
        $this->is_taken_reward = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>bool hdmfplocpmk = 6;</code>
     * @return bool
     */
    public function getHdmfplocpmk()
    {
        return $this->hdmfplocpmk;
    }

    /**
     * Generated from protobuf field <code>bool hdmfplocpmk = 6;</code>
     * @param bool $var
     * @return $this
     */
    public function setHdmfplocpmk($var)
    {
        GPBUtil::checkBool($var);
        $this->hdmfplocpmk = $var;

        return $this;
    }

}

