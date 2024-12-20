<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# NO CHECKED-IN PROTOBUF GENCODE
# source: StarRail.proto

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * JMFKPCBKMIH (4795)
 *
 * Generated from protobuf message <code>GetAlleyInfoScRsp</code>
 */
class GetAlleyInfoScRsp extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>.KNKNOKONJJD dbpcglolbjb = 14;</code>
     */
    protected $dbpcglolbjb = null;
    /**
     * Generated from protobuf field <code>uint32 coin_cost = 15;</code>
     */
    protected $coin_cost = 0;
    /**
     * Generated from protobuf field <code>repeated .FBMJMHIIODF jpgocegdlol = 1;</code>
     */
    private $jpgocegdlol;
    /**
     * Generated from protobuf field <code>map<uint32, uint32> oamofncmdhj = 11;</code>
     */
    private $oamofncmdhj;
    /**
     * Generated from protobuf field <code>uint32 cbpmpdggjcp = 10;</code>
     */
    protected $cbpmpdggjcp = 0;
    /**
     * Generated from protobuf field <code>.OKFBIFCDJHL afinlclfcka = 6;</code>
     */
    protected $afinlclfcka = null;
    /**
     * Generated from protobuf field <code>repeated uint32 ncophnjnmgl = 13;</code>
     */
    private $ncophnjnmgl;
    /**
     * Generated from protobuf field <code>uint32 level = 3;</code>
     */
    protected $level = 0;
    /**
     * Generated from protobuf field <code>uint32 retcode = 2;</code>
     */
    protected $retcode = 0;
    /**
     * Generated from protobuf field <code>repeated uint32 dbimhgddfgl = 9;</code>
     */
    private $dbimhgddfgl;
    /**
     * Generated from protobuf field <code>repeated uint32 dbafeacgkpp = 8;</code>
     */
    private $dbafeacgkpp;
    /**
     * Generated from protobuf field <code>.MEDPAMLOEMC bmbedghcnkj = 4;</code>
     */
    protected $bmbedghcnkj = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \KNKNOKONJJD $dbpcglolbjb
     *     @type int $coin_cost
     *     @type array<\FBMJMHIIODF>|\Google\Protobuf\Internal\RepeatedField $jpgocegdlol
     *     @type array|\Google\Protobuf\Internal\MapField $oamofncmdhj
     *     @type int $cbpmpdggjcp
     *     @type \OKFBIFCDJHL $afinlclfcka
     *     @type array<int>|\Google\Protobuf\Internal\RepeatedField $ncophnjnmgl
     *     @type int $level
     *     @type int $retcode
     *     @type array<int>|\Google\Protobuf\Internal\RepeatedField $dbimhgddfgl
     *     @type array<int>|\Google\Protobuf\Internal\RepeatedField $dbafeacgkpp
     *     @type \MEDPAMLOEMC $bmbedghcnkj
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\StarRail::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>.KNKNOKONJJD dbpcglolbjb = 14;</code>
     * @return \KNKNOKONJJD|null
     */
    public function getDbpcglolbjb()
    {
        return $this->dbpcglolbjb;
    }

    public function hasDbpcglolbjb()
    {
        return isset($this->dbpcglolbjb);
    }

    public function clearDbpcglolbjb()
    {
        unset($this->dbpcglolbjb);
    }

    /**
     * Generated from protobuf field <code>.KNKNOKONJJD dbpcglolbjb = 14;</code>
     * @param \KNKNOKONJJD $var
     * @return $this
     */
    public function setDbpcglolbjb($var)
    {
        GPBUtil::checkMessage($var, \KNKNOKONJJD::class);
        $this->dbpcglolbjb = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>uint32 coin_cost = 15;</code>
     * @return int
     */
    public function getCoinCost()
    {
        return $this->coin_cost;
    }

    /**
     * Generated from protobuf field <code>uint32 coin_cost = 15;</code>
     * @param int $var
     * @return $this
     */
    public function setCoinCost($var)
    {
        GPBUtil::checkUint32($var);
        $this->coin_cost = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>repeated .FBMJMHIIODF jpgocegdlol = 1;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getJpgocegdlol()
    {
        return $this->jpgocegdlol;
    }

    /**
     * Generated from protobuf field <code>repeated .FBMJMHIIODF jpgocegdlol = 1;</code>
     * @param array<\FBMJMHIIODF>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setJpgocegdlol($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \FBMJMHIIODF::class);
        $this->jpgocegdlol = $arr;

        return $this;
    }

    /**
     * Generated from protobuf field <code>map<uint32, uint32> oamofncmdhj = 11;</code>
     * @return \Google\Protobuf\Internal\MapField
     */
    public function getOamofncmdhj()
    {
        return $this->oamofncmdhj;
    }

    /**
     * Generated from protobuf field <code>map<uint32, uint32> oamofncmdhj = 11;</code>
     * @param array|\Google\Protobuf\Internal\MapField $var
     * @return $this
     */
    public function setOamofncmdhj($var)
    {
        $arr = GPBUtil::checkMapField($var, \Google\Protobuf\Internal\GPBType::UINT32, \Google\Protobuf\Internal\GPBType::UINT32);
        $this->oamofncmdhj = $arr;

        return $this;
    }

    /**
     * Generated from protobuf field <code>uint32 cbpmpdggjcp = 10;</code>
     * @return int
     */
    public function getCbpmpdggjcp()
    {
        return $this->cbpmpdggjcp;
    }

    /**
     * Generated from protobuf field <code>uint32 cbpmpdggjcp = 10;</code>
     * @param int $var
     * @return $this
     */
    public function setCbpmpdggjcp($var)
    {
        GPBUtil::checkUint32($var);
        $this->cbpmpdggjcp = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>.OKFBIFCDJHL afinlclfcka = 6;</code>
     * @return \OKFBIFCDJHL|null
     */
    public function getAfinlclfcka()
    {
        return $this->afinlclfcka;
    }

    public function hasAfinlclfcka()
    {
        return isset($this->afinlclfcka);
    }

    public function clearAfinlclfcka()
    {
        unset($this->afinlclfcka);
    }

    /**
     * Generated from protobuf field <code>.OKFBIFCDJHL afinlclfcka = 6;</code>
     * @param \OKFBIFCDJHL $var
     * @return $this
     */
    public function setAfinlclfcka($var)
    {
        GPBUtil::checkMessage($var, \OKFBIFCDJHL::class);
        $this->afinlclfcka = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>repeated uint32 ncophnjnmgl = 13;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getNcophnjnmgl()
    {
        return $this->ncophnjnmgl;
    }

    /**
     * Generated from protobuf field <code>repeated uint32 ncophnjnmgl = 13;</code>
     * @param array<int>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setNcophnjnmgl($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::UINT32);
        $this->ncophnjnmgl = $arr;

        return $this;
    }

    /**
     * Generated from protobuf field <code>uint32 level = 3;</code>
     * @return int
     */
    public function getLevel()
    {
        return $this->level;
    }

    /**
     * Generated from protobuf field <code>uint32 level = 3;</code>
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
     * Generated from protobuf field <code>uint32 retcode = 2;</code>
     * @return int
     */
    public function getRetcode()
    {
        return $this->retcode;
    }

    /**
     * Generated from protobuf field <code>uint32 retcode = 2;</code>
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
     * Generated from protobuf field <code>repeated uint32 dbimhgddfgl = 9;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getDbimhgddfgl()
    {
        return $this->dbimhgddfgl;
    }

    /**
     * Generated from protobuf field <code>repeated uint32 dbimhgddfgl = 9;</code>
     * @param array<int>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setDbimhgddfgl($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::UINT32);
        $this->dbimhgddfgl = $arr;

        return $this;
    }

    /**
     * Generated from protobuf field <code>repeated uint32 dbafeacgkpp = 8;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getDbafeacgkpp()
    {
        return $this->dbafeacgkpp;
    }

    /**
     * Generated from protobuf field <code>repeated uint32 dbafeacgkpp = 8;</code>
     * @param array<int>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setDbafeacgkpp($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::UINT32);
        $this->dbafeacgkpp = $arr;

        return $this;
    }

    /**
     * Generated from protobuf field <code>.MEDPAMLOEMC bmbedghcnkj = 4;</code>
     * @return \MEDPAMLOEMC|null
     */
    public function getBmbedghcnkj()
    {
        return $this->bmbedghcnkj;
    }

    public function hasBmbedghcnkj()
    {
        return isset($this->bmbedghcnkj);
    }

    public function clearBmbedghcnkj()
    {
        unset($this->bmbedghcnkj);
    }

    /**
     * Generated from protobuf field <code>.MEDPAMLOEMC bmbedghcnkj = 4;</code>
     * @param \MEDPAMLOEMC $var
     * @return $this
     */
    public function setBmbedghcnkj($var)
    {
        GPBUtil::checkMessage($var, \MEDPAMLOEMC::class);
        $this->bmbedghcnkj = $var;

        return $this;
    }

}

