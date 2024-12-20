<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# NO CHECKED-IN PROTOBUF GENCODE
# source: StarRail.proto

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>LBLLICCPIHE</code>
 */
class LBLLICCPIHE extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>uint64 id = 1;</code>
     */
    protected $id = 0;
    /**
     * Generated from protobuf field <code>.FightGameModeType MKBMIPELMOB = 2;</code>
     */
    protected $MKBMIPELMOB = 0;
    /**
     * Generated from protobuf field <code>repeated .DBBLOFLAAMH EJBJDGIMIPP = 3;</code>
     */
    private $EJBJDGIMIPP;
    /**
     * Generated from protobuf field <code>.MatchUnitType relic_unique_id = 4;</code>
     */
    protected $relic_unique_id = 0;
    /**
     * Generated from protobuf field <code>uint64 EEFBHBMOCPL = 5;</code>
     */
    protected $EEFBHBMOCPL = 0;
    /**
     * Generated from protobuf field <code>uint64 FFICMJHMFJG = 6;</code>
     */
    protected $FFICMJHMFJG = 0;
    /**
     * Generated from protobuf field <code>uint32 MONNADEJJGM = 7;</code>
     */
    protected $MONNADEJJGM = 0;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type int|string $id
     *     @type int $MKBMIPELMOB
     *     @type array<\DBBLOFLAAMH>|\Google\Protobuf\Internal\RepeatedField $EJBJDGIMIPP
     *     @type int $relic_unique_id
     *     @type int|string $EEFBHBMOCPL
     *     @type int|string $FFICMJHMFJG
     *     @type int $MONNADEJJGM
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\StarRail::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>uint64 id = 1;</code>
     * @return int|string
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Generated from protobuf field <code>uint64 id = 1;</code>
     * @param int|string $var
     * @return $this
     */
    public function setId($var)
    {
        GPBUtil::checkUint64($var);
        $this->id = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>.FightGameModeType MKBMIPELMOB = 2;</code>
     * @return int
     */
    public function getMKBMIPELMOB()
    {
        return $this->MKBMIPELMOB;
    }

    /**
     * Generated from protobuf field <code>.FightGameModeType MKBMIPELMOB = 2;</code>
     * @param int $var
     * @return $this
     */
    public function setMKBMIPELMOB($var)
    {
        GPBUtil::checkEnum($var, \FightGameModeType::class);
        $this->MKBMIPELMOB = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>repeated .DBBLOFLAAMH EJBJDGIMIPP = 3;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getEJBJDGIMIPP()
    {
        return $this->EJBJDGIMIPP;
    }

    /**
     * Generated from protobuf field <code>repeated .DBBLOFLAAMH EJBJDGIMIPP = 3;</code>
     * @param array<\DBBLOFLAAMH>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setEJBJDGIMIPP($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \DBBLOFLAAMH::class);
        $this->EJBJDGIMIPP = $arr;

        return $this;
    }

    /**
     * Generated from protobuf field <code>.MatchUnitType relic_unique_id = 4;</code>
     * @return int
     */
    public function getRelicUniqueId()
    {
        return $this->relic_unique_id;
    }

    /**
     * Generated from protobuf field <code>.MatchUnitType relic_unique_id = 4;</code>
     * @param int $var
     * @return $this
     */
    public function setRelicUniqueId($var)
    {
        GPBUtil::checkEnum($var, \MatchUnitType::class);
        $this->relic_unique_id = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>uint64 EEFBHBMOCPL = 5;</code>
     * @return int|string
     */
    public function getEEFBHBMOCPL()
    {
        return $this->EEFBHBMOCPL;
    }

    /**
     * Generated from protobuf field <code>uint64 EEFBHBMOCPL = 5;</code>
     * @param int|string $var
     * @return $this
     */
    public function setEEFBHBMOCPL($var)
    {
        GPBUtil::checkUint64($var);
        $this->EEFBHBMOCPL = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>uint64 FFICMJHMFJG = 6;</code>
     * @return int|string
     */
    public function getFFICMJHMFJG()
    {
        return $this->FFICMJHMFJG;
    }

    /**
     * Generated from protobuf field <code>uint64 FFICMJHMFJG = 6;</code>
     * @param int|string $var
     * @return $this
     */
    public function setFFICMJHMFJG($var)
    {
        GPBUtil::checkUint64($var);
        $this->FFICMJHMFJG = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>uint32 MONNADEJJGM = 7;</code>
     * @return int
     */
    public function getMONNADEJJGM()
    {
        return $this->MONNADEJJGM;
    }

    /**
     * Generated from protobuf field <code>uint32 MONNADEJJGM = 7;</code>
     * @param int $var
     * @return $this
     */
    public function setMONNADEJJGM($var)
    {
        GPBUtil::checkUint32($var);
        $this->MONNADEJJGM = $var;

        return $this;
    }

}

