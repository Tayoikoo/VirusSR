<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# NO CHECKED-IN PROTOBUF GENCODE
# source: StarRail.proto

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * FNCAMGHLGOF (6022)
 *
 * Generated from protobuf message <code>RogueTournGetAllArchiveScRsp</code>
 */
class RogueTournGetAllArchiveScRsp extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>uint32 retcode = 9;</code>
     */
    protected $retcode = 0;
    /**
     * Generated from protobuf field <code>repeated .NGEOMHNGDNJ fnnlgllkicd = 7;</code>
     */
    private $fnnlgllkicd;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type int $retcode
     *     @type array<\NGEOMHNGDNJ>|\Google\Protobuf\Internal\RepeatedField $fnnlgllkicd
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\StarRail::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>uint32 retcode = 9;</code>
     * @return int
     */
    public function getRetcode()
    {
        return $this->retcode;
    }

    /**
     * Generated from protobuf field <code>uint32 retcode = 9;</code>
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
     * Generated from protobuf field <code>repeated .NGEOMHNGDNJ fnnlgllkicd = 7;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getFnnlgllkicd()
    {
        return $this->fnnlgllkicd;
    }

    /**
     * Generated from protobuf field <code>repeated .NGEOMHNGDNJ fnnlgllkicd = 7;</code>
     * @param array<\NGEOMHNGDNJ>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setFnnlgllkicd($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \NGEOMHNGDNJ::class);
        $this->fnnlgllkicd = $arr;

        return $this;
    }

}
