<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# NO CHECKED-IN PROTOBUF GENCODE
# source: StarRail.proto

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * KCLCKKLMMGC (97)
 *
 * Generated from protobuf message <code>GetSecretKeyInfoCsReq</code>
 */
class GetSecretKeyInfoCsReq extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>bytes gdgackhhebj = 15;</code>
     */
    protected $gdgackhhebj = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $gdgackhhebj
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\StarRail::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>bytes gdgackhhebj = 15;</code>
     * @return string
     */
    public function getGdgackhhebj()
    {
        return $this->gdgackhhebj;
    }

    /**
     * Generated from protobuf field <code>bytes gdgackhhebj = 15;</code>
     * @param string $var
     * @return $this
     */
    public function setGdgackhhebj($var)
    {
        GPBUtil::checkString($var, False);
        $this->gdgackhhebj = $var;

        return $this;
    }

}
