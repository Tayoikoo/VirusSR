<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# NO CHECKED-IN PROTOBUF GENCODE
# source: StarRail.proto

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * JIGNNAOPKOL (6395)
 *
 * Generated from protobuf message <code>GetHeartDialInfoScRsp</code>
 */
class GetHeartDialInfoScRsp extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>repeated .JHMALOGKGBL jfifoaecdfk = 13;</code>
     */
    private $jfifoaecdfk;
    /**
     * Generated from protobuf field <code>.GNPHJAPOJJM mlfgakmimin = 2;</code>
     */
    protected $mlfgakmimin = 0;
    /**
     * Generated from protobuf field <code>repeated .HHGCOJOMGBN cnidmifkpcc = 1;</code>
     */
    private $cnidmifkpcc;
    /**
     * Generated from protobuf field <code>uint32 retcode = 8;</code>
     */
    protected $retcode = 0;
    /**
     * Generated from protobuf field <code>repeated .ABMIFMMDLMK hpkcjdejlgb = 10;</code>
     */
    private $hpkcjdejlgb;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type array<\JHMALOGKGBL>|\Google\Protobuf\Internal\RepeatedField $jfifoaecdfk
     *     @type int $mlfgakmimin
     *     @type array<\HHGCOJOMGBN>|\Google\Protobuf\Internal\RepeatedField $cnidmifkpcc
     *     @type int $retcode
     *     @type array<\ABMIFMMDLMK>|\Google\Protobuf\Internal\RepeatedField $hpkcjdejlgb
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\StarRail::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>repeated .JHMALOGKGBL jfifoaecdfk = 13;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getJfifoaecdfk()
    {
        return $this->jfifoaecdfk;
    }

    /**
     * Generated from protobuf field <code>repeated .JHMALOGKGBL jfifoaecdfk = 13;</code>
     * @param array<\JHMALOGKGBL>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setJfifoaecdfk($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \JHMALOGKGBL::class);
        $this->jfifoaecdfk = $arr;

        return $this;
    }

    /**
     * Generated from protobuf field <code>.GNPHJAPOJJM mlfgakmimin = 2;</code>
     * @return int
     */
    public function getMlfgakmimin()
    {
        return $this->mlfgakmimin;
    }

    /**
     * Generated from protobuf field <code>.GNPHJAPOJJM mlfgakmimin = 2;</code>
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
     * Generated from protobuf field <code>repeated .HHGCOJOMGBN cnidmifkpcc = 1;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getCnidmifkpcc()
    {
        return $this->cnidmifkpcc;
    }

    /**
     * Generated from protobuf field <code>repeated .HHGCOJOMGBN cnidmifkpcc = 1;</code>
     * @param array<\HHGCOJOMGBN>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setCnidmifkpcc($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \HHGCOJOMGBN::class);
        $this->cnidmifkpcc = $arr;

        return $this;
    }

    /**
     * Generated from protobuf field <code>uint32 retcode = 8;</code>
     * @return int
     */
    public function getRetcode()
    {
        return $this->retcode;
    }

    /**
     * Generated from protobuf field <code>uint32 retcode = 8;</code>
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
     * Generated from protobuf field <code>repeated .ABMIFMMDLMK hpkcjdejlgb = 10;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getHpkcjdejlgb()
    {
        return $this->hpkcjdejlgb;
    }

    /**
     * Generated from protobuf field <code>repeated .ABMIFMMDLMK hpkcjdejlgb = 10;</code>
     * @param array<\ABMIFMMDLMK>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setHpkcjdejlgb($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \ABMIFMMDLMK::class);
        $this->hpkcjdejlgb = $arr;

        return $this;
    }

}

