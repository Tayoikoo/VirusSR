<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# NO CHECKED-IN PROTOBUF GENCODE
# source: StarRail.proto

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>BOAHPGONJDG</code>
 */
class BOAHPGONJDG extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>repeated uint32 base_avatar_id_list = 5;</code>
     */
    private $base_avatar_id_list;
    /**
     * Generated from protobuf field <code>uint32 retcode = 4;</code>
     */
    protected $retcode = 0;
    /**
     * Generated from protobuf field <code>repeated uint32 BAJFEJJEFFN = 1;</code>
     */
    private $BAJFEJJEFFN;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type array<int>|\Google\Protobuf\Internal\RepeatedField $base_avatar_id_list
     *     @type int $retcode
     *     @type array<int>|\Google\Protobuf\Internal\RepeatedField $BAJFEJJEFFN
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\StarRail::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>repeated uint32 base_avatar_id_list = 5;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getBaseAvatarIdList()
    {
        return $this->base_avatar_id_list;
    }

    /**
     * Generated from protobuf field <code>repeated uint32 base_avatar_id_list = 5;</code>
     * @param array<int>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setBaseAvatarIdList($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::UINT32);
        $this->base_avatar_id_list = $arr;

        return $this;
    }

    /**
     * Generated from protobuf field <code>uint32 retcode = 4;</code>
     * @return int
     */
    public function getRetcode()
    {
        return $this->retcode;
    }

    /**
     * Generated from protobuf field <code>uint32 retcode = 4;</code>
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
     * Generated from protobuf field <code>repeated uint32 BAJFEJJEFFN = 1;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getBAJFEJJEFFN()
    {
        return $this->BAJFEJJEFFN;
    }

    /**
     * Generated from protobuf field <code>repeated uint32 BAJFEJJEFFN = 1;</code>
     * @param array<int>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setBAJFEJJEFFN($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::UINT32);
        $this->BAJFEJJEFFN = $arr;

        return $this;
    }

}
