<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# NO CHECKED-IN PROTOBUF GENCODE
# source: StarRail.proto

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>IEDJLIPEOOB</code>
 */
class IEDJLIPEOOB extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>uint32 GPKEAKPHIPA = 4;</code>
     */
    protected $GPKEAKPHIPA = 0;
    /**
     * Generated from protobuf field <code>repeated .CBIEELKJMGL GPPHJGGFMCB = 2;</code>
     */
    private $GPPHJGGFMCB;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type int $GPKEAKPHIPA
     *     @type array<\CBIEELKJMGL>|\Google\Protobuf\Internal\RepeatedField $GPPHJGGFMCB
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\StarRail::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>uint32 GPKEAKPHIPA = 4;</code>
     * @return int
     */
    public function getGPKEAKPHIPA()
    {
        return $this->GPKEAKPHIPA;
    }

    /**
     * Generated from protobuf field <code>uint32 GPKEAKPHIPA = 4;</code>
     * @param int $var
     * @return $this
     */
    public function setGPKEAKPHIPA($var)
    {
        GPBUtil::checkUint32($var);
        $this->GPKEAKPHIPA = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>repeated .CBIEELKJMGL GPPHJGGFMCB = 2;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getGPPHJGGFMCB()
    {
        return $this->GPPHJGGFMCB;
    }

    /**
     * Generated from protobuf field <code>repeated .CBIEELKJMGL GPPHJGGFMCB = 2;</code>
     * @param array<\CBIEELKJMGL>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setGPPHJGGFMCB($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \CBIEELKJMGL::class);
        $this->GPPHJGGFMCB = $arr;

        return $this;
    }

}
