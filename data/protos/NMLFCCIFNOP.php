<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# NO CHECKED-IN PROTOBUF GENCODE
# source: StarRail.proto

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>NMLFCCIFNOP</code>
 */
class NMLFCCIFNOP extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>uint32 nkpdmckfppp = 5;</code>
     */
    protected $nkpdmckfppp = 0;
    /**
     * Generated from protobuf field <code>repeated .IDONDCHFKHG hcoapfagbei = 3;</code>
     */
    private $hcoapfagbei;
    /**
     * Generated from protobuf field <code>uint32 pinognekcah = 2;</code>
     */
    protected $pinognekcah = 0;
    /**
     * Generated from protobuf field <code>uint32 rogue_magic_battle_const = 11;</code>
     */
    protected $rogue_magic_battle_const = 0;
    /**
     * Generated from protobuf field <code>uint32 djffjgbnmmk = 12;</code>
     */
    protected $djffjgbnmmk = 0;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type int $nkpdmckfppp
     *     @type array<\IDONDCHFKHG>|\Google\Protobuf\Internal\RepeatedField $hcoapfagbei
     *     @type int $pinognekcah
     *     @type int $rogue_magic_battle_const
     *     @type int $djffjgbnmmk
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\StarRail::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>uint32 nkpdmckfppp = 5;</code>
     * @return int
     */
    public function getNkpdmckfppp()
    {
        return $this->nkpdmckfppp;
    }

    /**
     * Generated from protobuf field <code>uint32 nkpdmckfppp = 5;</code>
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
     * Generated from protobuf field <code>repeated .IDONDCHFKHG hcoapfagbei = 3;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getHcoapfagbei()
    {
        return $this->hcoapfagbei;
    }

    /**
     * Generated from protobuf field <code>repeated .IDONDCHFKHG hcoapfagbei = 3;</code>
     * @param array<\IDONDCHFKHG>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setHcoapfagbei($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \IDONDCHFKHG::class);
        $this->hcoapfagbei = $arr;

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
     * Generated from protobuf field <code>uint32 rogue_magic_battle_const = 11;</code>
     * @return int
     */
    public function getRogueMagicBattleConst()
    {
        return $this->rogue_magic_battle_const;
    }

    /**
     * Generated from protobuf field <code>uint32 rogue_magic_battle_const = 11;</code>
     * @param int $var
     * @return $this
     */
    public function setRogueMagicBattleConst($var)
    {
        GPBUtil::checkUint32($var);
        $this->rogue_magic_battle_const = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>uint32 djffjgbnmmk = 12;</code>
     * @return int
     */
    public function getDjffjgbnmmk()
    {
        return $this->djffjgbnmmk;
    }

    /**
     * Generated from protobuf field <code>uint32 djffjgbnmmk = 12;</code>
     * @param int $var
     * @return $this
     */
    public function setDjffjgbnmmk($var)
    {
        GPBUtil::checkUint32($var);
        $this->djffjgbnmmk = $var;

        return $this;
    }

}

