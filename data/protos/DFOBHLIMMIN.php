<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# NO CHECKED-IN PROTOBUF GENCODE
# source: StarRail.proto

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>DFOBHLIMMIN</code>
 */
class DFOBHLIMMIN extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>repeated uint32 GBLFCABBJAL = 6;</code>
     */
    private $GBLFCABBJAL;
    /**
     * Generated from protobuf field <code>uint32 LMFFBHEOONE = 7;</code>
     */
    protected $LMFFBHEOONE = 0;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type array<int>|\Google\Protobuf\Internal\RepeatedField $GBLFCABBJAL
     *     @type int $LMFFBHEOONE
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\StarRail::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>repeated uint32 GBLFCABBJAL = 6;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getGBLFCABBJAL()
    {
        return $this->GBLFCABBJAL;
    }

    /**
     * Generated from protobuf field <code>repeated uint32 GBLFCABBJAL = 6;</code>
     * @param array<int>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setGBLFCABBJAL($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::UINT32);
        $this->GBLFCABBJAL = $arr;

        return $this;
    }

    /**
     * Generated from protobuf field <code>uint32 LMFFBHEOONE = 7;</code>
     * @return int
     */
    public function getLMFFBHEOONE()
    {
        return $this->LMFFBHEOONE;
    }

    /**
     * Generated from protobuf field <code>uint32 LMFFBHEOONE = 7;</code>
     * @param int $var
     * @return $this
     */
    public function setLMFFBHEOONE($var)
    {
        GPBUtil::checkUint32($var);
        $this->LMFFBHEOONE = $var;

        return $this;
    }

}

