<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# NO CHECKED-IN PROTOBUF GENCODE
# source: StarRail.proto

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * HJGDCAPCAMF (5530)
 *
 * Generated from protobuf message <code>GetChessRogueStoryInfoScRsp</code>
 */
class GetChessRogueStoryInfoScRsp extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>repeated .AANEHJBNFBM pdbkoclfplg = 12;</code>
     */
    private $pdbkoclfplg;
    /**
     * Generated from protobuf field <code>repeated .EHGLADIDICE clahdhblajm = 14;</code>
     */
    private $clahdhblajm;
    /**
     * Generated from protobuf field <code>uint32 retcode = 6;</code>
     */
    protected $retcode = 0;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type array<\AANEHJBNFBM>|\Google\Protobuf\Internal\RepeatedField $pdbkoclfplg
     *     @type array<\EHGLADIDICE>|\Google\Protobuf\Internal\RepeatedField $clahdhblajm
     *     @type int $retcode
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\StarRail::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>repeated .AANEHJBNFBM pdbkoclfplg = 12;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getPdbkoclfplg()
    {
        return $this->pdbkoclfplg;
    }

    /**
     * Generated from protobuf field <code>repeated .AANEHJBNFBM pdbkoclfplg = 12;</code>
     * @param array<\AANEHJBNFBM>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setPdbkoclfplg($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \AANEHJBNFBM::class);
        $this->pdbkoclfplg = $arr;

        return $this;
    }

    /**
     * Generated from protobuf field <code>repeated .EHGLADIDICE clahdhblajm = 14;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getClahdhblajm()
    {
        return $this->clahdhblajm;
    }

    /**
     * Generated from protobuf field <code>repeated .EHGLADIDICE clahdhblajm = 14;</code>
     * @param array<\EHGLADIDICE>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setClahdhblajm($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \EHGLADIDICE::class);
        $this->clahdhblajm = $arr;

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

}

