<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# NO CHECKED-IN PROTOBUF GENCODE
# source: StarRail.proto

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * MOKKJMCDMKN (5456)
 *
 * Generated from protobuf message <code>ChessRogueMoveCellNotify</code>
 */
class ChessRogueMoveCellNotify extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>uint32 lfmnhhmdfhg = 11;</code>
     */
    protected $lfmnhhmdfhg = 0;
    /**
     * Generated from protobuf field <code>.CellInfo kglpmnhmnmm = 4;</code>
     */
    protected $kglpmnhmnmm = null;
    /**
     * Generated from protobuf field <code>uint32 ckekjpglfeg = 8;</code>
     */
    protected $ckekjpglfeg = 0;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type int $lfmnhhmdfhg
     *     @type \CellInfo $kglpmnhmnmm
     *     @type int $ckekjpglfeg
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\StarRail::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>uint32 lfmnhhmdfhg = 11;</code>
     * @return int
     */
    public function getLfmnhhmdfhg()
    {
        return $this->lfmnhhmdfhg;
    }

    /**
     * Generated from protobuf field <code>uint32 lfmnhhmdfhg = 11;</code>
     * @param int $var
     * @return $this
     */
    public function setLfmnhhmdfhg($var)
    {
        GPBUtil::checkUint32($var);
        $this->lfmnhhmdfhg = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>.CellInfo kglpmnhmnmm = 4;</code>
     * @return \CellInfo|null
     */
    public function getKglpmnhmnmm()
    {
        return $this->kglpmnhmnmm;
    }

    public function hasKglpmnhmnmm()
    {
        return isset($this->kglpmnhmnmm);
    }

    public function clearKglpmnhmnmm()
    {
        unset($this->kglpmnhmnmm);
    }

    /**
     * Generated from protobuf field <code>.CellInfo kglpmnhmnmm = 4;</code>
     * @param \CellInfo $var
     * @return $this
     */
    public function setKglpmnhmnmm($var)
    {
        GPBUtil::checkMessage($var, \CellInfo::class);
        $this->kglpmnhmnmm = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>uint32 ckekjpglfeg = 8;</code>
     * @return int
     */
    public function getCkekjpglfeg()
    {
        return $this->ckekjpglfeg;
    }

    /**
     * Generated from protobuf field <code>uint32 ckekjpglfeg = 8;</code>
     * @param int $var
     * @return $this
     */
    public function setCkekjpglfeg($var)
    {
        GPBUtil::checkUint32($var);
        $this->ckekjpglfeg = $var;

        return $this;
    }

}
