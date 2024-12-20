<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# NO CHECKED-IN PROTOBUF GENCODE
# source: StarRail.proto

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>AnnounceData</code>
 */
class AnnounceData extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>int64 begin_time = 4;</code>
     */
    protected $begin_time = 0;
    /**
     * Generated from protobuf field <code>uint32 bcelkcdmlhf = 7;</code>
     */
    protected $bcelkcdmlhf = 0;
    /**
     * Generated from protobuf field <code>uint32 config_id = 9;</code>
     */
    protected $config_id = 0;
    /**
     * Generated from protobuf field <code>string objpeheemee = 6;</code>
     */
    protected $objpeheemee = '';
    /**
     * Generated from protobuf field <code>uint32 cilojbalhef = 3;</code>
     */
    protected $cilojbalhef = 0;
    /**
     * Generated from protobuf field <code>bool nmmjamblbfb = 15;</code>
     */
    protected $nmmjamblbfb = false;
    /**
     * Generated from protobuf field <code>int64 end_time = 5;</code>
     */
    protected $end_time = 0;
    /**
     * Generated from protobuf field <code>string obnmjmlkdim = 14;</code>
     */
    protected $obnmjmlkdim = '';
    /**
     * Generated from protobuf field <code>string fhnbhgcamlg = 1;</code>
     */
    protected $fhnbhgcamlg = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type int|string $begin_time
     *     @type int $bcelkcdmlhf
     *     @type int $config_id
     *     @type string $objpeheemee
     *     @type int $cilojbalhef
     *     @type bool $nmmjamblbfb
     *     @type int|string $end_time
     *     @type string $obnmjmlkdim
     *     @type string $fhnbhgcamlg
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\StarRail::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>int64 begin_time = 4;</code>
     * @return int|string
     */
    public function getBeginTime()
    {
        return $this->begin_time;
    }

    /**
     * Generated from protobuf field <code>int64 begin_time = 4;</code>
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
     * Generated from protobuf field <code>uint32 bcelkcdmlhf = 7;</code>
     * @return int
     */
    public function getBcelkcdmlhf()
    {
        return $this->bcelkcdmlhf;
    }

    /**
     * Generated from protobuf field <code>uint32 bcelkcdmlhf = 7;</code>
     * @param int $var
     * @return $this
     */
    public function setBcelkcdmlhf($var)
    {
        GPBUtil::checkUint32($var);
        $this->bcelkcdmlhf = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>uint32 config_id = 9;</code>
     * @return int
     */
    public function getConfigId()
    {
        return $this->config_id;
    }

    /**
     * Generated from protobuf field <code>uint32 config_id = 9;</code>
     * @param int $var
     * @return $this
     */
    public function setConfigId($var)
    {
        GPBUtil::checkUint32($var);
        $this->config_id = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>string objpeheemee = 6;</code>
     * @return string
     */
    public function getObjpeheemee()
    {
        return $this->objpeheemee;
    }

    /**
     * Generated from protobuf field <code>string objpeheemee = 6;</code>
     * @param string $var
     * @return $this
     */
    public function setObjpeheemee($var)
    {
        GPBUtil::checkString($var, True);
        $this->objpeheemee = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>uint32 cilojbalhef = 3;</code>
     * @return int
     */
    public function getCilojbalhef()
    {
        return $this->cilojbalhef;
    }

    /**
     * Generated from protobuf field <code>uint32 cilojbalhef = 3;</code>
     * @param int $var
     * @return $this
     */
    public function setCilojbalhef($var)
    {
        GPBUtil::checkUint32($var);
        $this->cilojbalhef = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>bool nmmjamblbfb = 15;</code>
     * @return bool
     */
    public function getNmmjamblbfb()
    {
        return $this->nmmjamblbfb;
    }

    /**
     * Generated from protobuf field <code>bool nmmjamblbfb = 15;</code>
     * @param bool $var
     * @return $this
     */
    public function setNmmjamblbfb($var)
    {
        GPBUtil::checkBool($var);
        $this->nmmjamblbfb = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>int64 end_time = 5;</code>
     * @return int|string
     */
    public function getEndTime()
    {
        return $this->end_time;
    }

    /**
     * Generated from protobuf field <code>int64 end_time = 5;</code>
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
     * Generated from protobuf field <code>string obnmjmlkdim = 14;</code>
     * @return string
     */
    public function getObnmjmlkdim()
    {
        return $this->obnmjmlkdim;
    }

    /**
     * Generated from protobuf field <code>string obnmjmlkdim = 14;</code>
     * @param string $var
     * @return $this
     */
    public function setObnmjmlkdim($var)
    {
        GPBUtil::checkString($var, True);
        $this->obnmjmlkdim = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>string fhnbhgcamlg = 1;</code>
     * @return string
     */
    public function getFhnbhgcamlg()
    {
        return $this->fhnbhgcamlg;
    }

    /**
     * Generated from protobuf field <code>string fhnbhgcamlg = 1;</code>
     * @param string $var
     * @return $this
     */
    public function setFhnbhgcamlg($var)
    {
        GPBUtil::checkString($var, True);
        $this->fhnbhgcamlg = $var;

        return $this;
    }

}

