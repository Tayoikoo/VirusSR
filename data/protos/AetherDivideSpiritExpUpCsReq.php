<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# NO CHECKED-IN PROTOBUF GENCODE
# source: StarRail.proto

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * NCFDNDEIMCF (4859)
 *
 * Generated from protobuf message <code>AetherDivideSpiritExpUpCsReq</code>
 */
class AetherDivideSpiritExpUpCsReq extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>uint32 aether_avatar_id = 7;</code>
     */
    protected $aether_avatar_id = 0;
    /**
     * Generated from protobuf field <code>uint32 ipjlcfammdb = 13;</code>
     */
    protected $ipjlcfammdb = 0;
    /**
     * Generated from protobuf field <code>uint32 gfimlbecjlc = 5;</code>
     */
    protected $gfimlbecjlc = 0;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type int $aether_avatar_id
     *     @type int $ipjlcfammdb
     *     @type int $gfimlbecjlc
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\StarRail::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>uint32 aether_avatar_id = 7;</code>
     * @return int
     */
    public function getAetherAvatarId()
    {
        return $this->aether_avatar_id;
    }

    /**
     * Generated from protobuf field <code>uint32 aether_avatar_id = 7;</code>
     * @param int $var
     * @return $this
     */
    public function setAetherAvatarId($var)
    {
        GPBUtil::checkUint32($var);
        $this->aether_avatar_id = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>uint32 ipjlcfammdb = 13;</code>
     * @return int
     */
    public function getIpjlcfammdb()
    {
        return $this->ipjlcfammdb;
    }

    /**
     * Generated from protobuf field <code>uint32 ipjlcfammdb = 13;</code>
     * @param int $var
     * @return $this
     */
    public function setIpjlcfammdb($var)
    {
        GPBUtil::checkUint32($var);
        $this->ipjlcfammdb = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>uint32 gfimlbecjlc = 5;</code>
     * @return int
     */
    public function getGfimlbecjlc()
    {
        return $this->gfimlbecjlc;
    }

    /**
     * Generated from protobuf field <code>uint32 gfimlbecjlc = 5;</code>
     * @param int $var
     * @return $this
     */
    public function setGfimlbecjlc($var)
    {
        GPBUtil::checkUint32($var);
        $this->gfimlbecjlc = $var;

        return $this;
    }

}
