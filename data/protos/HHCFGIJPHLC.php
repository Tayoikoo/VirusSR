<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# NO CHECKED-IN PROTOBUF GENCODE
# source: StarRail.proto

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>HHCFGIJPHLC</code>
 */
class HHCFGIJPHLC extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>uint32 FINLPBFNLHP = 3;</code>
     */
    protected $FINLPBFNLHP = 0;
    /**
     * Generated from protobuf field <code>repeated .POMOBNDHJHI PJMAHBFKHLB = 9;</code>
     */
    private $PJMAHBFKHLB;
    /**
     * Generated from protobuf field <code>uint32 EAPOMIMHKEB = 13;</code>
     */
    protected $EAPOMIMHKEB = 0;
    /**
     * Generated from protobuf field <code>uint32 OMBLHJDKEJA = 15;</code>
     */
    protected $OMBLHJDKEJA = 0;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type int $FINLPBFNLHP
     *     @type array<\POMOBNDHJHI>|\Google\Protobuf\Internal\RepeatedField $PJMAHBFKHLB
     *     @type int $EAPOMIMHKEB
     *     @type int $OMBLHJDKEJA
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\StarRail::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>uint32 FINLPBFNLHP = 3;</code>
     * @return int
     */
    public function getFINLPBFNLHP()
    {
        return $this->FINLPBFNLHP;
    }

    /**
     * Generated from protobuf field <code>uint32 FINLPBFNLHP = 3;</code>
     * @param int $var
     * @return $this
     */
    public function setFINLPBFNLHP($var)
    {
        GPBUtil::checkUint32($var);
        $this->FINLPBFNLHP = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>repeated .POMOBNDHJHI PJMAHBFKHLB = 9;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getPJMAHBFKHLB()
    {
        return $this->PJMAHBFKHLB;
    }

    /**
     * Generated from protobuf field <code>repeated .POMOBNDHJHI PJMAHBFKHLB = 9;</code>
     * @param array<\POMOBNDHJHI>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setPJMAHBFKHLB($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \POMOBNDHJHI::class);
        $this->PJMAHBFKHLB = $arr;

        return $this;
    }

    /**
     * Generated from protobuf field <code>uint32 EAPOMIMHKEB = 13;</code>
     * @return int
     */
    public function getEAPOMIMHKEB()
    {
        return $this->EAPOMIMHKEB;
    }

    /**
     * Generated from protobuf field <code>uint32 EAPOMIMHKEB = 13;</code>
     * @param int $var
     * @return $this
     */
    public function setEAPOMIMHKEB($var)
    {
        GPBUtil::checkUint32($var);
        $this->EAPOMIMHKEB = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>uint32 OMBLHJDKEJA = 15;</code>
     * @return int
     */
    public function getOMBLHJDKEJA()
    {
        return $this->OMBLHJDKEJA;
    }

    /**
     * Generated from protobuf field <code>uint32 OMBLHJDKEJA = 15;</code>
     * @param int $var
     * @return $this
     */
    public function setOMBLHJDKEJA($var)
    {
        GPBUtil::checkUint32($var);
        $this->OMBLHJDKEJA = $var;

        return $this;
    }

}
