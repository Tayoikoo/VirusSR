<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# NO CHECKED-IN PROTOBUF GENCODE
# source: StarRail.proto

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>AMCJPGPJPNC</code>
 */
class AMCJPGPJPNC extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>int64 JKHOCHIJPDH = 14;</code>
     */
    protected $JKHOCHIJPDH = 0;
    /**
     * Generated from protobuf field <code>uint32 retcode = 6;</code>
     */
    protected $retcode = 0;
    /**
     * Generated from protobuf field <code>.MultiPathAvatarType LGMDJJNEONL = 15;</code>
     */
    protected $LGMDJJNEONL = 0;
    /**
     * Generated from protobuf field <code>bool PBFJCNKOEAM = 10;</code>
     */
    protected $PBFJCNKOEAM = false;
    /**
     * Generated from protobuf field <code>repeated .CPFAAFNPNJL JKGCJJJAMBH = 13;</code>
     */
    private $JKGCJJJAMBH;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type int|string $JKHOCHIJPDH
     *     @type int $retcode
     *     @type int $LGMDJJNEONL
     *     @type bool $PBFJCNKOEAM
     *     @type array<\CPFAAFNPNJL>|\Google\Protobuf\Internal\RepeatedField $JKGCJJJAMBH
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\StarRail::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>int64 JKHOCHIJPDH = 14;</code>
     * @return int|string
     */
    public function getJKHOCHIJPDH()
    {
        return $this->JKHOCHIJPDH;
    }

    /**
     * Generated from protobuf field <code>int64 JKHOCHIJPDH = 14;</code>
     * @param int|string $var
     * @return $this
     */
    public function setJKHOCHIJPDH($var)
    {
        GPBUtil::checkInt64($var);
        $this->JKHOCHIJPDH = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>uint32 retcode = 6;</code>
     * @return int
     */
    public function getRetcode()
    {
        return $this->retcode;
    }

    /**
     * Generated from protobuf field <code>uint32 retcode = 6;</code>
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
     * Generated from protobuf field <code>.MultiPathAvatarType LGMDJJNEONL = 15;</code>
     * @return int
     */
    public function getLGMDJJNEONL()
    {
        return $this->LGMDJJNEONL;
    }

    /**
     * Generated from protobuf field <code>.MultiPathAvatarType LGMDJJNEONL = 15;</code>
     * @param int $var
     * @return $this
     */
    public function setLGMDJJNEONL($var)
    {
        GPBUtil::checkEnum($var, \MultiPathAvatarType::class);
        $this->LGMDJJNEONL = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>bool PBFJCNKOEAM = 10;</code>
     * @return bool
     */
    public function getPBFJCNKOEAM()
    {
        return $this->PBFJCNKOEAM;
    }

    /**
     * Generated from protobuf field <code>bool PBFJCNKOEAM = 10;</code>
     * @param bool $var
     * @return $this
     */
    public function setPBFJCNKOEAM($var)
    {
        GPBUtil::checkBool($var);
        $this->PBFJCNKOEAM = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>repeated .CPFAAFNPNJL JKGCJJJAMBH = 13;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getJKGCJJJAMBH()
    {
        return $this->JKGCJJJAMBH;
    }

    /**
     * Generated from protobuf field <code>repeated .CPFAAFNPNJL JKGCJJJAMBH = 13;</code>
     * @param array<\CPFAAFNPNJL>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setJKGCJJJAMBH($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \CPFAAFNPNJL::class);
        $this->JKGCJJJAMBH = $arr;

        return $this;
    }

}

