<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# NO CHECKED-IN PROTOBUF GENCODE
# source: StarRail.proto

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * PFKHEKBMPMF (5174)
 *
 * Generated from protobuf message <code>UnlockPhoneThemeScNotify</code>
 */
class UnlockPhoneThemeScNotify extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>uint32 theme_id = 14;</code>
     */
    protected $theme_id = 0;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type int $theme_id
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\StarRail::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>uint32 theme_id = 14;</code>
     * @return int
     */
    public function getThemeId()
    {
        return $this->theme_id;
    }

    /**
     * Generated from protobuf field <code>uint32 theme_id = 14;</code>
     * @param int $var
     * @return $this
     */
    public function setThemeId($var)
    {
        GPBUtil::checkUint32($var);
        $this->theme_id = $var;

        return $this;
    }

}

