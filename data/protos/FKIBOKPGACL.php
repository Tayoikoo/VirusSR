<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# NO CHECKED-IN PROTOBUF GENCODE
# source: StarRail.proto

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>FKIBOKPGACL</code>
 */
class FKIBOKPGACL extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>repeated .RogueAdventureRoomGameplayWolfGunTarget DNEFDNBDODD = 12;</code>
     */
    private $DNEFDNBDODD;
    /**
     * Generated from protobuf field <code>uint32 PKNLGDHEHKM = 2;</code>
     */
    protected $PKNLGDHEHKM = 0;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type array<\RogueAdventureRoomGameplayWolfGunTarget>|\Google\Protobuf\Internal\RepeatedField $DNEFDNBDODD
     *     @type int $PKNLGDHEHKM
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\StarRail::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>repeated .RogueAdventureRoomGameplayWolfGunTarget DNEFDNBDODD = 12;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getDNEFDNBDODD()
    {
        return $this->DNEFDNBDODD;
    }

    /**
     * Generated from protobuf field <code>repeated .RogueAdventureRoomGameplayWolfGunTarget DNEFDNBDODD = 12;</code>
     * @param array<\RogueAdventureRoomGameplayWolfGunTarget>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setDNEFDNBDODD($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \RogueAdventureRoomGameplayWolfGunTarget::class);
        $this->DNEFDNBDODD = $arr;

        return $this;
    }

    /**
     * Generated from protobuf field <code>uint32 PKNLGDHEHKM = 2;</code>
     * @return int
     */
    public function getPKNLGDHEHKM()
    {
        return $this->PKNLGDHEHKM;
    }

    /**
     * Generated from protobuf field <code>uint32 PKNLGDHEHKM = 2;</code>
     * @param int $var
     * @return $this
     */
    public function setPKNLGDHEHKM($var)
    {
        GPBUtil::checkUint32($var);
        $this->PKNLGDHEHKM = $var;

        return $this;
    }

}
