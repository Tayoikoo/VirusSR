<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# NO CHECKED-IN PROTOBUF GENCODE
# source: StarRail.proto

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>OMFKIHPJOBB</code>
 */
class OMFKIHPJOBB extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>uint32 MCNAPKPEJII = 6;</code>
     */
    protected $MCNAPKPEJII = 0;
    /**
     * Generated from protobuf field <code>repeated .EELOBICMJHN JNMOKIAHMLD = 4;</code>
     */
    private $JNMOKIAHMLD;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type int $MCNAPKPEJII
     *     @type array<\EELOBICMJHN>|\Google\Protobuf\Internal\RepeatedField $JNMOKIAHMLD
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\StarRail::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>uint32 MCNAPKPEJII = 6;</code>
     * @return int
     */
    public function getMCNAPKPEJII()
    {
        return $this->MCNAPKPEJII;
    }

    /**
     * Generated from protobuf field <code>uint32 MCNAPKPEJII = 6;</code>
     * @param int $var
     * @return $this
     */
    public function setMCNAPKPEJII($var)
    {
        GPBUtil::checkUint32($var);
        $this->MCNAPKPEJII = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>repeated .EELOBICMJHN JNMOKIAHMLD = 4;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getJNMOKIAHMLD()
    {
        return $this->JNMOKIAHMLD;
    }

    /**
     * Generated from protobuf field <code>repeated .EELOBICMJHN JNMOKIAHMLD = 4;</code>
     * @param array<\EELOBICMJHN>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setJNMOKIAHMLD($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \EELOBICMJHN::class);
        $this->JNMOKIAHMLD = $arr;

        return $this;
    }

}

