<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# NO CHECKED-IN PROTOBUF GENCODE
# source: StarRail.proto

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>NKNMCFALIGM</code>
 */
class NKNMCFALIGM extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>uint32 formula_id = 9;</code>
     */
    protected $formula_id = 0;
    /**
     * Generated from protobuf field <code>uint32 aoibomnegea = 10;</code>
     */
    protected $aoibomnegea = 0;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type int $formula_id
     *     @type int $aoibomnegea
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\StarRail::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>uint32 formula_id = 9;</code>
     * @return int
     */
    public function getFormulaId()
    {
        return $this->formula_id;
    }

    /**
     * Generated from protobuf field <code>uint32 formula_id = 9;</code>
     * @param int $var
     * @return $this
     */
    public function setFormulaId($var)
    {
        GPBUtil::checkUint32($var);
        $this->formula_id = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>uint32 aoibomnegea = 10;</code>
     * @return int
     */
    public function getAoibomnegea()
    {
        return $this->aoibomnegea;
    }

    /**
     * Generated from protobuf field <code>uint32 aoibomnegea = 10;</code>
     * @param int $var
     * @return $this
     */
    public function setAoibomnegea($var)
    {
        GPBUtil::checkUint32($var);
        $this->aoibomnegea = $var;

        return $this;
    }

}

