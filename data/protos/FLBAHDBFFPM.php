<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# NO CHECKED-IN PROTOBUF GENCODE
# source: StarRail.proto

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>FLBAHDBFFPM</code>
 */
class FLBAHDBFFPM extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>.AvatarType avatar_type = 5;</code>
     */
    protected $avatar_type = 0;
    /**
     * Generated from protobuf field <code>uint32 level = 3;</code>
     */
    protected $level = 0;
    /**
     * Generated from protobuf field <code>uint32 id = 12;</code>
     */
    protected $id = 0;
    /**
     * Generated from protobuf field <code>uint32 BFMEPOPIGOL = 7;</code>
     */
    protected $BFMEPOPIGOL = 0;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type int $avatar_type
     *     @type int $level
     *     @type int $id
     *     @type int $BFMEPOPIGOL
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\StarRail::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>.AvatarType avatar_type = 5;</code>
     * @return int
     */
    public function getAvatarType()
    {
        return $this->avatar_type;
    }

    /**
     * Generated from protobuf field <code>.AvatarType avatar_type = 5;</code>
     * @param int $var
     * @return $this
     */
    public function setAvatarType($var)
    {
        GPBUtil::checkEnum($var, \AvatarType::class);
        $this->avatar_type = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>uint32 level = 3;</code>
     * @return int
     */
    public function getLevel()
    {
        return $this->level;
    }

    /**
     * Generated from protobuf field <code>uint32 level = 3;</code>
     * @param int $var
     * @return $this
     */
    public function setLevel($var)
    {
        GPBUtil::checkUint32($var);
        $this->level = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>uint32 id = 12;</code>
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Generated from protobuf field <code>uint32 id = 12;</code>
     * @param int $var
     * @return $this
     */
    public function setId($var)
    {
        GPBUtil::checkUint32($var);
        $this->id = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>uint32 BFMEPOPIGOL = 7;</code>
     * @return int
     */
    public function getBFMEPOPIGOL()
    {
        return $this->BFMEPOPIGOL;
    }

    /**
     * Generated from protobuf field <code>uint32 BFMEPOPIGOL = 7;</code>
     * @param int $var
     * @return $this
     */
    public function setBFMEPOPIGOL($var)
    {
        GPBUtil::checkUint32($var);
        $this->BFMEPOPIGOL = $var;

        return $this;
    }

}

