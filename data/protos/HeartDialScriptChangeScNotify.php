<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# NO CHECKED-IN PROTOBUF GENCODE
# source: StarRail.proto

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * OKCEBPMAKDP (6324)
 *
 * Generated from protobuf message <code>HeartDialScriptChangeScNotify</code>
 */
class HeartDialScriptChangeScNotify extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>repeated .HHGCOJOMGBN paldnlfjjnh = 15;</code>
     */
    private $paldnlfjjnh;
    /**
     * Generated from protobuf field <code>.GNPHJAPOJJM mlfgakmimin = 13;</code>
     */
    protected $mlfgakmimin = 0;
    /**
     * Generated from protobuf field <code>repeated .ABMIFMMDLMK hpkcjdejlgb = 11;</code>
     */
    private $hpkcjdejlgb;
    /**
     * Generated from protobuf field <code>repeated .JHMALOGKGBL ghhdieehkdp = 10;</code>
     */
    private $ghhdieehkdp;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type array<\HHGCOJOMGBN>|\Google\Protobuf\Internal\RepeatedField $paldnlfjjnh
     *     @type int $mlfgakmimin
     *     @type array<\ABMIFMMDLMK>|\Google\Protobuf\Internal\RepeatedField $hpkcjdejlgb
     *     @type array<\JHMALOGKGBL>|\Google\Protobuf\Internal\RepeatedField $ghhdieehkdp
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\StarRail::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>repeated .HHGCOJOMGBN paldnlfjjnh = 15;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getPaldnlfjjnh()
    {
        return $this->paldnlfjjnh;
    }

    /**
     * Generated from protobuf field <code>repeated .HHGCOJOMGBN paldnlfjjnh = 15;</code>
     * @param array<\HHGCOJOMGBN>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setPaldnlfjjnh($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \HHGCOJOMGBN::class);
        $this->paldnlfjjnh = $arr;

        return $this;
    }

    /**
     * Generated from protobuf field <code>.GNPHJAPOJJM mlfgakmimin = 13;</code>
     * @return int
     */
    public function getMlfgakmimin()
    {
        return $this->mlfgakmimin;
    }

    /**
     * Generated from protobuf field <code>.GNPHJAPOJJM mlfgakmimin = 13;</code>
     * @param int $var
     * @return $this
     */
    public function setMlfgakmimin($var)
    {
        GPBUtil::checkEnum($var, \GNPHJAPOJJM::class);
        $this->mlfgakmimin = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>repeated .ABMIFMMDLMK hpkcjdejlgb = 11;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getHpkcjdejlgb()
    {
        return $this->hpkcjdejlgb;
    }

    /**
     * Generated from protobuf field <code>repeated .ABMIFMMDLMK hpkcjdejlgb = 11;</code>
     * @param array<\ABMIFMMDLMK>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setHpkcjdejlgb($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \ABMIFMMDLMK::class);
        $this->hpkcjdejlgb = $arr;

        return $this;
    }

    /**
     * Generated from protobuf field <code>repeated .JHMALOGKGBL ghhdieehkdp = 10;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getGhhdieehkdp()
    {
        return $this->ghhdieehkdp;
    }

    /**
     * Generated from protobuf field <code>repeated .JHMALOGKGBL ghhdieehkdp = 10;</code>
     * @param array<\JHMALOGKGBL>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setGhhdieehkdp($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \JHMALOGKGBL::class);
        $this->ghhdieehkdp = $arr;

        return $this;
    }

}

