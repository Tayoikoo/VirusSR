<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# NO CHECKED-IN PROTOBUF GENCODE
# source: StarRail.proto

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>IKDPGEAOIJL</code>
 */
class IKDPGEAOIJL extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>uint32 IMEENEHMHCF = 1;</code>
     */
    protected $IMEENEHMHCF = 0;
    /**
     * Generated from protobuf field <code>repeated .DHAFNIAOBHM MMLANFIFPJJ = 2;</code>
     */
    private $MMLANFIFPJJ;
    /**
     * Generated from protobuf field <code>uint32 level = 3;</code>
     */
    protected $level = 0;
    /**
     * Generated from protobuf field <code>map<uint32, uint32> BLHKEFPJGFG = 4;</code>
     */
    private $BLHKEFPJGFG;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type int $IMEENEHMHCF
     *     @type array<\DHAFNIAOBHM>|\Google\Protobuf\Internal\RepeatedField $MMLANFIFPJJ
     *     @type int $level
     *     @type array|\Google\Protobuf\Internal\MapField $BLHKEFPJGFG
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\StarRail::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>uint32 IMEENEHMHCF = 1;</code>
     * @return int
     */
    public function getIMEENEHMHCF()
    {
        return $this->IMEENEHMHCF;
    }

    /**
     * Generated from protobuf field <code>uint32 IMEENEHMHCF = 1;</code>
     * @param int $var
     * @return $this
     */
    public function setIMEENEHMHCF($var)
    {
        GPBUtil::checkUint32($var);
        $this->IMEENEHMHCF = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>repeated .DHAFNIAOBHM MMLANFIFPJJ = 2;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getMMLANFIFPJJ()
    {
        return $this->MMLANFIFPJJ;
    }

    /**
     * Generated from protobuf field <code>repeated .DHAFNIAOBHM MMLANFIFPJJ = 2;</code>
     * @param array<\DHAFNIAOBHM>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setMMLANFIFPJJ($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \DHAFNIAOBHM::class);
        $this->MMLANFIFPJJ = $arr;

        return $this;
    }

    /**
     * Generated from protobuf field <code>uint32 level = 3;</code>
     * @return int
     */
    public function getLevel()
    {
        return $this->level;
    }

    /**
     * Generated from protobuf field <code>uint32 level = 3;</code>
     * @param int $var
     * @return $this
     */
    public function setLevel($var)
    {
        GPBUtil::checkUint32($var);
        $this->level = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>map<uint32, uint32> BLHKEFPJGFG = 4;</code>
     * @return \Google\Protobuf\Internal\MapField
     */
    public function getBLHKEFPJGFG()
    {
        return $this->BLHKEFPJGFG;
    }

    /**
     * Generated from protobuf field <code>map<uint32, uint32> BLHKEFPJGFG = 4;</code>
     * @param array|\Google\Protobuf\Internal\MapField $var
     * @return $this
     */
    public function setBLHKEFPJGFG($var)
    {
        $arr = GPBUtil::checkMapField($var, \Google\Protobuf\Internal\GPBType::UINT32, \Google\Protobuf\Internal\GPBType::UINT32);
        $this->BLHKEFPJGFG = $arr;

        return $this;
    }

}
