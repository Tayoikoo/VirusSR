<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# NO CHECKED-IN PROTOBUF GENCODE
# source: StarRail.proto

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>FICINMIKJBG</code>
 */
class FICINMIKJBG extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>string PEPHONIOECA = 1;</code>
     */
    protected $PEPHONIOECA = '';
    /**
     * Generated from protobuf field <code>uint32 LENAKCFLCKN = 2;</code>
     */
    protected $LENAKCFLCKN = 0;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $PEPHONIOECA
     *     @type int $LENAKCFLCKN
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\StarRail::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>string PEPHONIOECA = 1;</code>
     * @return string
     */
    public function getPEPHONIOECA()
    {
        return $this->PEPHONIOECA;
    }

    /**
     * Generated from protobuf field <code>string PEPHONIOECA = 1;</code>
     * @param string $var
     * @return $this
     */
    public function setPEPHONIOECA($var)
    {
        GPBUtil::checkString($var, True);
        $this->PEPHONIOECA = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>uint32 LENAKCFLCKN = 2;</code>
     * @return int
     */
    public function getLENAKCFLCKN()
    {
        return $this->LENAKCFLCKN;
    }

    /**
     * Generated from protobuf field <code>uint32 LENAKCFLCKN = 2;</code>
     * @param int $var
     * @return $this
     */
    public function setLENAKCFLCKN($var)
    {
        GPBUtil::checkUint32($var);
        $this->LENAKCFLCKN = $var;

        return $this;
    }

}

