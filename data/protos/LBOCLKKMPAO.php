<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# NO CHECKED-IN PROTOBUF GENCODE
# source: StarRail.proto

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>LBOCLKKMPAO</code>
 */
class LBOCLKKMPAO extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>repeated .OJGLGPGDEPN BAFIOLLKBDA = 7;</code>
     */
    private $BAFIOLLKBDA;
    /**
     * Generated from protobuf field <code>uint32 retcode = 12;</code>
     */
    protected $retcode = 0;
    /**
     * Generated from protobuf field <code>repeated uint32 LHJEKCMHHHE = 15;</code>
     */
    private $LHJEKCMHHHE;
    /**
     * Generated from protobuf field <code>repeated .HDGPCEALOPK CLFMFJGLHMJ = 6;</code>
     */
    private $CLFMFJGLHMJ;
    /**
     * Generated from protobuf field <code>repeated uint32 PBLHKADPDGC = 3;</code>
     */
    private $PBLHKADPDGC;
    /**
     * Generated from protobuf field <code>repeated uint32 MDAODDEMOOC = 10;</code>
     */
    private $MDAODDEMOOC;
    /**
     * Generated from protobuf field <code>uint32 NMCPAHLCPKE = 4;</code>
     */
    protected $NMCPAHLCPKE = 0;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type array<\OJGLGPGDEPN>|\Google\Protobuf\Internal\RepeatedField $BAFIOLLKBDA
     *     @type int $retcode
     *     @type array<int>|\Google\Protobuf\Internal\RepeatedField $LHJEKCMHHHE
     *     @type array<\HDGPCEALOPK>|\Google\Protobuf\Internal\RepeatedField $CLFMFJGLHMJ
     *     @type array<int>|\Google\Protobuf\Internal\RepeatedField $PBLHKADPDGC
     *     @type array<int>|\Google\Protobuf\Internal\RepeatedField $MDAODDEMOOC
     *     @type int $NMCPAHLCPKE
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\StarRail::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>repeated .OJGLGPGDEPN BAFIOLLKBDA = 7;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getBAFIOLLKBDA()
    {
        return $this->BAFIOLLKBDA;
    }

    /**
     * Generated from protobuf field <code>repeated .OJGLGPGDEPN BAFIOLLKBDA = 7;</code>
     * @param array<\OJGLGPGDEPN>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setBAFIOLLKBDA($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \OJGLGPGDEPN::class);
        $this->BAFIOLLKBDA = $arr;

        return $this;
    }

    /**
     * Generated from protobuf field <code>uint32 retcode = 12;</code>
     * @return int
     */
    public function getRetcode()
    {
        return $this->retcode;
    }

    /**
     * Generated from protobuf field <code>uint32 retcode = 12;</code>
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
     * Generated from protobuf field <code>repeated uint32 LHJEKCMHHHE = 15;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getLHJEKCMHHHE()
    {
        return $this->LHJEKCMHHHE;
    }

    /**
     * Generated from protobuf field <code>repeated uint32 LHJEKCMHHHE = 15;</code>
     * @param array<int>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setLHJEKCMHHHE($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::UINT32);
        $this->LHJEKCMHHHE = $arr;

        return $this;
    }

    /**
     * Generated from protobuf field <code>repeated .HDGPCEALOPK CLFMFJGLHMJ = 6;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getCLFMFJGLHMJ()
    {
        return $this->CLFMFJGLHMJ;
    }

    /**
     * Generated from protobuf field <code>repeated .HDGPCEALOPK CLFMFJGLHMJ = 6;</code>
     * @param array<\HDGPCEALOPK>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setCLFMFJGLHMJ($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \HDGPCEALOPK::class);
        $this->CLFMFJGLHMJ = $arr;

        return $this;
    }

    /**
     * Generated from protobuf field <code>repeated uint32 PBLHKADPDGC = 3;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getPBLHKADPDGC()
    {
        return $this->PBLHKADPDGC;
    }

    /**
     * Generated from protobuf field <code>repeated uint32 PBLHKADPDGC = 3;</code>
     * @param array<int>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setPBLHKADPDGC($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::UINT32);
        $this->PBLHKADPDGC = $arr;

        return $this;
    }

    /**
     * Generated from protobuf field <code>repeated uint32 MDAODDEMOOC = 10;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getMDAODDEMOOC()
    {
        return $this->MDAODDEMOOC;
    }

    /**
     * Generated from protobuf field <code>repeated uint32 MDAODDEMOOC = 10;</code>
     * @param array<int>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setMDAODDEMOOC($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::UINT32);
        $this->MDAODDEMOOC = $arr;

        return $this;
    }

    /**
     * Generated from protobuf field <code>uint32 NMCPAHLCPKE = 4;</code>
     * @return int
     */
    public function getNMCPAHLCPKE()
    {
        return $this->NMCPAHLCPKE;
    }

    /**
     * Generated from protobuf field <code>uint32 NMCPAHLCPKE = 4;</code>
     * @param int $var
     * @return $this
     */
    public function setNMCPAHLCPKE($var)
    {
        GPBUtil::checkUint32($var);
        $this->NMCPAHLCPKE = $var;

        return $this;
    }

}
