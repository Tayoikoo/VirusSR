<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# NO CHECKED-IN PROTOBUF GENCODE
# source: StarRail.proto

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * BOJDPOAMEKE (2184)
 *
 * Generated from protobuf message <code>TakeTalkRewardCsReq</code>
 */
class TakeTalkRewardCsReq extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>uint32 kpmhfbkekdg = 11;</code>
     */
    protected $kpmhfbkekdg = 0;
    /**
     * Generated from protobuf field <code>.Vector adielmgnmma = 4;</code>
     */
    protected $adielmgnmma = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type int $kpmhfbkekdg
     *     @type \Vector $adielmgnmma
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\StarRail::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>uint32 kpmhfbkekdg = 11;</code>
     * @return int
     */
    public function getKpmhfbkekdg()
    {
        return $this->kpmhfbkekdg;
    }

    /**
     * Generated from protobuf field <code>uint32 kpmhfbkekdg = 11;</code>
     * @param int $var
     * @return $this
     */
    public function setKpmhfbkekdg($var)
    {
        GPBUtil::checkUint32($var);
        $this->kpmhfbkekdg = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>.Vector adielmgnmma = 4;</code>
     * @return \Vector|null
     */
    public function getAdielmgnmma()
    {
        return $this->adielmgnmma;
    }

    public function hasAdielmgnmma()
    {
        return isset($this->adielmgnmma);
    }

    public function clearAdielmgnmma()
    {
        unset($this->adielmgnmma);
    }

    /**
     * Generated from protobuf field <code>.Vector adielmgnmma = 4;</code>
     * @param \Vector $var
     * @return $this
     */
    public function setAdielmgnmma($var)
    {
        GPBUtil::checkMessage($var, \Vector::class);
        $this->adielmgnmma = $var;

        return $this;
    }

}

