<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# NO CHECKED-IN PROTOBUF GENCODE
# source: StarRail.proto

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * CEPHEAGNPKN (5644)
 *
 * Generated from protobuf message <code>SetRogueCollectionCsReq</code>
 */
class SetRogueCollectionCsReq extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>repeated uint32 kfdlgbpkkmd = 9;</code>
     */
    private $kfdlgbpkkmd;
    /**
     * Generated from protobuf field <code>repeated .NMJIPIPDBLN heljblhehjk = 12;</code>
     */
    private $heljblhehjk;
    /**
     * Generated from protobuf field <code>repeated uint32 fhkdialfngj = 5;</code>
     */
    private $fhkdialfngj;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type array<int>|\Google\Protobuf\Internal\RepeatedField $kfdlgbpkkmd
     *     @type array<int>|\Google\Protobuf\Internal\RepeatedField $heljblhehjk
     *     @type array<int>|\Google\Protobuf\Internal\RepeatedField $fhkdialfngj
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\StarRail::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>repeated uint32 kfdlgbpkkmd = 9;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getKfdlgbpkkmd()
    {
        return $this->kfdlgbpkkmd;
    }

    /**
     * Generated from protobuf field <code>repeated uint32 kfdlgbpkkmd = 9;</code>
     * @param array<int>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setKfdlgbpkkmd($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::UINT32);
        $this->kfdlgbpkkmd = $arr;

        return $this;
    }

    /**
     * Generated from protobuf field <code>repeated .NMJIPIPDBLN heljblhehjk = 12;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getHeljblhehjk()
    {
        return $this->heljblhehjk;
    }

    /**
     * Generated from protobuf field <code>repeated .NMJIPIPDBLN heljblhehjk = 12;</code>
     * @param array<int>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setHeljblhehjk($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::ENUM, \NMJIPIPDBLN::class);
        $this->heljblhehjk = $arr;

        return $this;
    }

    /**
     * Generated from protobuf field <code>repeated uint32 fhkdialfngj = 5;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getFhkdialfngj()
    {
        return $this->fhkdialfngj;
    }

    /**
     * Generated from protobuf field <code>repeated uint32 fhkdialfngj = 5;</code>
     * @param array<int>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setFhkdialfngj($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::UINT32);
        $this->fhkdialfngj = $arr;

        return $this;
    }

}
