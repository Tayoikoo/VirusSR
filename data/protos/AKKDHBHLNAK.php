<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# NO CHECKED-IN PROTOBUF GENCODE
# source: StarRail.proto

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>AKKDHBHLNAK</code>
 */
class AKKDHBHLNAK extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>.ChessRogueQueryAeonInfo chess_aeon_info = 11;</code>
     */
    protected $chess_aeon_info = null;
    /**
     * Generated from protobuf field <code>repeated uint32 mkejbephkkb = 1;</code>
     */
    private $mkejbephkkb;
    /**
     * Generated from protobuf field <code>.APGEBMNDCBD pkhijecbkha = 6;</code>
     */
    protected $pkhijecbkha = null;
    /**
     * Generated from protobuf field <code>.BBECLJOFGPM mmohllkalak = 12;</code>
     */
    protected $mmohllkalak = null;
    /**
     * Generated from protobuf field <code>.HEEPKPHCLGB lgofoilnonl = 9;</code>
     */
    protected $lgofoilnonl = null;
    /**
     * Generated from protobuf field <code>repeated uint32 hdahahdpkmp = 5;</code>
     */
    private $hdahahdpkmp;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \ChessRogueQueryAeonInfo $chess_aeon_info
     *     @type array<int>|\Google\Protobuf\Internal\RepeatedField $mkejbephkkb
     *     @type \APGEBMNDCBD $pkhijecbkha
     *     @type \BBECLJOFGPM $mmohllkalak
     *     @type \HEEPKPHCLGB $lgofoilnonl
     *     @type array<int>|\Google\Protobuf\Internal\RepeatedField $hdahahdpkmp
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\StarRail::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>.ChessRogueQueryAeonInfo chess_aeon_info = 11;</code>
     * @return \ChessRogueQueryAeonInfo|null
     */
    public function getChessAeonInfo()
    {
        return $this->chess_aeon_info;
    }

    public function hasChessAeonInfo()
    {
        return isset($this->chess_aeon_info);
    }

    public function clearChessAeonInfo()
    {
        unset($this->chess_aeon_info);
    }

    /**
     * Generated from protobuf field <code>.ChessRogueQueryAeonInfo chess_aeon_info = 11;</code>
     * @param \ChessRogueQueryAeonInfo $var
     * @return $this
     */
    public function setChessAeonInfo($var)
    {
        GPBUtil::checkMessage($var, \ChessRogueQueryAeonInfo::class);
        $this->chess_aeon_info = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>repeated uint32 mkejbephkkb = 1;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getMkejbephkkb()
    {
        return $this->mkejbephkkb;
    }

    /**
     * Generated from protobuf field <code>repeated uint32 mkejbephkkb = 1;</code>
     * @param array<int>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setMkejbephkkb($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::UINT32);
        $this->mkejbephkkb = $arr;

        return $this;
    }

    /**
     * Generated from protobuf field <code>.APGEBMNDCBD pkhijecbkha = 6;</code>
     * @return \APGEBMNDCBD|null
     */
    public function getPkhijecbkha()
    {
        return $this->pkhijecbkha;
    }

    public function hasPkhijecbkha()
    {
        return isset($this->pkhijecbkha);
    }

    public function clearPkhijecbkha()
    {
        unset($this->pkhijecbkha);
    }

    /**
     * Generated from protobuf field <code>.APGEBMNDCBD pkhijecbkha = 6;</code>
     * @param \APGEBMNDCBD $var
     * @return $this
     */
    public function setPkhijecbkha($var)
    {
        GPBUtil::checkMessage($var, \APGEBMNDCBD::class);
        $this->pkhijecbkha = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>.BBECLJOFGPM mmohllkalak = 12;</code>
     * @return \BBECLJOFGPM|null
     */
    public function getMmohllkalak()
    {
        return $this->mmohllkalak;
    }

    public function hasMmohllkalak()
    {
        return isset($this->mmohllkalak);
    }

    public function clearMmohllkalak()
    {
        unset($this->mmohllkalak);
    }

    /**
     * Generated from protobuf field <code>.BBECLJOFGPM mmohllkalak = 12;</code>
     * @param \BBECLJOFGPM $var
     * @return $this
     */
    public function setMmohllkalak($var)
    {
        GPBUtil::checkMessage($var, \BBECLJOFGPM::class);
        $this->mmohllkalak = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>.HEEPKPHCLGB lgofoilnonl = 9;</code>
     * @return \HEEPKPHCLGB|null
     */
    public function getLgofoilnonl()
    {
        return $this->lgofoilnonl;
    }

    public function hasLgofoilnonl()
    {
        return isset($this->lgofoilnonl);
    }

    public function clearLgofoilnonl()
    {
        unset($this->lgofoilnonl);
    }

    /**
     * Generated from protobuf field <code>.HEEPKPHCLGB lgofoilnonl = 9;</code>
     * @param \HEEPKPHCLGB $var
     * @return $this
     */
    public function setLgofoilnonl($var)
    {
        GPBUtil::checkMessage($var, \HEEPKPHCLGB::class);
        $this->lgofoilnonl = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>repeated uint32 hdahahdpkmp = 5;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getHdahahdpkmp()
    {
        return $this->hdahahdpkmp;
    }

    /**
     * Generated from protobuf field <code>repeated uint32 hdahahdpkmp = 5;</code>
     * @param array<int>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setHdahahdpkmp($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::UINT32);
        $this->hdahahdpkmp = $arr;

        return $this;
    }

}
