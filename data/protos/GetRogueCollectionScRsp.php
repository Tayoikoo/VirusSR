<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# NO CHECKED-IN PROTOBUF GENCODE
# source: StarRail.proto

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * KCMMIPLMDMK (5691)
 *
 * Generated from protobuf message <code>GetRogueCollectionScRsp</code>
 */
class GetRogueCollectionScRsp extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>repeated .FGODOIDENID jmdnlhmklgc = 4;</code>
     */
    private $jmdnlhmklgc;
    /**
     * Generated from protobuf field <code>uint32 retcode = 6;</code>
     */
    protected $retcode = 0;
    /**
     * Generated from protobuf field <code>repeated .FCPMDCKIGID hipocmcfgdm = 5;</code>
     */
    private $hipocmcfgdm;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type array<\FGODOIDENID>|\Google\Protobuf\Internal\RepeatedField $jmdnlhmklgc
     *     @type int $retcode
     *     @type array<\FCPMDCKIGID>|\Google\Protobuf\Internal\RepeatedField $hipocmcfgdm
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\StarRail::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>repeated .FGODOIDENID jmdnlhmklgc = 4;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getJmdnlhmklgc()
    {
        return $this->jmdnlhmklgc;
    }

    /**
     * Generated from protobuf field <code>repeated .FGODOIDENID jmdnlhmklgc = 4;</code>
     * @param array<\FGODOIDENID>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setJmdnlhmklgc($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \FGODOIDENID::class);
        $this->jmdnlhmklgc = $arr;

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

    /**
     * Generated from protobuf field <code>repeated .FCPMDCKIGID hipocmcfgdm = 5;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getHipocmcfgdm()
    {
        return $this->hipocmcfgdm;
    }

    /**
     * Generated from protobuf field <code>repeated .FCPMDCKIGID hipocmcfgdm = 5;</code>
     * @param array<\FCPMDCKIGID>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setHipocmcfgdm($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \FCPMDCKIGID::class);
        $this->hipocmcfgdm = $arr;

        return $this;
    }

}

