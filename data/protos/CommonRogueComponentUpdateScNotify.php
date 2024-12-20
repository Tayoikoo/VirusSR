<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# NO CHECKED-IN PROTOBUF GENCODE
# source: StarRail.proto

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * KNKAFCLFMHK (5657)
 *
 * Generated from protobuf message <code>CommonRogueComponentUpdateScNotify</code>
 */
class CommonRogueComponentUpdateScNotify extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>uint32 nkpdmckfppp = 8;</code>
     */
    protected $nkpdmckfppp = 0;
    /**
     * Generated from protobuf field <code>uint32 pinognekcah = 2;</code>
     */
    protected $pinognekcah = 0;
    /**
     * Generated from protobuf field <code>.IDONDCHFKHG jmocnngmedg = 10;</code>
     */
    protected $jmocnngmedg = null;
    /**
     * Generated from protobuf field <code>uint32 rogue_magic_battle_const = 5;</code>
     */
    protected $rogue_magic_battle_const = 0;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type int $nkpdmckfppp
     *     @type int $pinognekcah
     *     @type \IDONDCHFKHG $jmocnngmedg
     *     @type int $rogue_magic_battle_const
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\StarRail::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>uint32 nkpdmckfppp = 8;</code>
     * @return int
     */
    public function getNkpdmckfppp()
    {
        return $this->nkpdmckfppp;
    }

    /**
     * Generated from protobuf field <code>uint32 nkpdmckfppp = 8;</code>
     * @param int $var
     * @return $this
     */
    public function setNkpdmckfppp($var)
    {
        GPBUtil::checkUint32($var);
        $this->nkpdmckfppp = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>uint32 pinognekcah = 2;</code>
     * @return int
     */
    public function getPinognekcah()
    {
        return $this->pinognekcah;
    }

    /**
     * Generated from protobuf field <code>uint32 pinognekcah = 2;</code>
     * @param int $var
     * @return $this
     */
    public function setPinognekcah($var)
    {
        GPBUtil::checkUint32($var);
        $this->pinognekcah = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>.IDONDCHFKHG jmocnngmedg = 10;</code>
     * @return \IDONDCHFKHG|null
     */
    public function getJmocnngmedg()
    {
        return $this->jmocnngmedg;
    }

    public function hasJmocnngmedg()
    {
        return isset($this->jmocnngmedg);
    }

    public function clearJmocnngmedg()
    {
        unset($this->jmocnngmedg);
    }

    /**
     * Generated from protobuf field <code>.IDONDCHFKHG jmocnngmedg = 10;</code>
     * @param \IDONDCHFKHG $var
     * @return $this
     */
    public function setJmocnngmedg($var)
    {
        GPBUtil::checkMessage($var, \IDONDCHFKHG::class);
        $this->jmocnngmedg = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>uint32 rogue_magic_battle_const = 5;</code>
     * @return int
     */
    public function getRogueMagicBattleConst()
    {
        return $this->rogue_magic_battle_const;
    }

    /**
     * Generated from protobuf field <code>uint32 rogue_magic_battle_const = 5;</code>
     * @param int $var
     * @return $this
     */
    public function setRogueMagicBattleConst($var)
    {
        GPBUtil::checkUint32($var);
        $this->rogue_magic_battle_const = $var;

        return $this;
    }

}

