<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# NO CHECKED-IN PROTOBUF GENCODE
# source: StarRail.proto

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * KJCODCNOGFO (6920)
 *
 * Generated from protobuf message <code>GetRollShopInfoCsReq</code>
 */
class GetRollShopInfoCsReq extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>uint32 bgnkmlpohgh = 10;</code>
     */
    protected $bgnkmlpohgh = 0;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type int $bgnkmlpohgh
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\StarRail::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>uint32 bgnkmlpohgh = 10;</code>
     * @return int
     */
    public function getBgnkmlpohgh()
    {
        return $this->bgnkmlpohgh;
    }

    /**
     * Generated from protobuf field <code>uint32 bgnkmlpohgh = 10;</code>
     * @param int $var
     * @return $this
     */
    public function setBgnkmlpohgh($var)
    {
        GPBUtil::checkUint32($var);
        $this->bgnkmlpohgh = $var;

        return $this;
    }

}

