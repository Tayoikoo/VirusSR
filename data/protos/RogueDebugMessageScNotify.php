<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# NO CHECKED-IN PROTOBUF GENCODE
# source: StarRail.proto

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * KAIOMKPFEGO (5615)
 *
 * Generated from protobuf message <code>RogueDebugMessageScNotify</code>
 */
class RogueDebugMessageScNotify extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>string kalfnpjbfil = 5;</code>
     */
    protected $kalfnpjbfil = '';
    /**
     * Generated from protobuf field <code>.AMJCKJDMHMG type = 13;</code>
     */
    protected $type = 0;
    /**
     * Generated from protobuf field <code>string mmplmiafkfc = 8;</code>
     */
    protected $mmplmiafkfc = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $kalfnpjbfil
     *     @type int $type
     *     @type string $mmplmiafkfc
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\StarRail::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>string kalfnpjbfil = 5;</code>
     * @return string
     */
    public function getKalfnpjbfil()
    {
        return $this->kalfnpjbfil;
    }

    /**
     * Generated from protobuf field <code>string kalfnpjbfil = 5;</code>
     * @param string $var
     * @return $this
     */
    public function setKalfnpjbfil($var)
    {
        GPBUtil::checkString($var, True);
        $this->kalfnpjbfil = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>.AMJCKJDMHMG type = 13;</code>
     * @return int
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * Generated from protobuf field <code>.AMJCKJDMHMG type = 13;</code>
     * @param int $var
     * @return $this
     */
    public function setType($var)
    {
        GPBUtil::checkEnum($var, \AMJCKJDMHMG::class);
        $this->type = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>string mmplmiafkfc = 8;</code>
     * @return string
     */
    public function getMmplmiafkfc()
    {
        return $this->mmplmiafkfc;
    }

    /**
     * Generated from protobuf field <code>string mmplmiafkfc = 8;</code>
     * @param string $var
     * @return $this
     */
    public function setMmplmiafkfc($var)
    {
        GPBUtil::checkString($var, True);
        $this->mmplmiafkfc = $var;

        return $this;
    }

}
