<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# NO CHECKED-IN PROTOBUF GENCODE
# source: StarRail.proto

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>IIEAMMDONMN</code>
 */
class IIEAMMDONMN extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>.MultiPathAvatarType HMMMHFKOGAE = 12;</code>
     */
    protected $HMMMHFKOGAE = 0;
    /**
     * Generated from protobuf field <code>uint32 base_avatar_id = 5;</code>
     */
    protected $base_avatar_id = 0;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type int $HMMMHFKOGAE
     *     @type int $base_avatar_id
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\StarRail::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>.MultiPathAvatarType HMMMHFKOGAE = 12;</code>
     * @return int
     */
    public function getHMMMHFKOGAE()
    {
        return $this->HMMMHFKOGAE;
    }

    /**
     * Generated from protobuf field <code>.MultiPathAvatarType HMMMHFKOGAE = 12;</code>
     * @param int $var
     * @return $this
     */
    public function setHMMMHFKOGAE($var)
    {
        GPBUtil::checkEnum($var, \MultiPathAvatarType::class);
        $this->HMMMHFKOGAE = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>uint32 base_avatar_id = 5;</code>
     * @return int
     */
    public function getBaseAvatarId()
    {
        return $this->base_avatar_id;
    }

    /**
     * Generated from protobuf field <code>uint32 base_avatar_id = 5;</code>
     * @param int $var
     * @return $this
     */
    public function setBaseAvatarId($var)
    {
        GPBUtil::checkUint32($var);
        $this->base_avatar_id = $var;

        return $this;
    }

}

