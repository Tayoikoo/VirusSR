<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# NO CHECKED-IN PROTOBUF GENCODE
# source: StarRail.proto

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * MBMBGEPFGHD (3036)
 *
 * Generated from protobuf message <code>BattlePassInfoNotify</code>
 */
class BattlePassInfoNotify extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>uint64 kcdlogocbia = 13;</code>
     */
    protected $kcdlogocbia = 0;
    /**
     * Generated from protobuf field <code>uint64 ieblheiebcp = 15;</code>
     */
    protected $ieblheiebcp = 0;
    /**
     * Generated from protobuf field <code>uint32 exp = 6;</code>
     */
    protected $exp = 0;
    /**
     * Generated from protobuf field <code>uint32 ceoekkklneh = 12;</code>
     */
    protected $ceoekkklneh = 0;
    /**
     * Generated from protobuf field <code>uint64 koidcifmogg = 3;</code>
     */
    protected $koidcifmogg = 0;
    /**
     * Generated from protobuf field <code>uint64 ghmfioclbmb = 10;</code>
     */
    protected $ghmfioclbmb = 0;
    /**
     * Generated from protobuf field <code>.BpTierType nolcaklmpeg = 14;</code>
     */
    protected $nolcaklmpeg = 0;
    /**
     * Generated from protobuf field <code>uint64 cpohgjlgcph = 1;</code>
     */
    protected $cpohgjlgcph = 0;
    /**
     * Generated from protobuf field <code>uint32 iiipcopgjhj = 7;</code>
     */
    protected $iiipcopgjhj = 0;
    /**
     * Generated from protobuf field <code>uint32 level = 4;</code>
     */
    protected $level = 0;
    /**
     * Generated from protobuf field <code>uint64 dnbmkbmapce = 2;</code>
     */
    protected $dnbmkbmapce = 0;
    /**
     * Generated from protobuf field <code>uint64 pkagdaldbik = 5;</code>
     */
    protected $pkagdaldbik = 0;
    /**
     * Generated from protobuf field <code>uint64 lfgkipccmhm = 8;</code>
     */
    protected $lfgkipccmhm = 0;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type int|string $kcdlogocbia
     *     @type int|string $ieblheiebcp
     *     @type int $exp
     *     @type int $ceoekkklneh
     *     @type int|string $koidcifmogg
     *     @type int|string $ghmfioclbmb
     *     @type int $nolcaklmpeg
     *     @type int|string $cpohgjlgcph
     *     @type int $iiipcopgjhj
     *     @type int $level
     *     @type int|string $dnbmkbmapce
     *     @type int|string $pkagdaldbik
     *     @type int|string $lfgkipccmhm
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\StarRail::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>uint64 kcdlogocbia = 13;</code>
     * @return int|string
     */
    public function getKcdlogocbia()
    {
        return $this->kcdlogocbia;
    }

    /**
     * Generated from protobuf field <code>uint64 kcdlogocbia = 13;</code>
     * @param int|string $var
     * @return $this
     */
    public function setKcdlogocbia($var)
    {
        GPBUtil::checkUint64($var);
        $this->kcdlogocbia = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>uint64 ieblheiebcp = 15;</code>
     * @return int|string
     */
    public function getIeblheiebcp()
    {
        return $this->ieblheiebcp;
    }

    /**
     * Generated from protobuf field <code>uint64 ieblheiebcp = 15;</code>
     * @param int|string $var
     * @return $this
     */
    public function setIeblheiebcp($var)
    {
        GPBUtil::checkUint64($var);
        $this->ieblheiebcp = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>uint32 exp = 6;</code>
     * @return int
     */
    public function getExp()
    {
        return $this->exp;
    }

    /**
     * Generated from protobuf field <code>uint32 exp = 6;</code>
     * @param int $var
     * @return $this
     */
    public function setExp($var)
    {
        GPBUtil::checkUint32($var);
        $this->exp = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>uint32 ceoekkklneh = 12;</code>
     * @return int
     */
    public function getCeoekkklneh()
    {
        return $this->ceoekkklneh;
    }

    /**
     * Generated from protobuf field <code>uint32 ceoekkklneh = 12;</code>
     * @param int $var
     * @return $this
     */
    public function setCeoekkklneh($var)
    {
        GPBUtil::checkUint32($var);
        $this->ceoekkklneh = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>uint64 koidcifmogg = 3;</code>
     * @return int|string
     */
    public function getKoidcifmogg()
    {
        return $this->koidcifmogg;
    }

    /**
     * Generated from protobuf field <code>uint64 koidcifmogg = 3;</code>
     * @param int|string $var
     * @return $this
     */
    public function setKoidcifmogg($var)
    {
        GPBUtil::checkUint64($var);
        $this->koidcifmogg = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>uint64 ghmfioclbmb = 10;</code>
     * @return int|string
     */
    public function getGhmfioclbmb()
    {
        return $this->ghmfioclbmb;
    }

    /**
     * Generated from protobuf field <code>uint64 ghmfioclbmb = 10;</code>
     * @param int|string $var
     * @return $this
     */
    public function setGhmfioclbmb($var)
    {
        GPBUtil::checkUint64($var);
        $this->ghmfioclbmb = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>.BpTierType nolcaklmpeg = 14;</code>
     * @return int
     */
    public function getNolcaklmpeg()
    {
        return $this->nolcaklmpeg;
    }

    /**
     * Generated from protobuf field <code>.BpTierType nolcaklmpeg = 14;</code>
     * @param int $var
     * @return $this
     */
    public function setNolcaklmpeg($var)
    {
        GPBUtil::checkEnum($var, \BpTierType::class);
        $this->nolcaklmpeg = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>uint64 cpohgjlgcph = 1;</code>
     * @return int|string
     */
    public function getCpohgjlgcph()
    {
        return $this->cpohgjlgcph;
    }

    /**
     * Generated from protobuf field <code>uint64 cpohgjlgcph = 1;</code>
     * @param int|string $var
     * @return $this
     */
    public function setCpohgjlgcph($var)
    {
        GPBUtil::checkUint64($var);
        $this->cpohgjlgcph = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>uint32 iiipcopgjhj = 7;</code>
     * @return int
     */
    public function getIiipcopgjhj()
    {
        return $this->iiipcopgjhj;
    }

    /**
     * Generated from protobuf field <code>uint32 iiipcopgjhj = 7;</code>
     * @param int $var
     * @return $this
     */
    public function setIiipcopgjhj($var)
    {
        GPBUtil::checkUint32($var);
        $this->iiipcopgjhj = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>uint32 level = 4;</code>
     * @return int
     */
    public function getLevel()
    {
        return $this->level;
    }

    /**
     * Generated from protobuf field <code>uint32 level = 4;</code>
     * @param int $var
     * @return $this
     */
    public function setLevel($var)
    {
        GPBUtil::checkUint32($var);
        $this->level = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>uint64 dnbmkbmapce = 2;</code>
     * @return int|string
     */
    public function getDnbmkbmapce()
    {
        return $this->dnbmkbmapce;
    }

    /**
     * Generated from protobuf field <code>uint64 dnbmkbmapce = 2;</code>
     * @param int|string $var
     * @return $this
     */
    public function setDnbmkbmapce($var)
    {
        GPBUtil::checkUint64($var);
        $this->dnbmkbmapce = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>uint64 pkagdaldbik = 5;</code>
     * @return int|string
     */
    public function getPkagdaldbik()
    {
        return $this->pkagdaldbik;
    }

    /**
     * Generated from protobuf field <code>uint64 pkagdaldbik = 5;</code>
     * @param int|string $var
     * @return $this
     */
    public function setPkagdaldbik($var)
    {
        GPBUtil::checkUint64($var);
        $this->pkagdaldbik = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>uint64 lfgkipccmhm = 8;</code>
     * @return int|string
     */
    public function getLfgkipccmhm()
    {
        return $this->lfgkipccmhm;
    }

    /**
     * Generated from protobuf field <code>uint64 lfgkipccmhm = 8;</code>
     * @param int|string $var
     * @return $this
     */
    public function setLfgkipccmhm($var)
    {
        GPBUtil::checkUint64($var);
        $this->lfgkipccmhm = $var;

        return $this;
    }

}

