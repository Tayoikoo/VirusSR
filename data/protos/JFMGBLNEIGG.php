<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# NO CHECKED-IN PROTOBUF GENCODE
# source: StarRail.proto

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>JFMGBLNEIGG</code>
 */
class JFMGBLNEIGG extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>uint32 OEJINGDKNND = 7;</code>
     */
    protected $OEJINGDKNND = 0;
    /**
     * Generated from protobuf field <code>repeated .RogueDialogueEventParam NLNNPIGIGAM = 3;</code>
     */
    private $NLNNPIGIGAM;
    /**
     * Generated from protobuf field <code>uint32 PLONDJNPGIB = 5;</code>
     */
    protected $PLONDJNPGIB = 0;
    /**
     * Generated from protobuf field <code>uint32 MFPDBLLKBCG = 11;</code>
     */
    protected $MFPDBLLKBCG = 0;
    /**
     * Generated from protobuf field <code>repeated uint32 KPIGPPFBPEK = 2;</code>
     */
    private $KPIGPPFBPEK;
    /**
     * Generated from protobuf field <code>uint32 NGLOKPIBFPN = 10;</code>
     */
    protected $NGLOKPIBFPN = 0;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type int $OEJINGDKNND
     *     @type array<\RogueDialogueEventParam>|\Google\Protobuf\Internal\RepeatedField $NLNNPIGIGAM
     *     @type int $PLONDJNPGIB
     *     @type int $MFPDBLLKBCG
     *     @type array<int>|\Google\Protobuf\Internal\RepeatedField $KPIGPPFBPEK
     *     @type int $NGLOKPIBFPN
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\StarRail::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>uint32 OEJINGDKNND = 7;</code>
     * @return int
     */
    public function getOEJINGDKNND()
    {
        return $this->OEJINGDKNND;
    }

    /**
     * Generated from protobuf field <code>uint32 OEJINGDKNND = 7;</code>
     * @param int $var
     * @return $this
     */
    public function setOEJINGDKNND($var)
    {
        GPBUtil::checkUint32($var);
        $this->OEJINGDKNND = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>repeated .RogueDialogueEventParam NLNNPIGIGAM = 3;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getNLNNPIGIGAM()
    {
        return $this->NLNNPIGIGAM;
    }

    /**
     * Generated from protobuf field <code>repeated .RogueDialogueEventParam NLNNPIGIGAM = 3;</code>
     * @param array<\RogueDialogueEventParam>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setNLNNPIGIGAM($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \RogueDialogueEventParam::class);
        $this->NLNNPIGIGAM = $arr;

        return $this;
    }

    /**
     * Generated from protobuf field <code>uint32 PLONDJNPGIB = 5;</code>
     * @return int
     */
    public function getPLONDJNPGIB()
    {
        return $this->PLONDJNPGIB;
    }

    /**
     * Generated from protobuf field <code>uint32 PLONDJNPGIB = 5;</code>
     * @param int $var
     * @return $this
     */
    public function setPLONDJNPGIB($var)
    {
        GPBUtil::checkUint32($var);
        $this->PLONDJNPGIB = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>uint32 MFPDBLLKBCG = 11;</code>
     * @return int
     */
    public function getMFPDBLLKBCG()
    {
        return $this->MFPDBLLKBCG;
    }

    /**
     * Generated from protobuf field <code>uint32 MFPDBLLKBCG = 11;</code>
     * @param int $var
     * @return $this
     */
    public function setMFPDBLLKBCG($var)
    {
        GPBUtil::checkUint32($var);
        $this->MFPDBLLKBCG = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>repeated uint32 KPIGPPFBPEK = 2;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getKPIGPPFBPEK()
    {
        return $this->KPIGPPFBPEK;
    }

    /**
     * Generated from protobuf field <code>repeated uint32 KPIGPPFBPEK = 2;</code>
     * @param array<int>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setKPIGPPFBPEK($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::UINT32);
        $this->KPIGPPFBPEK = $arr;

        return $this;
    }

    /**
     * Generated from protobuf field <code>uint32 NGLOKPIBFPN = 10;</code>
     * @return int
     */
    public function getNGLOKPIBFPN()
    {
        return $this->NGLOKPIBFPN;
    }

    /**
     * Generated from protobuf field <code>uint32 NGLOKPIBFPN = 10;</code>
     * @param int $var
     * @return $this
     */
    public function setNGLOKPIBFPN($var)
    {
        GPBUtil::checkUint32($var);
        $this->NGLOKPIBFPN = $var;

        return $this;
    }

}
