<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# NO CHECKED-IN PROTOBUF GENCODE
# source: StarRail.proto

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * KKOLNGFJJJH (6384)
 *
 * Generated from protobuf message <code>ChangeScriptEmotionCsReq</code>
 */
class ChangeScriptEmotionCsReq extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>uint32 script_id = 7;</code>
     */
    protected $script_id = 0;
    /**
     * Generated from protobuf field <code>.LICPIMFIDGF dangbnbclkj = 14;</code>
     */
    protected $dangbnbclkj = 0;
    /**
     * Generated from protobuf field <code>uint32 bkidmgpjnak = 5;</code>
     */
    protected $bkidmgpjnak = 0;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type int $script_id
     *     @type int $dangbnbclkj
     *     @type int $bkidmgpjnak
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\StarRail::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>uint32 script_id = 7;</code>
     * @return int
     */
    public function getScriptId()
    {
        return $this->script_id;
    }

    /**
     * Generated from protobuf field <code>uint32 script_id = 7;</code>
     * @param int $var
     * @return $this
     */
    public function setScriptId($var)
    {
        GPBUtil::checkUint32($var);
        $this->script_id = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>.LICPIMFIDGF dangbnbclkj = 14;</code>
     * @return int
     */
    public function getDangbnbclkj()
    {
        return $this->dangbnbclkj;
    }

    /**
     * Generated from protobuf field <code>.LICPIMFIDGF dangbnbclkj = 14;</code>
     * @param int $var
     * @return $this
     */
    public function setDangbnbclkj($var)
    {
        GPBUtil::checkEnum($var, \LICPIMFIDGF::class);
        $this->dangbnbclkj = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>uint32 bkidmgpjnak = 5;</code>
     * @return int
     */
    public function getBkidmgpjnak()
    {
        return $this->bkidmgpjnak;
    }

    /**
     * Generated from protobuf field <code>uint32 bkidmgpjnak = 5;</code>
     * @param int $var
     * @return $this
     */
    public function setBkidmgpjnak($var)
    {
        GPBUtil::checkUint32($var);
        $this->bkidmgpjnak = $var;

        return $this;
    }

}

