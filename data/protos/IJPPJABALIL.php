<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# NO CHECKED-IN PROTOBUF GENCODE
# source: StarRail.proto

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>IJPPJABALIL</code>
 */
class IJPPJABALIL extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>repeated uint32 kbbjbmfgfmj = 12;</code>
     */
    private $kbbjbmfgfmj;
    /**
     * Generated from protobuf field <code>uint32 hepkmkajngb = 6;</code>
     */
    protected $hepkmkajngb = 0;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type array<int>|\Google\Protobuf\Internal\RepeatedField $kbbjbmfgfmj
     *     @type int $hepkmkajngb
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\StarRail::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>repeated uint32 kbbjbmfgfmj = 12;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getKbbjbmfgfmj()
    {
        return $this->kbbjbmfgfmj;
    }

    /**
     * Generated from protobuf field <code>repeated uint32 kbbjbmfgfmj = 12;</code>
     * @param array<int>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setKbbjbmfgfmj($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::UINT32);
        $this->kbbjbmfgfmj = $arr;

        return $this;
    }

    /**
     * Generated from protobuf field <code>uint32 hepkmkajngb = 6;</code>
     * @return int
     */
    public function getHepkmkajngb()
    {
        return $this->hepkmkajngb;
    }

    /**
     * Generated from protobuf field <code>uint32 hepkmkajngb = 6;</code>
     * @param int $var
     * @return $this
     */
    public function setHepkmkajngb($var)
    {
        GPBUtil::checkUint32($var);
        $this->hepkmkajngb = $var;

        return $this;
    }

}

