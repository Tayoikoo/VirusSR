<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# NO CHECKED-IN PROTOBUF GENCODE
# source: StarRail.proto

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>FOLOKLFELMK</code>
 */
class FOLOKLFELMK extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>uint32 DECKAILMGEJ = 15;</code>
     */
    protected $DECKAILMGEJ = 0;
    /**
     * Generated from protobuf field <code>uint32 ANIICEJBFMI = 1;</code>
     */
    protected $ANIICEJBFMI = 0;
    /**
     * Generated from protobuf field <code>repeated .KMDGFIGDPOF GPKMFMJLMJP = 7;</code>
     */
    private $GPKMFMJLMJP;
    /**
     * Generated from protobuf field <code>.EKCJFFFFFDO status = 6;</code>
     */
    protected $status = 0;
    /**
     * Generated from protobuf field <code>.BCBOIDLMKKO KGGHLADEKGP = 9;</code>
     */
    protected $KGGHLADEKGP = 0;
    /**
     * Generated from protobuf field <code>uint32 COOINBPIEOC = 14;</code>
     */
    protected $COOINBPIEOC = 0;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type int $DECKAILMGEJ
     *     @type int $ANIICEJBFMI
     *     @type array<\KMDGFIGDPOF>|\Google\Protobuf\Internal\RepeatedField $GPKMFMJLMJP
     *     @type int $status
     *     @type int $KGGHLADEKGP
     *     @type int $COOINBPIEOC
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\StarRail::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>uint32 DECKAILMGEJ = 15;</code>
     * @return int
     */
    public function getDECKAILMGEJ()
    {
        return $this->DECKAILMGEJ;
    }

    /**
     * Generated from protobuf field <code>uint32 DECKAILMGEJ = 15;</code>
     * @param int $var
     * @return $this
     */
    public function setDECKAILMGEJ($var)
    {
        GPBUtil::checkUint32($var);
        $this->DECKAILMGEJ = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>uint32 ANIICEJBFMI = 1;</code>
     * @return int
     */
    public function getANIICEJBFMI()
    {
        return $this->ANIICEJBFMI;
    }

    /**
     * Generated from protobuf field <code>uint32 ANIICEJBFMI = 1;</code>
     * @param int $var
     * @return $this
     */
    public function setANIICEJBFMI($var)
    {
        GPBUtil::checkUint32($var);
        $this->ANIICEJBFMI = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>repeated .KMDGFIGDPOF GPKMFMJLMJP = 7;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getGPKMFMJLMJP()
    {
        return $this->GPKMFMJLMJP;
    }

    /**
     * Generated from protobuf field <code>repeated .KMDGFIGDPOF GPKMFMJLMJP = 7;</code>
     * @param array<\KMDGFIGDPOF>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setGPKMFMJLMJP($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \KMDGFIGDPOF::class);
        $this->GPKMFMJLMJP = $arr;

        return $this;
    }

    /**
     * Generated from protobuf field <code>.EKCJFFFFFDO status = 6;</code>
     * @return int
     */
    public function getStatus()
    {
        return $this->status;
    }

    /**
     * Generated from protobuf field <code>.EKCJFFFFFDO status = 6;</code>
     * @param int $var
     * @return $this
     */
    public function setStatus($var)
    {
        GPBUtil::checkEnum($var, \EKCJFFFFFDO::class);
        $this->status = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>.BCBOIDLMKKO KGGHLADEKGP = 9;</code>
     * @return int
     */
    public function getKGGHLADEKGP()
    {
        return $this->KGGHLADEKGP;
    }

    /**
     * Generated from protobuf field <code>.BCBOIDLMKKO KGGHLADEKGP = 9;</code>
     * @param int $var
     * @return $this
     */
    public function setKGGHLADEKGP($var)
    {
        GPBUtil::checkEnum($var, \BCBOIDLMKKO::class);
        $this->KGGHLADEKGP = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>uint32 COOINBPIEOC = 14;</code>
     * @return int
     */
    public function getCOOINBPIEOC()
    {
        return $this->COOINBPIEOC;
    }

    /**
     * Generated from protobuf field <code>uint32 COOINBPIEOC = 14;</code>
     * @param int $var
     * @return $this
     */
    public function setCOOINBPIEOC($var)
    {
        GPBUtil::checkUint32($var);
        $this->COOINBPIEOC = $var;

        return $this;
    }

}

