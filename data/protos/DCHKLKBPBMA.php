<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# NO CHECKED-IN PROTOBUF GENCODE
# source: StarRail.proto

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>DCHKLKBPBMA</code>
 */
class DCHKLKBPBMA extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>repeated .BLAOHAIBJHL FLDODIAFPJA = 9;</code>
     */
    private $FLDODIAFPJA;
    /**
     * Generated from protobuf field <code>.JLGNODBFPNB CPANCNGBMFE = 12;</code>
     */
    protected $CPANCNGBMFE = 0;
    /**
     * Generated from protobuf field <code>uint32 APKEFKGPHIE = 3;</code>
     */
    protected $APKEFKGPHIE = 0;
    /**
     * Generated from protobuf field <code>repeated .NHPAJELMPLL EFNEKHMHNHB = 15;</code>
     */
    private $EFNEKHMHNHB;
    /**
     * Generated from protobuf field <code>uint32 ILIFHHJFMIH = 10;</code>
     */
    protected $ILIFHHJFMIH = 0;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type array<\BLAOHAIBJHL>|\Google\Protobuf\Internal\RepeatedField $FLDODIAFPJA
     *     @type int $CPANCNGBMFE
     *     @type int $APKEFKGPHIE
     *     @type array<\NHPAJELMPLL>|\Google\Protobuf\Internal\RepeatedField $EFNEKHMHNHB
     *     @type int $ILIFHHJFMIH
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\StarRail::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>repeated .BLAOHAIBJHL FLDODIAFPJA = 9;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getFLDODIAFPJA()
    {
        return $this->FLDODIAFPJA;
    }

    /**
     * Generated from protobuf field <code>repeated .BLAOHAIBJHL FLDODIAFPJA = 9;</code>
     * @param array<\BLAOHAIBJHL>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setFLDODIAFPJA($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \BLAOHAIBJHL::class);
        $this->FLDODIAFPJA = $arr;

        return $this;
    }

    /**
     * Generated from protobuf field <code>.JLGNODBFPNB CPANCNGBMFE = 12;</code>
     * @return int
     */
    public function getCPANCNGBMFE()
    {
        return $this->CPANCNGBMFE;
    }

    /**
     * Generated from protobuf field <code>.JLGNODBFPNB CPANCNGBMFE = 12;</code>
     * @param int $var
     * @return $this
     */
    public function setCPANCNGBMFE($var)
    {
        GPBUtil::checkEnum($var, \JLGNODBFPNB::class);
        $this->CPANCNGBMFE = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>uint32 APKEFKGPHIE = 3;</code>
     * @return int
     */
    public function getAPKEFKGPHIE()
    {
        return $this->APKEFKGPHIE;
    }

    /**
     * Generated from protobuf field <code>uint32 APKEFKGPHIE = 3;</code>
     * @param int $var
     * @return $this
     */
    public function setAPKEFKGPHIE($var)
    {
        GPBUtil::checkUint32($var);
        $this->APKEFKGPHIE = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>repeated .NHPAJELMPLL EFNEKHMHNHB = 15;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getEFNEKHMHNHB()
    {
        return $this->EFNEKHMHNHB;
    }

    /**
     * Generated from protobuf field <code>repeated .NHPAJELMPLL EFNEKHMHNHB = 15;</code>
     * @param array<\NHPAJELMPLL>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setEFNEKHMHNHB($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \NHPAJELMPLL::class);
        $this->EFNEKHMHNHB = $arr;

        return $this;
    }

    /**
     * Generated from protobuf field <code>uint32 ILIFHHJFMIH = 10;</code>
     * @return int
     */
    public function getILIFHHJFMIH()
    {
        return $this->ILIFHHJFMIH;
    }

    /**
     * Generated from protobuf field <code>uint32 ILIFHHJFMIH = 10;</code>
     * @param int $var
     * @return $this
     */
    public function setILIFHHJFMIH($var)
    {
        GPBUtil::checkUint32($var);
        $this->ILIFHHJFMIH = $var;

        return $this;
    }

}
