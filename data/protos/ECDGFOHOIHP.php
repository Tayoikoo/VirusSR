<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# NO CHECKED-IN PROTOBUF GENCODE
# source: StarRail.proto

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>ECDGFOHOIHP</code>
 */
class ECDGFOHOIHP extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>bytes DIAEMPFEILG = 5;</code>
     */
    protected $DIAEMPFEILG = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $DIAEMPFEILG
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\StarRail::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>bytes DIAEMPFEILG = 5;</code>
     * @return string
     */
    public function getDIAEMPFEILG()
    {
        return $this->DIAEMPFEILG;
    }

    /**
     * Generated from protobuf field <code>bytes DIAEMPFEILG = 5;</code>
     * @param string $var
     * @return $this
     */
    public function setDIAEMPFEILG($var)
    {
        GPBUtil::checkString($var, False);
        $this->DIAEMPFEILG = $var;

        return $this;
    }

}
