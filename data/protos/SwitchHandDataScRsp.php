<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# NO CHECKED-IN PROTOBUF GENCODE
# source: StarRail.proto

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * PKDKHGHOBNE (8115)
 *
 * Generated from protobuf message <code>SwitchHandDataScRsp</code>
 */
class SwitchHandDataScRsp extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>uint32 retcode = 6;</code>
     */
    protected $retcode = 0;
    /**
     * Generated from protobuf field <code>uint32 hngnkicjnah = 3;</code>
     */
    protected $hngnkicjnah = 0;
    /**
     * Generated from protobuf field <code>uint32 ehjedjffafa = 5;</code>
     */
    protected $ehjedjffafa = 0;
    /**
     * Generated from protobuf field <code>repeated .IDCHMMDPNOL jgngcbnomnf = 8;</code>
     */
    private $jgngcbnomnf;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type int $retcode
     *     @type int $hngnkicjnah
     *     @type int $ehjedjffafa
     *     @type array<\IDCHMMDPNOL>|\Google\Protobuf\Internal\RepeatedField $jgngcbnomnf
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\StarRail::initOnce();
        parent::__construct($data);
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
     * Generated from protobuf field <code>uint32 hngnkicjnah = 3;</code>
     * @return int
     */
    public function getHngnkicjnah()
    {
        return $this->hngnkicjnah;
    }

    /**
     * Generated from protobuf field <code>uint32 hngnkicjnah = 3;</code>
     * @param int $var
     * @return $this
     */
    public function setHngnkicjnah($var)
    {
        GPBUtil::checkUint32($var);
        $this->hngnkicjnah = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>uint32 ehjedjffafa = 5;</code>
     * @return int
     */
    public function getEhjedjffafa()
    {
        return $this->ehjedjffafa;
    }

    /**
     * Generated from protobuf field <code>uint32 ehjedjffafa = 5;</code>
     * @param int $var
     * @return $this
     */
    public function setEhjedjffafa($var)
    {
        GPBUtil::checkUint32($var);
        $this->ehjedjffafa = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>repeated .IDCHMMDPNOL jgngcbnomnf = 8;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getJgngcbnomnf()
    {
        return $this->jgngcbnomnf;
    }

    /**
     * Generated from protobuf field <code>repeated .IDCHMMDPNOL jgngcbnomnf = 8;</code>
     * @param array<\IDCHMMDPNOL>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setJgngcbnomnf($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \IDCHMMDPNOL::class);
        $this->jgngcbnomnf = $arr;

        return $this;
    }

}

