<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# NO CHECKED-IN PROTOBUF GENCODE
# source: StarRail.proto

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * BJILMBFHELD (49)
 *
 * Generated from protobuf message <code>SetRedPointStatusScNotify</code>
 */
class SetRedPointStatusScNotify extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>repeated .HOEBNNICGCH fblmnhjgmci = 10;</code>
     */
    private $fblmnhjgmci;
    /**
     * Generated from protobuf field <code>uint32 aaimbolnneb = 6;</code>
     */
    protected $aaimbolnneb = 0;
    /**
     * Generated from protobuf field <code>uint32 uid = 12;</code>
     */
    protected $uid = 0;
    /**
     * Generated from protobuf field <code>uint32 ggdibfjkmli = 15;</code>
     */
    protected $ggdibfjkmli = 0;
    /**
     * Generated from protobuf field <code>uint32 content_id = 4;</code>
     */
    protected $content_id = 0;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type array<\HOEBNNICGCH>|\Google\Protobuf\Internal\RepeatedField $fblmnhjgmci
     *     @type int $aaimbolnneb
     *     @type int $uid
     *     @type int $ggdibfjkmli
     *     @type int $content_id
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\StarRail::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>repeated .HOEBNNICGCH fblmnhjgmci = 10;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getFblmnhjgmci()
    {
        return $this->fblmnhjgmci;
    }

    /**
     * Generated from protobuf field <code>repeated .HOEBNNICGCH fblmnhjgmci = 10;</code>
     * @param array<\HOEBNNICGCH>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setFblmnhjgmci($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \HOEBNNICGCH::class);
        $this->fblmnhjgmci = $arr;

        return $this;
    }

    /**
     * Generated from protobuf field <code>uint32 aaimbolnneb = 6;</code>
     * @return int
     */
    public function getAaimbolnneb()
    {
        return $this->aaimbolnneb;
    }

    /**
     * Generated from protobuf field <code>uint32 aaimbolnneb = 6;</code>
     * @param int $var
     * @return $this
     */
    public function setAaimbolnneb($var)
    {
        GPBUtil::checkUint32($var);
        $this->aaimbolnneb = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>uint32 uid = 12;</code>
     * @return int
     */
    public function getUid()
    {
        return $this->uid;
    }

    /**
     * Generated from protobuf field <code>uint32 uid = 12;</code>
     * @param int $var
     * @return $this
     */
    public function setUid($var)
    {
        GPBUtil::checkUint32($var);
        $this->uid = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>uint32 ggdibfjkmli = 15;</code>
     * @return int
     */
    public function getGgdibfjkmli()
    {
        return $this->ggdibfjkmli;
    }

    /**
     * Generated from protobuf field <code>uint32 ggdibfjkmli = 15;</code>
     * @param int $var
     * @return $this
     */
    public function setGgdibfjkmli($var)
    {
        GPBUtil::checkUint32($var);
        $this->ggdibfjkmli = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>uint32 content_id = 4;</code>
     * @return int
     */
    public function getContentId()
    {
        return $this->content_id;
    }

    /**
     * Generated from protobuf field <code>uint32 content_id = 4;</code>
     * @param int $var
     * @return $this
     */
    public function setContentId($var)
    {
        GPBUtil::checkUint32($var);
        $this->content_id = $var;

        return $this;
    }

}

