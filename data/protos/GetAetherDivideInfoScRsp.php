<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# NO CHECKED-IN PROTOBUF GENCODE
# source: StarRail.proto

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * OOFDMJLDDAA (4843)
 *
 * Generated from protobuf message <code>GetAetherDivideInfoScRsp</code>
 */
class GetAetherDivideInfoScRsp extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>uint32 ajfghjkdmlk = 7;</code>
     */
    protected $ajfghjkdmlk = 0;
    /**
     * Generated from protobuf field <code>repeated .AetherDivideSpiritInfo aboocdhapaf = 6;</code>
     */
    private $aboocdhapaf;
    /**
     * Generated from protobuf field <code>uint32 gfimlbecjlc = 13;</code>
     */
    protected $gfimlbecjlc = 0;
    /**
     * Generated from protobuf field <code>uint32 retcode = 9;</code>
     */
    protected $retcode = 0;
    /**
     * Generated from protobuf field <code>repeated .AetherSkillInfo skill_list = 12;</code>
     */
    private $skill_list;
    /**
     * Generated from protobuf field <code>uint32 cecnpiokeoh = 3;</code>
     */
    protected $cecnpiokeoh = 0;
    /**
     * Generated from protobuf field <code>uint32 pebjfclbmgc = 8;</code>
     */
    protected $pebjfclbmgc = 0;
    /**
     * Generated from protobuf field <code>repeated .AetherDivideLineupInfo lineup_list = 4;</code>
     */
    private $lineup_list;
    /**
     * Generated from protobuf field <code>uint32 obhcochafaa = 15;</code>
     */
    protected $obhcochafaa = 0;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type int $ajfghjkdmlk
     *     @type array<\AetherDivideSpiritInfo>|\Google\Protobuf\Internal\RepeatedField $aboocdhapaf
     *     @type int $gfimlbecjlc
     *     @type int $retcode
     *     @type array<\AetherSkillInfo>|\Google\Protobuf\Internal\RepeatedField $skill_list
     *     @type int $cecnpiokeoh
     *     @type int $pebjfclbmgc
     *     @type array<\AetherDivideLineupInfo>|\Google\Protobuf\Internal\RepeatedField $lineup_list
     *     @type int $obhcochafaa
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\StarRail::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>uint32 ajfghjkdmlk = 7;</code>
     * @return int
     */
    public function getAjfghjkdmlk()
    {
        return $this->ajfghjkdmlk;
    }

    /**
     * Generated from protobuf field <code>uint32 ajfghjkdmlk = 7;</code>
     * @param int $var
     * @return $this
     */
    public function setAjfghjkdmlk($var)
    {
        GPBUtil::checkUint32($var);
        $this->ajfghjkdmlk = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>repeated .AetherDivideSpiritInfo aboocdhapaf = 6;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getAboocdhapaf()
    {
        return $this->aboocdhapaf;
    }

    /**
     * Generated from protobuf field <code>repeated .AetherDivideSpiritInfo aboocdhapaf = 6;</code>
     * @param array<\AetherDivideSpiritInfo>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setAboocdhapaf($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \AetherDivideSpiritInfo::class);
        $this->aboocdhapaf = $arr;

        return $this;
    }

    /**
     * Generated from protobuf field <code>uint32 gfimlbecjlc = 13;</code>
     * @return int
     */
    public function getGfimlbecjlc()
    {
        return $this->gfimlbecjlc;
    }

    /**
     * Generated from protobuf field <code>uint32 gfimlbecjlc = 13;</code>
     * @param int $var
     * @return $this
     */
    public function setGfimlbecjlc($var)
    {
        GPBUtil::checkUint32($var);
        $this->gfimlbecjlc = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>uint32 retcode = 9;</code>
     * @return int
     */
    public function getRetcode()
    {
        return $this->retcode;
    }

    /**
     * Generated from protobuf field <code>uint32 retcode = 9;</code>
     * @param int $var
     * @return $this
     */
    public function setRetcode($var)
    {
        GPBUtil::checkUint32($var);
        $this->retcode = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>repeated .AetherSkillInfo skill_list = 12;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getSkillList()
    {
        return $this->skill_list;
    }

    /**
     * Generated from protobuf field <code>repeated .AetherSkillInfo skill_list = 12;</code>
     * @param array<\AetherSkillInfo>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setSkillList($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \AetherSkillInfo::class);
        $this->skill_list = $arr;

        return $this;
    }

    /**
     * Generated from protobuf field <code>uint32 cecnpiokeoh = 3;</code>
     * @return int
     */
    public function getCecnpiokeoh()
    {
        return $this->cecnpiokeoh;
    }

    /**
     * Generated from protobuf field <code>uint32 cecnpiokeoh = 3;</code>
     * @param int $var
     * @return $this
     */
    public function setCecnpiokeoh($var)
    {
        GPBUtil::checkUint32($var);
        $this->cecnpiokeoh = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>uint32 pebjfclbmgc = 8;</code>
     * @return int
     */
    public function getPebjfclbmgc()
    {
        return $this->pebjfclbmgc;
    }

    /**
     * Generated from protobuf field <code>uint32 pebjfclbmgc = 8;</code>
     * @param int $var
     * @return $this
     */
    public function setPebjfclbmgc($var)
    {
        GPBUtil::checkUint32($var);
        $this->pebjfclbmgc = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>repeated .AetherDivideLineupInfo lineup_list = 4;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getLineupList()
    {
        return $this->lineup_list;
    }

    /**
     * Generated from protobuf field <code>repeated .AetherDivideLineupInfo lineup_list = 4;</code>
     * @param array<\AetherDivideLineupInfo>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setLineupList($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \AetherDivideLineupInfo::class);
        $this->lineup_list = $arr;

        return $this;
    }

    /**
     * Generated from protobuf field <code>uint32 obhcochafaa = 15;</code>
     * @return int
     */
    public function getObhcochafaa()
    {
        return $this->obhcochafaa;
    }

    /**
     * Generated from protobuf field <code>uint32 obhcochafaa = 15;</code>
     * @param int $var
     * @return $this
     */
    public function setObhcochafaa($var)
    {
        GPBUtil::checkUint32($var);
        $this->obhcochafaa = $var;

        return $this;
    }

}

