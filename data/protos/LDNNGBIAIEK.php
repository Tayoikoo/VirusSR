<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# NO CHECKED-IN PROTOBUF GENCODE
# source: StarRail.proto

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>LDNNGBIAIEK</code>
 */
class LDNNGBIAIEK extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>uint32 retcode = 7;</code>
     */
    protected $retcode = 0;
    /**
     * Generated from protobuf field <code>uint32 FEJEDBDGPAF = 1;</code>
     */
    protected $FEJEDBDGPAF = 0;
    /**
     * Generated from protobuf field <code>repeated .POGLCMCGMIK data = 2;</code>
     */
    private $data;
    /**
     * Generated from protobuf field <code>uint32 EGHOACJOIEI = 3;</code>
     */
    protected $EGHOACJOIEI = 0;
    /**
     * Generated from protobuf field <code>repeated uint32 FEIBKNDNJAH = 11;</code>
     */
    private $FEIBKNDNJAH;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type int $retcode
     *     @type int $FEJEDBDGPAF
     *     @type array<\POGLCMCGMIK>|\Google\Protobuf\Internal\RepeatedField $data
     *     @type int $EGHOACJOIEI
     *     @type array<int>|\Google\Protobuf\Internal\RepeatedField $FEIBKNDNJAH
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\StarRail::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>uint32 retcode = 7;</code>
     * @return int
     */
    public function getRetcode()
    {
        return $this->retcode;
    }

    /**
     * Generated from protobuf field <code>uint32 retcode = 7;</code>
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
     * Generated from protobuf field <code>uint32 FEJEDBDGPAF = 1;</code>
     * @return int
     */
    public function getFEJEDBDGPAF()
    {
        return $this->FEJEDBDGPAF;
    }

    /**
     * Generated from protobuf field <code>uint32 FEJEDBDGPAF = 1;</code>
     * @param int $var
     * @return $this
     */
    public function setFEJEDBDGPAF($var)
    {
        GPBUtil::checkUint32($var);
        $this->FEJEDBDGPAF = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>repeated .POGLCMCGMIK data = 2;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getData()
    {
        return $this->data;
    }

    /**
     * Generated from protobuf field <code>repeated .POGLCMCGMIK data = 2;</code>
     * @param array<\POGLCMCGMIK>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setData($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \POGLCMCGMIK::class);
        $this->data = $arr;

        return $this;
    }

    /**
     * Generated from protobuf field <code>uint32 EGHOACJOIEI = 3;</code>
     * @return int
     */
    public function getEGHOACJOIEI()
    {
        return $this->EGHOACJOIEI;
    }

    /**
     * Generated from protobuf field <code>uint32 EGHOACJOIEI = 3;</code>
     * @param int $var
     * @return $this
     */
    public function setEGHOACJOIEI($var)
    {
        GPBUtil::checkUint32($var);
        $this->EGHOACJOIEI = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>repeated uint32 FEIBKNDNJAH = 11;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getFEIBKNDNJAH()
    {
        return $this->FEIBKNDNJAH;
    }

    /**
     * Generated from protobuf field <code>repeated uint32 FEIBKNDNJAH = 11;</code>
     * @param array<int>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setFEIBKNDNJAH($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::UINT32);
        $this->FEIBKNDNJAH = $arr;

        return $this;
    }

}
