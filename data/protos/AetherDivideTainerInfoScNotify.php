<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# NO CHECKED-IN PROTOBUF GENCODE
# source: StarRail.proto

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * FCLGAALAINA (4888)
 *
 * Generated from protobuf message <code>AetherDivideTainerInfoScNotify</code>
 */
class AetherDivideTainerInfoScNotify extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>uint32 obhcochafaa = 4;</code>
     */
    protected $obhcochafaa = 0;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type int $obhcochafaa
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\StarRail::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>uint32 obhcochafaa = 4;</code>
     * @return int
     */
    public function getObhcochafaa()
    {
        return $this->obhcochafaa;
    }

    /**
     * Generated from protobuf field <code>uint32 obhcochafaa = 4;</code>
     * @param int $var
     * @return $this
     */
    public function setObhcochafaa($var)
    {
        GPBUtil::checkUint32($var);
        $this->obhcochafaa = $var;

        return $this;
    }

}

