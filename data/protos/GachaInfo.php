<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# NO CHECKED-IN PROTOBUF GENCODE
# source: StarRail.proto

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>GachaInfo</code>
 */
class GachaInfo extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>uint32 hjjmaaffiko = 14;</code>
     */
    protected $hjjmaaffiko = 0;
    /**
     * Generated from protobuf field <code>repeated uint32 dcfkplenjaj = 4;</code>
     */
    private $dcfkplenjaj;
    /**
     * Generated from protobuf field <code>int64 end_time = 15;</code>
     */
    protected $end_time = 0;
    /**
     * Generated from protobuf field <code>int64 begin_time = 8;</code>
     */
    protected $begin_time = 0;
    /**
     * Generated from protobuf field <code>.GachaCeiling gacha_ceiling = 11;</code>
     */
    protected $gacha_ceiling = null;
    /**
     * Generated from protobuf field <code>uint32 einkplbkapk = 1;</code>
     */
    protected $einkplbkapk = 0;
    /**
     * Generated from protobuf field <code>string fcicnlkhafc = 7;</code>
     */
    protected $fcicnlkhafc = '';
    /**
     * Generated from protobuf field <code>uint32 gacha_id = 5;</code>
     */
    protected $gacha_id = 0;
    /**
     * Generated from protobuf field <code>repeated uint32 nclapmfcnmf = 3;</code>
     */
    private $nclapmfcnmf;
    /**
     * Generated from protobuf field <code>string cofmjadcbel = 13;</code>
     */
    protected $cofmjadcbel = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type int $hjjmaaffiko
     *     @type array<int>|\Google\Protobuf\Internal\RepeatedField $dcfkplenjaj
     *     @type int|string $end_time
     *     @type int|string $begin_time
     *     @type \GachaCeiling $gacha_ceiling
     *     @type int $einkplbkapk
     *     @type string $fcicnlkhafc
     *     @type int $gacha_id
     *     @type array<int>|\Google\Protobuf\Internal\RepeatedField $nclapmfcnmf
     *     @type string $cofmjadcbel
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\StarRail::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>uint32 hjjmaaffiko = 14;</code>
     * @return int
     */
    public function getHjjmaaffiko()
    {
        return $this->hjjmaaffiko;
    }

    /**
     * Generated from protobuf field <code>uint32 hjjmaaffiko = 14;</code>
     * @param int $var
     * @return $this
     */
    public function setHjjmaaffiko($var)
    {
        GPBUtil::checkUint32($var);
        $this->hjjmaaffiko = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>repeated uint32 dcfkplenjaj = 4;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getDcfkplenjaj()
    {
        return $this->dcfkplenjaj;
    }

    /**
     * Generated from protobuf field <code>repeated uint32 dcfkplenjaj = 4;</code>
     * @param array<int>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setDcfkplenjaj($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::UINT32);
        $this->dcfkplenjaj = $arr;

        return $this;
    }

    /**
     * Generated from protobuf field <code>int64 end_time = 15;</code>
     * @return int|string
     */
    public function getEndTime()
    {
        return $this->end_time;
    }

    /**
     * Generated from protobuf field <code>int64 end_time = 15;</code>
     * @param int|string $var
     * @return $this
     */
    public function setEndTime($var)
    {
        GPBUtil::checkInt64($var);
        $this->end_time = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>int64 begin_time = 8;</code>
     * @return int|string
     */
    public function getBeginTime()
    {
        return $this->begin_time;
    }

    /**
     * Generated from protobuf field <code>int64 begin_time = 8;</code>
     * @param int|string $var
     * @return $this
     */
    public function setBeginTime($var)
    {
        GPBUtil::checkInt64($var);
        $this->begin_time = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>.GachaCeiling gacha_ceiling = 11;</code>
     * @return \GachaCeiling|null
     */
    public function getGachaCeiling()
    {
        return $this->gacha_ceiling;
    }

    public function hasGachaCeiling()
    {
        return isset($this->gacha_ceiling);
    }

    public function clearGachaCeiling()
    {
        unset($this->gacha_ceiling);
    }

    /**
     * Generated from protobuf field <code>.GachaCeiling gacha_ceiling = 11;</code>
     * @param \GachaCeiling $var
     * @return $this
     */
    public function setGachaCeiling($var)
    {
        GPBUtil::checkMessage($var, \GachaCeiling::class);
        $this->gacha_ceiling = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>uint32 einkplbkapk = 1;</code>
     * @return int
     */
    public function getEinkplbkapk()
    {
        return $this->einkplbkapk;
    }

    /**
     * Generated from protobuf field <code>uint32 einkplbkapk = 1;</code>
     * @param int $var
     * @return $this
     */
    public function setEinkplbkapk($var)
    {
        GPBUtil::checkUint32($var);
        $this->einkplbkapk = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>string fcicnlkhafc = 7;</code>
     * @return string
     */
    public function getFcicnlkhafc()
    {
        return $this->fcicnlkhafc;
    }

    /**
     * Generated from protobuf field <code>string fcicnlkhafc = 7;</code>
     * @param string $var
     * @return $this
     */
    public function setFcicnlkhafc($var)
    {
        GPBUtil::checkString($var, True);
        $this->fcicnlkhafc = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>uint32 gacha_id = 5;</code>
     * @return int
     */
    public function getGachaId()
    {
        return $this->gacha_id;
    }

    /**
     * Generated from protobuf field <code>uint32 gacha_id = 5;</code>
     * @param int $var
     * @return $this
     */
    public function setGachaId($var)
    {
        GPBUtil::checkUint32($var);
        $this->gacha_id = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>repeated uint32 nclapmfcnmf = 3;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getNclapmfcnmf()
    {
        return $this->nclapmfcnmf;
    }

    /**
     * Generated from protobuf field <code>repeated uint32 nclapmfcnmf = 3;</code>
     * @param array<int>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setNclapmfcnmf($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::UINT32);
        $this->nclapmfcnmf = $arr;

        return $this;
    }

    /**
     * Generated from protobuf field <code>string cofmjadcbel = 13;</code>
     * @return string
     */
    public function getCofmjadcbel()
    {
        return $this->cofmjadcbel;
    }

    /**
     * Generated from protobuf field <code>string cofmjadcbel = 13;</code>
     * @param string $var
     * @return $this
     */
    public function setCofmjadcbel($var)
    {
        GPBUtil::checkString($var, True);
        $this->cofmjadcbel = $var;

        return $this;
    }

}

