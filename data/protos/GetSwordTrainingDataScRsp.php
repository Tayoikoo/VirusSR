<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# NO CHECKED-IN PROTOBUF GENCODE
# source: StarRail.proto

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * EEDBPHJECAG (7480)
 *
 * Generated from protobuf message <code>GetSwordTrainingDataScRsp</code>
 */
class GetSwordTrainingDataScRsp extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>.FNAHNBKPHAO pajlkkdofme = 14;</code>
     */
    protected $pajlkkdofme = null;
    /**
     * Generated from protobuf field <code>repeated uint32 gcbojnckmhj = 15;</code>
     */
    private $gcbojnckmhj;
    /**
     * Generated from protobuf field <code>bool dkbilmapakf = 1;</code>
     */
    protected $dkbilmapakf = false;
    /**
     * Generated from protobuf field <code>repeated uint32 amkdgphbgib = 12;</code>
     */
    private $amkdgphbgib;
    /**
     * Generated from protobuf field <code>uint32 retcode = 13;</code>
     */
    protected $retcode = 0;
    /**
     * Generated from protobuf field <code>uint32 bgjmlklkapn = 11;</code>
     */
    protected $bgjmlklkapn = 0;
    /**
     * Generated from protobuf field <code>.GIBGFEMMKAA dcfncdeieom = 7;</code>
     */
    protected $dcfncdeieom = null;
    /**
     * Generated from protobuf field <code>repeated uint32 lnobdacilgg = 9;</code>
     */
    private $lnobdacilgg;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \FNAHNBKPHAO $pajlkkdofme
     *     @type array<int>|\Google\Protobuf\Internal\RepeatedField $gcbojnckmhj
     *     @type bool $dkbilmapakf
     *     @type array<int>|\Google\Protobuf\Internal\RepeatedField $amkdgphbgib
     *     @type int $retcode
     *     @type int $bgjmlklkapn
     *     @type \GIBGFEMMKAA $dcfncdeieom
     *     @type array<int>|\Google\Protobuf\Internal\RepeatedField $lnobdacilgg
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\StarRail::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>.FNAHNBKPHAO pajlkkdofme = 14;</code>
     * @return \FNAHNBKPHAO|null
     */
    public function getPajlkkdofme()
    {
        return $this->pajlkkdofme;
    }

    public function hasPajlkkdofme()
    {
        return isset($this->pajlkkdofme);
    }

    public function clearPajlkkdofme()
    {
        unset($this->pajlkkdofme);
    }

    /**
     * Generated from protobuf field <code>.FNAHNBKPHAO pajlkkdofme = 14;</code>
     * @param \FNAHNBKPHAO $var
     * @return $this
     */
    public function setPajlkkdofme($var)
    {
        GPBUtil::checkMessage($var, \FNAHNBKPHAO::class);
        $this->pajlkkdofme = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>repeated uint32 gcbojnckmhj = 15;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getGcbojnckmhj()
    {
        return $this->gcbojnckmhj;
    }

    /**
     * Generated from protobuf field <code>repeated uint32 gcbojnckmhj = 15;</code>
     * @param array<int>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setGcbojnckmhj($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::UINT32);
        $this->gcbojnckmhj = $arr;

        return $this;
    }

    /**
     * Generated from protobuf field <code>bool dkbilmapakf = 1;</code>
     * @return bool
     */
    public function getDkbilmapakf()
    {
        return $this->dkbilmapakf;
    }

    /**
     * Generated from protobuf field <code>bool dkbilmapakf = 1;</code>
     * @param bool $var
     * @return $this
     */
    public function setDkbilmapakf($var)
    {
        GPBUtil::checkBool($var);
        $this->dkbilmapakf = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>repeated uint32 amkdgphbgib = 12;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getAmkdgphbgib()
    {
        return $this->amkdgphbgib;
    }

    /**
     * Generated from protobuf field <code>repeated uint32 amkdgphbgib = 12;</code>
     * @param array<int>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setAmkdgphbgib($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::UINT32);
        $this->amkdgphbgib = $arr;

        return $this;
    }

    /**
     * Generated from protobuf field <code>uint32 retcode = 13;</code>
     * @return int
     */
    public function getRetcode()
    {
        return $this->retcode;
    }

    /**
     * Generated from protobuf field <code>uint32 retcode = 13;</code>
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
     * Generated from protobuf field <code>uint32 bgjmlklkapn = 11;</code>
     * @return int
     */
    public function getBgjmlklkapn()
    {
        return $this->bgjmlklkapn;
    }

    /**
     * Generated from protobuf field <code>uint32 bgjmlklkapn = 11;</code>
     * @param int $var
     * @return $this
     */
    public function setBgjmlklkapn($var)
    {
        GPBUtil::checkUint32($var);
        $this->bgjmlklkapn = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>.GIBGFEMMKAA dcfncdeieom = 7;</code>
     * @return \GIBGFEMMKAA|null
     */
    public function getDcfncdeieom()
    {
        return $this->dcfncdeieom;
    }

    public function hasDcfncdeieom()
    {
        return isset($this->dcfncdeieom);
    }

    public function clearDcfncdeieom()
    {
        unset($this->dcfncdeieom);
    }

    /**
     * Generated from protobuf field <code>.GIBGFEMMKAA dcfncdeieom = 7;</code>
     * @param \GIBGFEMMKAA $var
     * @return $this
     */
    public function setDcfncdeieom($var)
    {
        GPBUtil::checkMessage($var, \GIBGFEMMKAA::class);
        $this->dcfncdeieom = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>repeated uint32 lnobdacilgg = 9;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getLnobdacilgg()
    {
        return $this->lnobdacilgg;
    }

    /**
     * Generated from protobuf field <code>repeated uint32 lnobdacilgg = 9;</code>
     * @param array<int>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setLnobdacilgg($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::UINT32);
        $this->lnobdacilgg = $arr;

        return $this;
    }

}

