<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# NO CHECKED-IN PROTOBUF GENCODE
# source: StarRail.proto

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>HNDCCFEAGFD</code>
 */
class HNDCCFEAGFD extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>uint32 CBINIKMEKMP = 12;</code>
     */
    protected $CBINIKMEKMP = 0;
    /**
     * Generated from protobuf field <code>uint32 CPFJGBNJABL = 14;</code>
     */
    protected $CPFJGBNJABL = 0;
    /**
     * Generated from protobuf field <code>repeated uint32 DDMGCOJOOCF = 15;</code>
     */
    private $DDMGCOJOOCF;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type int $CBINIKMEKMP
     *     @type int $CPFJGBNJABL
     *     @type array<int>|\Google\Protobuf\Internal\RepeatedField $DDMGCOJOOCF
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\StarRail::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>uint32 CBINIKMEKMP = 12;</code>
     * @return int
     */
    public function getCBINIKMEKMP()
    {
        return $this->CBINIKMEKMP;
    }

    /**
     * Generated from protobuf field <code>uint32 CBINIKMEKMP = 12;</code>
     * @param int $var
     * @return $this
     */
    public function setCBINIKMEKMP($var)
    {
        GPBUtil::checkUint32($var);
        $this->CBINIKMEKMP = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>uint32 CPFJGBNJABL = 14;</code>
     * @return int
     */
    public function getCPFJGBNJABL()
    {
        return $this->CPFJGBNJABL;
    }

    /**
     * Generated from protobuf field <code>uint32 CPFJGBNJABL = 14;</code>
     * @param int $var
     * @return $this
     */
    public function setCPFJGBNJABL($var)
    {
        GPBUtil::checkUint32($var);
        $this->CPFJGBNJABL = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>repeated uint32 DDMGCOJOOCF = 15;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getDDMGCOJOOCF()
    {
        return $this->DDMGCOJOOCF;
    }

    /**
     * Generated from protobuf field <code>repeated uint32 DDMGCOJOOCF = 15;</code>
     * @param array<int>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setDDMGCOJOOCF($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::UINT32);
        $this->DDMGCOJOOCF = $arr;

        return $this;
    }

}

