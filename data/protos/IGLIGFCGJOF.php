<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# NO CHECKED-IN PROTOBUF GENCODE
# source: StarRail.proto

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>IGLIGFCGJOF</code>
 */
class IGLIGFCGJOF extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>repeated uint32 FNDLOLLFEPP = 8;</code>
     */
    private $FNDLOLLFEPP;
    /**
     * Generated from protobuf field <code>repeated .AJENGOMMJPN BKKJJEAAABN = 3;</code>
     */
    private $BKKJJEAAABN;
    /**
     * Generated from protobuf field <code>.CHDECELMAGI OAHGEGIELON = 7;</code>
     */
    protected $OAHGEGIELON = 0;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type array<int>|\Google\Protobuf\Internal\RepeatedField $FNDLOLLFEPP
     *     @type array<\AJENGOMMJPN>|\Google\Protobuf\Internal\RepeatedField $BKKJJEAAABN
     *     @type int $OAHGEGIELON
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\StarRail::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>repeated uint32 FNDLOLLFEPP = 8;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getFNDLOLLFEPP()
    {
        return $this->FNDLOLLFEPP;
    }

    /**
     * Generated from protobuf field <code>repeated uint32 FNDLOLLFEPP = 8;</code>
     * @param array<int>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setFNDLOLLFEPP($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::UINT32);
        $this->FNDLOLLFEPP = $arr;

        return $this;
    }

    /**
     * Generated from protobuf field <code>repeated .AJENGOMMJPN BKKJJEAAABN = 3;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getBKKJJEAAABN()
    {
        return $this->BKKJJEAAABN;
    }

    /**
     * Generated from protobuf field <code>repeated .AJENGOMMJPN BKKJJEAAABN = 3;</code>
     * @param array<\AJENGOMMJPN>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setBKKJJEAAABN($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \AJENGOMMJPN::class);
        $this->BKKJJEAAABN = $arr;

        return $this;
    }

    /**
     * Generated from protobuf field <code>.CHDECELMAGI OAHGEGIELON = 7;</code>
     * @return int
     */
    public function getOAHGEGIELON()
    {
        return $this->OAHGEGIELON;
    }

    /**
     * Generated from protobuf field <code>.CHDECELMAGI OAHGEGIELON = 7;</code>
     * @param int $var
     * @return $this
     */
    public function setOAHGEGIELON($var)
    {
        GPBUtil::checkEnum($var, \CHDECELMAGI::class);
        $this->OAHGEGIELON = $var;

        return $this;
    }

}

