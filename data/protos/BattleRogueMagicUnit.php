<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# NO CHECKED-IN PROTOBUF GENCODE
# source: StarRail.proto

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>BattleRogueMagicUnit</code>
 */
class BattleRogueMagicUnit extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>uint32 magic_unit_id = 1;</code>
     */
    protected $magic_unit_id = 0;
    /**
     * Generated from protobuf field <code>uint32 level = 2;</code>
     */
    protected $level = 0;
    /**
     * Generated from protobuf field <code>bool khknacfljnf = 3;</code>
     */
    protected $khknacfljnf = false;
    /**
     * Generated from protobuf field <code>uint32 dice_slot_id = 4;</code>
     */
    protected $dice_slot_id = 0;
    /**
     * Generated from protobuf field <code>map<uint32, uint32> hgklofgmlmn = 5;</code>
     */
    private $hgklofgmlmn;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type int $magic_unit_id
     *     @type int $level
     *     @type bool $khknacfljnf
     *     @type int $dice_slot_id
     *     @type array|\Google\Protobuf\Internal\MapField $hgklofgmlmn
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\StarRail::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>uint32 magic_unit_id = 1;</code>
     * @return int
     */
    public function getMagicUnitId()
    {
        return $this->magic_unit_id;
    }

    /**
     * Generated from protobuf field <code>uint32 magic_unit_id = 1;</code>
     * @param int $var
     * @return $this
     */
    public function setMagicUnitId($var)
    {
        GPBUtil::checkUint32($var);
        $this->magic_unit_id = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>uint32 level = 2;</code>
     * @return int
     */
    public function getLevel()
    {
        return $this->level;
    }

    /**
     * Generated from protobuf field <code>uint32 level = 2;</code>
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
     * Generated from protobuf field <code>bool khknacfljnf = 3;</code>
     * @return bool
     */
    public function getKhknacfljnf()
    {
        return $this->khknacfljnf;
    }

    /**
     * Generated from protobuf field <code>bool khknacfljnf = 3;</code>
     * @param bool $var
     * @return $this
     */
    public function setKhknacfljnf($var)
    {
        GPBUtil::checkBool($var);
        $this->khknacfljnf = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>uint32 dice_slot_id = 4;</code>
     * @return int
     */
    public function getDiceSlotId()
    {
        return $this->dice_slot_id;
    }

    /**
     * Generated from protobuf field <code>uint32 dice_slot_id = 4;</code>
     * @param int $var
     * @return $this
     */
    public function setDiceSlotId($var)
    {
        GPBUtil::checkUint32($var);
        $this->dice_slot_id = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>map<uint32, uint32> hgklofgmlmn = 5;</code>
     * @return \Google\Protobuf\Internal\MapField
     */
    public function getHgklofgmlmn()
    {
        return $this->hgklofgmlmn;
    }

    /**
     * Generated from protobuf field <code>map<uint32, uint32> hgklofgmlmn = 5;</code>
     * @param array|\Google\Protobuf\Internal\MapField $var
     * @return $this
     */
    public function setHgklofgmlmn($var)
    {
        $arr = GPBUtil::checkMapField($var, \Google\Protobuf\Internal\GPBType::UINT32, \Google\Protobuf\Internal\GPBType::UINT32);
        $this->hgklofgmlmn = $arr;

        return $this;
    }

}

