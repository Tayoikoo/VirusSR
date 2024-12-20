<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# NO CHECKED-IN PROTOBUF GENCODE
# source: StarRail.proto

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>ChessRogueLevelInfo</code>
 */
class ChessRogueLevelInfo extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>uint32 kchegpecmhm = 7;</code>
     */
    protected $kchegpecmhm = 0;
    /**
     * Generated from protobuf field <code>int32 olidjodakka = 14;</code>
     */
    protected $olidjodakka = 0;
    /**
     * Generated from protobuf field <code>.ChessRogueAreaInfo area_info = 1;</code>
     */
    protected $area_info = null;
    /**
     * Generated from protobuf field <code>uint32 gcceggbeicj = 15;</code>
     */
    protected $gcceggbeicj = 0;
    /**
     * Generated from protobuf field <code>repeated uint32 mkejbephkkb = 5;</code>
     */
    private $mkejbephkkb;
    /**
     * Generated from protobuf field <code>int32 bliakakfkfk = 11;</code>
     */
    protected $bliakakfkfk = 0;
    /**
     * Generated from protobuf field <code>uint32 id = 13;</code>
     */
    protected $id = 0;
    /**
     * Generated from protobuf field <code>repeated uint32 hdahahdpkmp = 4;</code>
     */
    private $hdahahdpkmp;
    /**
     * Generated from protobuf field <code>uint32 eeaplnkdklo = 2;</code>
     */
    protected $eeaplnkdklo = 0;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type int $kchegpecmhm
     *     @type int $olidjodakka
     *     @type \ChessRogueAreaInfo $area_info
     *     @type int $gcceggbeicj
     *     @type array<int>|\Google\Protobuf\Internal\RepeatedField $mkejbephkkb
     *     @type int $bliakakfkfk
     *     @type int $id
     *     @type array<int>|\Google\Protobuf\Internal\RepeatedField $hdahahdpkmp
     *     @type int $eeaplnkdklo
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\StarRail::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>uint32 kchegpecmhm = 7;</code>
     * @return int
     */
    public function getKchegpecmhm()
    {
        return $this->kchegpecmhm;
    }

    /**
     * Generated from protobuf field <code>uint32 kchegpecmhm = 7;</code>
     * @param int $var
     * @return $this
     */
    public function setKchegpecmhm($var)
    {
        GPBUtil::checkUint32($var);
        $this->kchegpecmhm = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>int32 olidjodakka = 14;</code>
     * @return int
     */
    public function getOlidjodakka()
    {
        return $this->olidjodakka;
    }

    /**
     * Generated from protobuf field <code>int32 olidjodakka = 14;</code>
     * @param int $var
     * @return $this
     */
    public function setOlidjodakka($var)
    {
        GPBUtil::checkInt32($var);
        $this->olidjodakka = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>.ChessRogueAreaInfo area_info = 1;</code>
     * @return \ChessRogueAreaInfo|null
     */
    public function getAreaInfo()
    {
        return $this->area_info;
    }

    public function hasAreaInfo()
    {
        return isset($this->area_info);
    }

    public function clearAreaInfo()
    {
        unset($this->area_info);
    }

    /**
     * Generated from protobuf field <code>.ChessRogueAreaInfo area_info = 1;</code>
     * @param \ChessRogueAreaInfo $var
     * @return $this
     */
    public function setAreaInfo($var)
    {
        GPBUtil::checkMessage($var, \ChessRogueAreaInfo::class);
        $this->area_info = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>uint32 gcceggbeicj = 15;</code>
     * @return int
     */
    public function getGcceggbeicj()
    {
        return $this->gcceggbeicj;
    }

    /**
     * Generated from protobuf field <code>uint32 gcceggbeicj = 15;</code>
     * @param int $var
     * @return $this
     */
    public function setGcceggbeicj($var)
    {
        GPBUtil::checkUint32($var);
        $this->gcceggbeicj = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>repeated uint32 mkejbephkkb = 5;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getMkejbephkkb()
    {
        return $this->mkejbephkkb;
    }

    /**
     * Generated from protobuf field <code>repeated uint32 mkejbephkkb = 5;</code>
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
     * Generated from protobuf field <code>int32 bliakakfkfk = 11;</code>
     * @return int
     */
    public function getBliakakfkfk()
    {
        return $this->bliakakfkfk;
    }

    /**
     * Generated from protobuf field <code>int32 bliakakfkfk = 11;</code>
     * @param int $var
     * @return $this
     */
    public function setBliakakfkfk($var)
    {
        GPBUtil::checkInt32($var);
        $this->bliakakfkfk = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>uint32 id = 13;</code>
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Generated from protobuf field <code>uint32 id = 13;</code>
     * @param int $var
     * @return $this
     */
    public function setId($var)
    {
        GPBUtil::checkUint32($var);
        $this->id = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>repeated uint32 hdahahdpkmp = 4;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getHdahahdpkmp()
    {
        return $this->hdahahdpkmp;
    }

    /**
     * Generated from protobuf field <code>repeated uint32 hdahahdpkmp = 4;</code>
     * @param array<int>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setHdahahdpkmp($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::UINT32);
        $this->hdahahdpkmp = $arr;

        return $this;
    }

    /**
     * Generated from protobuf field <code>uint32 eeaplnkdklo = 2;</code>
     * @return int
     */
    public function getEeaplnkdklo()
    {
        return $this->eeaplnkdklo;
    }

    /**
     * Generated from protobuf field <code>uint32 eeaplnkdklo = 2;</code>
     * @param int $var
     * @return $this
     */
    public function setEeaplnkdklo($var)
    {
        GPBUtil::checkUint32($var);
        $this->eeaplnkdklo = $var;

        return $this;
    }

}

