<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# NO CHECKED-IN PROTOBUF GENCODE
# source: StarRail.proto

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>IPBDJPAJODO</code>
 */
class IPBDJPAJODO extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>.DGJGFBLBFPE cgnkhekhiml = 10;</code>
     */
    protected $cgnkhekhiml = null;
    /**
     * Generated from protobuf field <code>uint32 cjbdahmahkn = 3;</code>
     */
    protected $cjbdahmahkn = 0;
    /**
     * Generated from protobuf field <code>repeated .NNPAOMCBANA bkpkcjjkmmj = 7;</code>
     */
    private $bkpkcjjkmmj;
    /**
     * Generated from protobuf field <code>bool dpkmepaahin = 5;</code>
     */
    protected $dpkmepaahin = false;
    /**
     * Generated from protobuf field <code>bool confirm = 14;</code>
     */
    protected $confirm = false;
    /**
     * Generated from protobuf field <code>uint32 arg_id = 2;</code>
     */
    protected $arg_id = 0;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \DGJGFBLBFPE $cgnkhekhiml
     *     @type int $cjbdahmahkn
     *     @type array<\NNPAOMCBANA>|\Google\Protobuf\Internal\RepeatedField $bkpkcjjkmmj
     *     @type bool $dpkmepaahin
     *     @type bool $confirm
     *     @type int $arg_id
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\StarRail::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>.DGJGFBLBFPE cgnkhekhiml = 10;</code>
     * @return \DGJGFBLBFPE|null
     */
    public function getCgnkhekhiml()
    {
        return $this->cgnkhekhiml;
    }

    public function hasCgnkhekhiml()
    {
        return isset($this->cgnkhekhiml);
    }

    public function clearCgnkhekhiml()
    {
        unset($this->cgnkhekhiml);
    }

    /**
     * Generated from protobuf field <code>.DGJGFBLBFPE cgnkhekhiml = 10;</code>
     * @param \DGJGFBLBFPE $var
     * @return $this
     */
    public function setCgnkhekhiml($var)
    {
        GPBUtil::checkMessage($var, \DGJGFBLBFPE::class);
        $this->cgnkhekhiml = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>uint32 cjbdahmahkn = 3;</code>
     * @return int
     */
    public function getCjbdahmahkn()
    {
        return $this->cjbdahmahkn;
    }

    /**
     * Generated from protobuf field <code>uint32 cjbdahmahkn = 3;</code>
     * @param int $var
     * @return $this
     */
    public function setCjbdahmahkn($var)
    {
        GPBUtil::checkUint32($var);
        $this->cjbdahmahkn = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>repeated .NNPAOMCBANA bkpkcjjkmmj = 7;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getBkpkcjjkmmj()
    {
        return $this->bkpkcjjkmmj;
    }

    /**
     * Generated from protobuf field <code>repeated .NNPAOMCBANA bkpkcjjkmmj = 7;</code>
     * @param array<\NNPAOMCBANA>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setBkpkcjjkmmj($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \NNPAOMCBANA::class);
        $this->bkpkcjjkmmj = $arr;

        return $this;
    }

    /**
     * Generated from protobuf field <code>bool dpkmepaahin = 5;</code>
     * @return bool
     */
    public function getDpkmepaahin()
    {
        return $this->dpkmepaahin;
    }

    /**
     * Generated from protobuf field <code>bool dpkmepaahin = 5;</code>
     * @param bool $var
     * @return $this
     */
    public function setDpkmepaahin($var)
    {
        GPBUtil::checkBool($var);
        $this->dpkmepaahin = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>bool confirm = 14;</code>
     * @return bool
     */
    public function getConfirm()
    {
        return $this->confirm;
    }

    /**
     * Generated from protobuf field <code>bool confirm = 14;</code>
     * @param bool $var
     * @return $this
     */
    public function setConfirm($var)
    {
        GPBUtil::checkBool($var);
        $this->confirm = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>uint32 arg_id = 2;</code>
     * @return int
     */
    public function getArgId()
    {
        return $this->arg_id;
    }

    /**
     * Generated from protobuf field <code>uint32 arg_id = 2;</code>
     * @param int $var
     * @return $this
     */
    public function setArgId($var)
    {
        GPBUtil::checkUint32($var);
        $this->arg_id = $var;

        return $this;
    }

}

