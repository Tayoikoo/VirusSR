<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# NO CHECKED-IN PROTOBUF GENCODE
# source: StarRail.proto

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>KNCOEENPPON</code>
 */
class KNCOEENPPON extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>repeated uint32 HAEONCCBKEG = 8;</code>
     */
    private $HAEONCCBKEG;
    /**
     * Generated from protobuf field <code>uint32 EABJLPEGNML = 10;</code>
     */
    protected $EABJLPEGNML = 0;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type array<int>|\Google\Protobuf\Internal\RepeatedField $HAEONCCBKEG
     *     @type int $EABJLPEGNML
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\StarRail::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>repeated uint32 HAEONCCBKEG = 8;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getHAEONCCBKEG()
    {
        return $this->HAEONCCBKEG;
    }

    /**
     * Generated from protobuf field <code>repeated uint32 HAEONCCBKEG = 8;</code>
     * @param array<int>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setHAEONCCBKEG($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::UINT32);
        $this->HAEONCCBKEG = $arr;

        return $this;
    }

    /**
     * Generated from protobuf field <code>uint32 EABJLPEGNML = 10;</code>
     * @return int
     */
    public function getEABJLPEGNML()
    {
        return $this->EABJLPEGNML;
    }

    /**
     * Generated from protobuf field <code>uint32 EABJLPEGNML = 10;</code>
     * @param int $var
     * @return $this
     */
    public function setEABJLPEGNML($var)
    {
        GPBUtil::checkUint32($var);
        $this->EABJLPEGNML = $var;

        return $this;
    }

}
