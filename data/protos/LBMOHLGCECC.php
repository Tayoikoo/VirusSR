<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# NO CHECKED-IN PROTOBUF GENCODE
# source: StarRail.proto

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>LBMOHLGCECC</code>
 */
class LBMOHLGCECC extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>bool MIDBCDIHNKM = 12;</code>
     */
    protected $MIDBCDIHNKM = false;
    /**
     * Generated from protobuf field <code>repeated .DHEADFMILEJ DDEJPPHIDEH = 15;</code>
     */
    private $DDEJPPHIDEH;
    /**
     * Generated from protobuf field <code>string AECLNDHLOFP = 2;</code>
     */
    protected $AECLNDHLOFP = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type bool $MIDBCDIHNKM
     *     @type array<\DHEADFMILEJ>|\Google\Protobuf\Internal\RepeatedField $DDEJPPHIDEH
     *     @type string $AECLNDHLOFP
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\StarRail::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>bool MIDBCDIHNKM = 12;</code>
     * @return bool
     */
    public function getMIDBCDIHNKM()
    {
        return $this->MIDBCDIHNKM;
    }

    /**
     * Generated from protobuf field <code>bool MIDBCDIHNKM = 12;</code>
     * @param bool $var
     * @return $this
     */
    public function setMIDBCDIHNKM($var)
    {
        GPBUtil::checkBool($var);
        $this->MIDBCDIHNKM = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>repeated .DHEADFMILEJ DDEJPPHIDEH = 15;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getDDEJPPHIDEH()
    {
        return $this->DDEJPPHIDEH;
    }

    /**
     * Generated from protobuf field <code>repeated .DHEADFMILEJ DDEJPPHIDEH = 15;</code>
     * @param array<\DHEADFMILEJ>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setDDEJPPHIDEH($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \DHEADFMILEJ::class);
        $this->DDEJPPHIDEH = $arr;

        return $this;
    }

    /**
     * Generated from protobuf field <code>string AECLNDHLOFP = 2;</code>
     * @return string
     */
    public function getAECLNDHLOFP()
    {
        return $this->AECLNDHLOFP;
    }

    /**
     * Generated from protobuf field <code>string AECLNDHLOFP = 2;</code>
     * @param string $var
     * @return $this
     */
    public function setAECLNDHLOFP($var)
    {
        GPBUtil::checkString($var, True);
        $this->AECLNDHLOFP = $var;

        return $this;
    }

}

