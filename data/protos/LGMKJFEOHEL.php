<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# NO CHECKED-IN PROTOBUF GENCODE
# source: StarRail.proto

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>LGMKJFEOHEL</code>
 */
class LGMKJFEOHEL extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>.ItemList JPCFLGNMCOL = 6;</code>
     */
    protected $JPCFLGNMCOL = null;
    /**
     * Generated from protobuf field <code>uint32 OGEFFHHNMLE = 8;</code>
     */
    protected $OGEFFHHNMLE = 0;
    /**
     * Generated from protobuf field <code>repeated uint32 JAMJNDMKMJI = 7;</code>
     */
    private $JAMJNDMKMJI;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \ItemList $JPCFLGNMCOL
     *     @type int $OGEFFHHNMLE
     *     @type array<int>|\Google\Protobuf\Internal\RepeatedField $JAMJNDMKMJI
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\StarRail::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>.ItemList JPCFLGNMCOL = 6;</code>
     * @return \ItemList|null
     */
    public function getJPCFLGNMCOL()
    {
        return $this->JPCFLGNMCOL;
    }

    public function hasJPCFLGNMCOL()
    {
        return isset($this->JPCFLGNMCOL);
    }

    public function clearJPCFLGNMCOL()
    {
        unset($this->JPCFLGNMCOL);
    }

    /**
     * Generated from protobuf field <code>.ItemList JPCFLGNMCOL = 6;</code>
     * @param \ItemList $var
     * @return $this
     */
    public function setJPCFLGNMCOL($var)
    {
        GPBUtil::checkMessage($var, \ItemList::class);
        $this->JPCFLGNMCOL = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>uint32 OGEFFHHNMLE = 8;</code>
     * @return int
     */
    public function getOGEFFHHNMLE()
    {
        return $this->OGEFFHHNMLE;
    }

    /**
     * Generated from protobuf field <code>uint32 OGEFFHHNMLE = 8;</code>
     * @param int $var
     * @return $this
     */
    public function setOGEFFHHNMLE($var)
    {
        GPBUtil::checkUint32($var);
        $this->OGEFFHHNMLE = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>repeated uint32 JAMJNDMKMJI = 7;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getJAMJNDMKMJI()
    {
        return $this->JAMJNDMKMJI;
    }

    /**
     * Generated from protobuf field <code>repeated uint32 JAMJNDMKMJI = 7;</code>
     * @param array<int>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setJAMJNDMKMJI($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::UINT32);
        $this->JAMJNDMKMJI = $arr;

        return $this;
    }

}

