<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# NO CHECKED-IN PROTOBUF GENCODE
# source: StarRail.proto

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * OPJNEMBEBOD (8127)
 *
 * Generated from protobuf message <code>SelectPamSkinCsReq</code>
 */
class SelectPamSkinCsReq extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>uint32 pam_skin = 8;</code>
     */
    protected $pam_skin = 0;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type int $pam_skin
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\StarRail::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>uint32 pam_skin = 8;</code>
     * @return int
     */
    public function getPamSkin()
    {
        return $this->pam_skin;
    }

    /**
     * Generated from protobuf field <code>uint32 pam_skin = 8;</code>
     * @param int $var
     * @return $this
     */
    public function setPamSkin($var)
    {
        GPBUtil::checkUint32($var);
        $this->pam_skin = $var;

        return $this;
    }

}

