<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# NO CHECKED-IN PROTOBUF GENCODE
# source: StarRail.proto

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>HOBJDHMGLMG</code>
 */
class HOBJDHMGLMG extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>uint32 HMPPFGCIFJK = 6;</code>
     */
    protected $HMPPFGCIFJK = 0;
    /**
     * Generated from protobuf field <code>repeated .EHIMNOKLCOE avatar_list = 15;</code>
     */
    private $avatar_list;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type int $HMPPFGCIFJK
     *     @type array<\EHIMNOKLCOE>|\Google\Protobuf\Internal\RepeatedField $avatar_list
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\StarRail::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>uint32 HMPPFGCIFJK = 6;</code>
     * @return int
     */
    public function getHMPPFGCIFJK()
    {
        return $this->HMPPFGCIFJK;
    }

    /**
     * Generated from protobuf field <code>uint32 HMPPFGCIFJK = 6;</code>
     * @param int $var
     * @return $this
     */
    public function setHMPPFGCIFJK($var)
    {
        GPBUtil::checkUint32($var);
        $this->HMPPFGCIFJK = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>repeated .EHIMNOKLCOE avatar_list = 15;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getAvatarList()
    {
        return $this->avatar_list;
    }

    /**
     * Generated from protobuf field <code>repeated .EHIMNOKLCOE avatar_list = 15;</code>
     * @param array<\EHIMNOKLCOE>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setAvatarList($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \EHIMNOKLCOE::class);
        $this->avatar_list = $arr;

        return $this;
    }

}

