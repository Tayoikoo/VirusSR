<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# NO CHECKED-IN PROTOBUF GENCODE
# source: StarRail.proto

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>MJJECIBHBJI</code>
 */
class MJJECIBHBJI extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>repeated uint32 HNELIDCNCCC = 4;</code>
     */
    private $HNELIDCNCCC;
    /**
     * Generated from protobuf field <code>repeated uint32 NLHFLLFPEHE = 7;</code>
     */
    private $NLHFLLFPEHE;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type array<int>|\Google\Protobuf\Internal\RepeatedField $HNELIDCNCCC
     *     @type array<int>|\Google\Protobuf\Internal\RepeatedField $NLHFLLFPEHE
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\StarRail::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>repeated uint32 HNELIDCNCCC = 4;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getHNELIDCNCCC()
    {
        return $this->HNELIDCNCCC;
    }

    /**
     * Generated from protobuf field <code>repeated uint32 HNELIDCNCCC = 4;</code>
     * @param array<int>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setHNELIDCNCCC($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::UINT32);
        $this->HNELIDCNCCC = $arr;

        return $this;
    }

    /**
     * Generated from protobuf field <code>repeated uint32 NLHFLLFPEHE = 7;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getNLHFLLFPEHE()
    {
        return $this->NLHFLLFPEHE;
    }

    /**
     * Generated from protobuf field <code>repeated uint32 NLHFLLFPEHE = 7;</code>
     * @param array<int>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setNLHFLLFPEHE($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::UINT32);
        $this->NLHFLLFPEHE = $arr;

        return $this;
    }

}

