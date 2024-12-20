<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# NO CHECKED-IN PROTOBUF GENCODE
# source: StarRail.proto

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>SkillUseProperty</code>
 */
class SkillUseProperty extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>uint32 skill_id = 1;</code>
     */
    protected $skill_id = 0;
    /**
     * Generated from protobuf field <code>string skill_type = 2;</code>
     */
    protected $skill_type = '';
    /**
     * Generated from protobuf field <code>uint32 skill_level = 3;</code>
     */
    protected $skill_level = 0;
    /**
     * Generated from protobuf field <code>uint32 skill_use_count = 4;</code>
     */
    protected $skill_use_count = 0;
    /**
     * Generated from protobuf field <code>uint32 hnikocpbkai = 5;</code>
     */
    protected $hnikocpbkai = 0;
    /**
     * Generated from protobuf field <code>uint32 gbcbaoleckp = 6;</code>
     */
    protected $gbcbaoleckp = 0;
    /**
     * Generated from protobuf field <code>uint32 ehknagaoghb = 7;</code>
     */
    protected $ehknagaoghb = 0;
    /**
     * Generated from protobuf field <code>uint32 njmamcpgeik = 8;</code>
     */
    protected $njmamcpgeik = 0;
    /**
     * Generated from protobuf field <code>uint32 dmphgmkhlng = 9;</code>
     */
    protected $dmphgmkhlng = 0;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type int $skill_id
     *     @type string $skill_type
     *     @type int $skill_level
     *     @type int $skill_use_count
     *     @type int $hnikocpbkai
     *     @type int $gbcbaoleckp
     *     @type int $ehknagaoghb
     *     @type int $njmamcpgeik
     *     @type int $dmphgmkhlng
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\StarRail::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>uint32 skill_id = 1;</code>
     * @return int
     */
    public function getSkillId()
    {
        return $this->skill_id;
    }

    /**
     * Generated from protobuf field <code>uint32 skill_id = 1;</code>
     * @param int $var
     * @return $this
     */
    public function setSkillId($var)
    {
        GPBUtil::checkUint32($var);
        $this->skill_id = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>string skill_type = 2;</code>
     * @return string
     */
    public function getSkillType()
    {
        return $this->skill_type;
    }

    /**
     * Generated from protobuf field <code>string skill_type = 2;</code>
     * @param string $var
     * @return $this
     */
    public function setSkillType($var)
    {
        GPBUtil::checkString($var, True);
        $this->skill_type = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>uint32 skill_level = 3;</code>
     * @return int
     */
    public function getSkillLevel()
    {
        return $this->skill_level;
    }

    /**
     * Generated from protobuf field <code>uint32 skill_level = 3;</code>
     * @param int $var
     * @return $this
     */
    public function setSkillLevel($var)
    {
        GPBUtil::checkUint32($var);
        $this->skill_level = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>uint32 skill_use_count = 4;</code>
     * @return int
     */
    public function getSkillUseCount()
    {
        return $this->skill_use_count;
    }

    /**
     * Generated from protobuf field <code>uint32 skill_use_count = 4;</code>
     * @param int $var
     * @return $this
     */
    public function setSkillUseCount($var)
    {
        GPBUtil::checkUint32($var);
        $this->skill_use_count = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>uint32 hnikocpbkai = 5;</code>
     * @return int
     */
    public function getHnikocpbkai()
    {
        return $this->hnikocpbkai;
    }

    /**
     * Generated from protobuf field <code>uint32 hnikocpbkai = 5;</code>
     * @param int $var
     * @return $this
     */
    public function setHnikocpbkai($var)
    {
        GPBUtil::checkUint32($var);
        $this->hnikocpbkai = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>uint32 gbcbaoleckp = 6;</code>
     * @return int
     */
    public function getGbcbaoleckp()
    {
        return $this->gbcbaoleckp;
    }

    /**
     * Generated from protobuf field <code>uint32 gbcbaoleckp = 6;</code>
     * @param int $var
     * @return $this
     */
    public function setGbcbaoleckp($var)
    {
        GPBUtil::checkUint32($var);
        $this->gbcbaoleckp = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>uint32 ehknagaoghb = 7;</code>
     * @return int
     */
    public function getEhknagaoghb()
    {
        return $this->ehknagaoghb;
    }

    /**
     * Generated from protobuf field <code>uint32 ehknagaoghb = 7;</code>
     * @param int $var
     * @return $this
     */
    public function setEhknagaoghb($var)
    {
        GPBUtil::checkUint32($var);
        $this->ehknagaoghb = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>uint32 njmamcpgeik = 8;</code>
     * @return int
     */
    public function getNjmamcpgeik()
    {
        return $this->njmamcpgeik;
    }

    /**
     * Generated from protobuf field <code>uint32 njmamcpgeik = 8;</code>
     * @param int $var
     * @return $this
     */
    public function setNjmamcpgeik($var)
    {
        GPBUtil::checkUint32($var);
        $this->njmamcpgeik = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>uint32 dmphgmkhlng = 9;</code>
     * @return int
     */
    public function getDmphgmkhlng()
    {
        return $this->dmphgmkhlng;
    }

    /**
     * Generated from protobuf field <code>uint32 dmphgmkhlng = 9;</code>
     * @param int $var
     * @return $this
     */
    public function setDmphgmkhlng($var)
    {
        GPBUtil::checkUint32($var);
        $this->dmphgmkhlng = $var;

        return $this;
    }

}

