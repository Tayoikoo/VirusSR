<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# NO CHECKED-IN PROTOBUF GENCODE
# source: StarRail.proto

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>CLJJKJMBFLK</code>
 */
class CLJJKJMBFLK extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>uint32 exp = 11;</code>
     */
    protected $exp = 0;
    /**
     * Generated from protobuf field <code>uint32 LIKGPACLGBN = 4;</code>
     */
    protected $LIKGPACLGBN = 0;
    /**
     * Generated from protobuf field <code>uint32 MOCKIOPKEKE = 12;</code>
     */
    protected $MOCKIOPKEKE = 0;
    /**
     * Generated from protobuf field <code>repeated uint32 KMMNBNNDDAI = 2;</code>
     */
    private $KMMNBNNDDAI;
    /**
     * Generated from protobuf field <code>repeated uint32 JJBAMFAFDCK = 3;</code>
     */
    private $JJBAMFAFDCK;
    /**
     * Generated from protobuf field <code>uint32 level = 14;</code>
     */
    protected $level = 0;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type int $exp
     *     @type int $LIKGPACLGBN
     *     @type int $MOCKIOPKEKE
     *     @type array<int>|\Google\Protobuf\Internal\RepeatedField $KMMNBNNDDAI
     *     @type array<int>|\Google\Protobuf\Internal\RepeatedField $JJBAMFAFDCK
     *     @type int $level
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\StarRail::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>uint32 exp = 11;</code>
     * @return int
     */
    public function getExp()
    {
        return $this->exp;
    }

    /**
     * Generated from protobuf field <code>uint32 exp = 11;</code>
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
     * Generated from protobuf field <code>uint32 LIKGPACLGBN = 4;</code>
     * @return int
     */
    public function getLIKGPACLGBN()
    {
        return $this->LIKGPACLGBN;
    }

    /**
     * Generated from protobuf field <code>uint32 LIKGPACLGBN = 4;</code>
     * @param int $var
     * @return $this
     */
    public function setLIKGPACLGBN($var)
    {
        GPBUtil::checkUint32($var);
        $this->LIKGPACLGBN = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>uint32 MOCKIOPKEKE = 12;</code>
     * @return int
     */
    public function getMOCKIOPKEKE()
    {
        return $this->MOCKIOPKEKE;
    }

    /**
     * Generated from protobuf field <code>uint32 MOCKIOPKEKE = 12;</code>
     * @param int $var
     * @return $this
     */
    public function setMOCKIOPKEKE($var)
    {
        GPBUtil::checkUint32($var);
        $this->MOCKIOPKEKE = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>repeated uint32 KMMNBNNDDAI = 2;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getKMMNBNNDDAI()
    {
        return $this->KMMNBNNDDAI;
    }

    /**
     * Generated from protobuf field <code>repeated uint32 KMMNBNNDDAI = 2;</code>
     * @param array<int>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setKMMNBNNDDAI($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::UINT32);
        $this->KMMNBNNDDAI = $arr;

        return $this;
    }

    /**
     * Generated from protobuf field <code>repeated uint32 JJBAMFAFDCK = 3;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getJJBAMFAFDCK()
    {
        return $this->JJBAMFAFDCK;
    }

    /**
     * Generated from protobuf field <code>repeated uint32 JJBAMFAFDCK = 3;</code>
     * @param array<int>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setJJBAMFAFDCK($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::UINT32);
        $this->JJBAMFAFDCK = $arr;

        return $this;
    }

    /**
     * Generated from protobuf field <code>uint32 level = 14;</code>
     * @return int
     */
    public function getLevel()
    {
        return $this->level;
    }

    /**
     * Generated from protobuf field <code>uint32 level = 14;</code>
     * @param int $var
     * @return $this
     */
    public function setLevel($var)
    {
        GPBUtil::checkUint32($var);
        $this->level = $var;

        return $this;
    }

}

