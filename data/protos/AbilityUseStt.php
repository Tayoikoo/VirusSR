<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# NO CHECKED-IN PROTOBUF GENCODE
# source: StarRail.proto

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>AbilityUseStt</code>
 */
class AbilityUseStt extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>string ndiefpcnbdh = 1;</code>
     */
    protected $ndiefpcnbdh = '';
    /**
     * Generated from protobuf field <code>uint32 count = 2;</code>
     */
    protected $count = 0;
    /**
     * Generated from protobuf field <code>double total_damage = 3;</code>
     */
    protected $total_damage = 0.0;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $ndiefpcnbdh
     *     @type int $count
     *     @type float $total_damage
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\StarRail::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>string ndiefpcnbdh = 1;</code>
     * @return string
     */
    public function getNdiefpcnbdh()
    {
        return $this->ndiefpcnbdh;
    }

    /**
     * Generated from protobuf field <code>string ndiefpcnbdh = 1;</code>
     * @param string $var
     * @return $this
     */
    public function setNdiefpcnbdh($var)
    {
        GPBUtil::checkString($var, True);
        $this->ndiefpcnbdh = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>uint32 count = 2;</code>
     * @return int
     */
    public function getCount()
    {
        return $this->count;
    }

    /**
     * Generated from protobuf field <code>uint32 count = 2;</code>
     * @param int $var
     * @return $this
     */
    public function setCount($var)
    {
        GPBUtil::checkUint32($var);
        $this->count = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>double total_damage = 3;</code>
     * @return float
     */
    public function getTotalDamage()
    {
        return $this->total_damage;
    }

    /**
     * Generated from protobuf field <code>double total_damage = 3;</code>
     * @param float $var
     * @return $this
     */
    public function setTotalDamage($var)
    {
        GPBUtil::checkDouble($var);
        $this->total_damage = $var;

        return $this;
    }

}

