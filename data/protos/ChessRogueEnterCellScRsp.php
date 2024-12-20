<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# NO CHECKED-IN PROTOBUF GENCODE
# source: StarRail.proto

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * FOBDLNNJHFN (5556)
 *
 * Generated from protobuf message <code>ChessRogueEnterCellScRsp</code>
 */
class ChessRogueEnterCellScRsp extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>uint32 retcode = 12;</code>
     */
    protected $retcode = 0;
    /**
     * Generated from protobuf field <code>.DIEDGIEDKHM rogue_current_info = 15;</code>
     */
    protected $rogue_current_info = null;
    /**
     * Generated from protobuf field <code>.NOMDNDHHELA lddcaaekfob = 2;</code>
     */
    protected $lddcaaekfob = null;
    /**
     * Generated from protobuf field <code>uint32 cell_id = 11;</code>
     */
    protected $cell_id = 0;
    /**
     * Generated from protobuf field <code>.ChessRogueInfo ext_info = 9;</code>
     */
    protected $ext_info = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type int $retcode
     *     @type \DIEDGIEDKHM $rogue_current_info
     *     @type \NOMDNDHHELA $lddcaaekfob
     *     @type int $cell_id
     *     @type \ChessRogueInfo $ext_info
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\StarRail::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>uint32 retcode = 12;</code>
     * @return int
     */
    public function getRetcode()
    {
        return $this->retcode;
    }

    /**
     * Generated from protobuf field <code>uint32 retcode = 12;</code>
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
     * Generated from protobuf field <code>.DIEDGIEDKHM rogue_current_info = 15;</code>
     * @return \DIEDGIEDKHM|null
     */
    public function getRogueCurrentInfo()
    {
        return $this->rogue_current_info;
    }

    public function hasRogueCurrentInfo()
    {
        return isset($this->rogue_current_info);
    }

    public function clearRogueCurrentInfo()
    {
        unset($this->rogue_current_info);
    }

    /**
     * Generated from protobuf field <code>.DIEDGIEDKHM rogue_current_info = 15;</code>
     * @param \DIEDGIEDKHM $var
     * @return $this
     */
    public function setRogueCurrentInfo($var)
    {
        GPBUtil::checkMessage($var, \DIEDGIEDKHM::class);
        $this->rogue_current_info = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>.NOMDNDHHELA lddcaaekfob = 2;</code>
     * @return \NOMDNDHHELA|null
     */
    public function getLddcaaekfob()
    {
        return $this->lddcaaekfob;
    }

    public function hasLddcaaekfob()
    {
        return isset($this->lddcaaekfob);
    }

    public function clearLddcaaekfob()
    {
        unset($this->lddcaaekfob);
    }

    /**
     * Generated from protobuf field <code>.NOMDNDHHELA lddcaaekfob = 2;</code>
     * @param \NOMDNDHHELA $var
     * @return $this
     */
    public function setLddcaaekfob($var)
    {
        GPBUtil::checkMessage($var, \NOMDNDHHELA::class);
        $this->lddcaaekfob = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>uint32 cell_id = 11;</code>
     * @return int
     */
    public function getCellId()
    {
        return $this->cell_id;
    }

    /**
     * Generated from protobuf field <code>uint32 cell_id = 11;</code>
     * @param int $var
     * @return $this
     */
    public function setCellId($var)
    {
        GPBUtil::checkUint32($var);
        $this->cell_id = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>.ChessRogueInfo ext_info = 9;</code>
     * @return \ChessRogueInfo|null
     */
    public function getExtInfo()
    {
        return $this->ext_info;
    }

    public function hasExtInfo()
    {
        return isset($this->ext_info);
    }

    public function clearExtInfo()
    {
        unset($this->ext_info);
    }

    /**
     * Generated from protobuf field <code>.ChessRogueInfo ext_info = 9;</code>
     * @param \ChessRogueInfo $var
     * @return $this
     */
    public function setExtInfo($var)
    {
        GPBUtil::checkMessage($var, \ChessRogueInfo::class);
        $this->ext_info = $var;

        return $this;
    }

}

