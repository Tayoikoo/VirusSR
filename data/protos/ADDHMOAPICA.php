<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# NO CHECKED-IN PROTOBUF GENCODE
# source: StarRail.proto

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>ADDHMOAPICA</code>
 */
class ADDHMOAPICA extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>repeated .RogueUnlockProgress pkjkkbechka = 4;</code>
     */
    private $pkjkkbechka;
    /**
     * Generated from protobuf field <code>.HEAEHFOIEGK status = 15;</code>
     */
    protected $status = 0;
    /**
     * Generated from protobuf field <code>uint32 talent_id = 12;</code>
     */
    protected $talent_id = 0;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type array<\RogueUnlockProgress>|\Google\Protobuf\Internal\RepeatedField $pkjkkbechka
     *     @type int $status
     *     @type int $talent_id
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\StarRail::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>repeated .RogueUnlockProgress pkjkkbechka = 4;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getPkjkkbechka()
    {
        return $this->pkjkkbechka;
    }

    /**
     * Generated from protobuf field <code>repeated .RogueUnlockProgress pkjkkbechka = 4;</code>
     * @param array<\RogueUnlockProgress>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setPkjkkbechka($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \RogueUnlockProgress::class);
        $this->pkjkkbechka = $arr;

        return $this;
    }

    /**
     * Generated from protobuf field <code>.HEAEHFOIEGK status = 15;</code>
     * @return int
     */
    public function getStatus()
    {
        return $this->status;
    }

    /**
     * Generated from protobuf field <code>.HEAEHFOIEGK status = 15;</code>
     * @param int $var
     * @return $this
     */
    public function setStatus($var)
    {
        GPBUtil::checkEnum($var, \HEAEHFOIEGK::class);
        $this->status = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>uint32 talent_id = 12;</code>
     * @return int
     */
    public function getTalentId()
    {
        return $this->talent_id;
    }

    /**
     * Generated from protobuf field <code>uint32 talent_id = 12;</code>
     * @param int $var
     * @return $this
     */
    public function setTalentId($var)
    {
        GPBUtil::checkUint32($var);
        $this->talent_id = $var;

        return $this;
    }

}
