<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# NO CHECKED-IN PROTOBUF GENCODE
# source: StarRail.proto

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>BCENNALFCCO</code>
 */
class BCENNALFCCO extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>repeated .FDCJHAPADAN fbhfcalgglj = 7;</code>
     */
    private $fbhfcalgglj;
    /**
     * Generated from protobuf field <code>uint32 cjaebolpifp = 15;</code>
     */
    protected $cjaebolpifp = 0;
    /**
     * Generated from protobuf field <code>.LHCNBPHNPHC lpeckgniodi = 11;</code>
     */
    protected $lpeckgniodi = 0;
    /**
     * Generated from protobuf field <code>.DIDEIODAEMB hjhapennfhe = 1;</code>
     */
    protected $hjhapennfhe = 0;
    /**
     * Generated from protobuf field <code>uint32 bdoenbifbcb = 8;</code>
     */
    protected $bdoenbifbcb = 0;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type array<\FDCJHAPADAN>|\Google\Protobuf\Internal\RepeatedField $fbhfcalgglj
     *     @type int $cjaebolpifp
     *     @type int $lpeckgniodi
     *     @type int $hjhapennfhe
     *     @type int $bdoenbifbcb
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\StarRail::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>repeated .FDCJHAPADAN fbhfcalgglj = 7;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getFbhfcalgglj()
    {
        return $this->fbhfcalgglj;
    }

    /**
     * Generated from protobuf field <code>repeated .FDCJHAPADAN fbhfcalgglj = 7;</code>
     * @param array<\FDCJHAPADAN>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setFbhfcalgglj($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \FDCJHAPADAN::class);
        $this->fbhfcalgglj = $arr;

        return $this;
    }

    /**
     * Generated from protobuf field <code>uint32 cjaebolpifp = 15;</code>
     * @return int
     */
    public function getCjaebolpifp()
    {
        return $this->cjaebolpifp;
    }

    /**
     * Generated from protobuf field <code>uint32 cjaebolpifp = 15;</code>
     * @param int $var
     * @return $this
     */
    public function setCjaebolpifp($var)
    {
        GPBUtil::checkUint32($var);
        $this->cjaebolpifp = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>.LHCNBPHNPHC lpeckgniodi = 11;</code>
     * @return int
     */
    public function getLpeckgniodi()
    {
        return $this->lpeckgniodi;
    }

    /**
     * Generated from protobuf field <code>.LHCNBPHNPHC lpeckgniodi = 11;</code>
     * @param int $var
     * @return $this
     */
    public function setLpeckgniodi($var)
    {
        GPBUtil::checkEnum($var, \LHCNBPHNPHC::class);
        $this->lpeckgniodi = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>.DIDEIODAEMB hjhapennfhe = 1;</code>
     * @return int
     */
    public function getHjhapennfhe()
    {
        return $this->hjhapennfhe;
    }

    /**
     * Generated from protobuf field <code>.DIDEIODAEMB hjhapennfhe = 1;</code>
     * @param int $var
     * @return $this
     */
    public function setHjhapennfhe($var)
    {
        GPBUtil::checkEnum($var, \DIDEIODAEMB::class);
        $this->hjhapennfhe = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>uint32 bdoenbifbcb = 8;</code>
     * @return int
     */
    public function getBdoenbifbcb()
    {
        return $this->bdoenbifbcb;
    }

    /**
     * Generated from protobuf field <code>uint32 bdoenbifbcb = 8;</code>
     * @param int $var
     * @return $this
     */
    public function setBdoenbifbcb($var)
    {
        GPBUtil::checkUint32($var);
        $this->bdoenbifbcb = $var;

        return $this;
    }

}

