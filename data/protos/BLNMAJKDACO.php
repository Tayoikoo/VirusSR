<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# NO CHECKED-IN PROTOBUF GENCODE
# source: StarRail.proto

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>BLNMAJKDACO</code>
 */
class BLNMAJKDACO extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>uint32 retcode = 4;</code>
     */
    protected $retcode = 0;
    /**
     * Generated from protobuf field <code>map<uint32, uint32> GMBLFBNLGIO = 8;</code>
     */
    private $GMBLFBNLGIO;
    /**
     * Generated from protobuf field <code>map<uint32, .ALBOCLFFGIH> ALNNBPEFBAA = 12;</code>
     */
    private $ALNNBPEFBAA;
    /**
     * Generated from protobuf field <code>uint32 DLGECDAJLFG = 1;</code>
     */
    protected $DLGECDAJLFG = 0;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type int $retcode
     *     @type array|\Google\Protobuf\Internal\MapField $GMBLFBNLGIO
     *     @type array|\Google\Protobuf\Internal\MapField $ALNNBPEFBAA
     *     @type int $DLGECDAJLFG
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\StarRail::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>uint32 retcode = 4;</code>
     * @return int
     */
    public function getRetcode()
    {
        return $this->retcode;
    }

    /**
     * Generated from protobuf field <code>uint32 retcode = 4;</code>
     * @param int $var
     * @return $this
     */
    public function setRetcode($var)
    {
        GPBUtil::checkUint32($var);
        $this->retcode = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>map<uint32, uint32> GMBLFBNLGIO = 8;</code>
     * @return \Google\Protobuf\Internal\MapField
     */
    public function getGMBLFBNLGIO()
    {
        return $this->GMBLFBNLGIO;
    }

    /**
     * Generated from protobuf field <code>map<uint32, uint32> GMBLFBNLGIO = 8;</code>
     * @param array|\Google\Protobuf\Internal\MapField $var
     * @return $this
     */
    public function setGMBLFBNLGIO($var)
    {
        $arr = GPBUtil::checkMapField($var, \Google\Protobuf\Internal\GPBType::UINT32, \Google\Protobuf\Internal\GPBType::UINT32);
        $this->GMBLFBNLGIO = $arr;

        return $this;
    }

    /**
     * Generated from protobuf field <code>map<uint32, .ALBOCLFFGIH> ALNNBPEFBAA = 12;</code>
     * @return \Google\Protobuf\Internal\MapField
     */
    public function getALNNBPEFBAA()
    {
        return $this->ALNNBPEFBAA;
    }

    /**
     * Generated from protobuf field <code>map<uint32, .ALBOCLFFGIH> ALNNBPEFBAA = 12;</code>
     * @param array|\Google\Protobuf\Internal\MapField $var
     * @return $this
     */
    public function setALNNBPEFBAA($var)
    {
        $arr = GPBUtil::checkMapField($var, \Google\Protobuf\Internal\GPBType::UINT32, \Google\Protobuf\Internal\GPBType::MESSAGE, \ALBOCLFFGIH::class);
        $this->ALNNBPEFBAA = $arr;

        return $this;
    }

    /**
     * Generated from protobuf field <code>uint32 DLGECDAJLFG = 1;</code>
     * @return int
     */
    public function getDLGECDAJLFG()
    {
        return $this->DLGECDAJLFG;
    }

    /**
     * Generated from protobuf field <code>uint32 DLGECDAJLFG = 1;</code>
     * @param int $var
     * @return $this
     */
    public function setDLGECDAJLFG($var)
    {
        GPBUtil::checkUint32($var);
        $this->DLGECDAJLFG = $var;

        return $this;
    }

}

