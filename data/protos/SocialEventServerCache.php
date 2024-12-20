<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# NO CHECKED-IN PROTOBUF GENCODE
# source: StarRail.proto

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>SocialEventServerCache</code>
 */
class SocialEventServerCache extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>uint32 AddCoin = 11;</code>
     */
    protected $AddCoin = 0;
    /**
     * Generated from protobuf field <code>uint32 Id = 13;</code>
     */
    protected $Id = 0;
    /**
     * Generated from protobuf field <code>uint32 SrcUid = 15;</code>
     */
    protected $SrcUid = 0;
    /**
     * Generated from protobuf field <code>uint32 SubCoin = 7;</code>
     */
    protected $SubCoin = 0;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type int $AddCoin
     *     @type int $Id
     *     @type int $SrcUid
     *     @type int $SubCoin
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\StarRail::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>uint32 AddCoin = 11;</code>
     * @return int
     */
    public function getAddCoin()
    {
        return $this->AddCoin;
    }

    /**
     * Generated from protobuf field <code>uint32 AddCoin = 11;</code>
     * @param int $var
     * @return $this
     */
    public function setAddCoin($var)
    {
        GPBUtil::checkUint32($var);
        $this->AddCoin = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>uint32 Id = 13;</code>
     * @return int
     */
    public function getId()
    {
        return $this->Id;
    }

    /**
     * Generated from protobuf field <code>uint32 Id = 13;</code>
     * @param int $var
     * @return $this
     */
    public function setId($var)
    {
        GPBUtil::checkUint32($var);
        $this->Id = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>uint32 SrcUid = 15;</code>
     * @return int
     */
    public function getSrcUid()
    {
        return $this->SrcUid;
    }

    /**
     * Generated from protobuf field <code>uint32 SrcUid = 15;</code>
     * @param int $var
     * @return $this
     */
    public function setSrcUid($var)
    {
        GPBUtil::checkUint32($var);
        $this->SrcUid = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>uint32 SubCoin = 7;</code>
     * @return int
     */
    public function getSubCoin()
    {
        return $this->SubCoin;
    }

    /**
     * Generated from protobuf field <code>uint32 SubCoin = 7;</code>
     * @param int $var
     * @return $this
     */
    public function setSubCoin($var)
    {
        GPBUtil::checkUint32($var);
        $this->SubCoin = $var;

        return $this;
    }

}

