<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# NO CHECKED-IN PROTOBUF GENCODE
# source: StarRail.proto

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * AIAIHKEEBMO (4158)
 *
 * Generated from protobuf message <code>DifficultyAdjustmentGetDataScRsp</code>
 */
class DifficultyAdjustmentGetDataScRsp extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>uint32 retcode = 3;</code>
     */
    protected $retcode = 0;
    /**
     * Generated from protobuf field <code>repeated .MDHBKFGIJJL content_package_list = 7;</code>
     */
    private $content_package_list;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type int $retcode
     *     @type array<\MDHBKFGIJJL>|\Google\Protobuf\Internal\RepeatedField $content_package_list
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\StarRail::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>uint32 retcode = 3;</code>
     * @return int
     */
    public function getRetcode()
    {
        return $this->retcode;
    }

    /**
     * Generated from protobuf field <code>uint32 retcode = 3;</code>
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
     * Generated from protobuf field <code>repeated .MDHBKFGIJJL content_package_list = 7;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getContentPackageList()
    {
        return $this->content_package_list;
    }

    /**
     * Generated from protobuf field <code>repeated .MDHBKFGIJJL content_package_list = 7;</code>
     * @param array<\MDHBKFGIJJL>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setContentPackageList($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \MDHBKFGIJJL::class);
        $this->content_package_list = $arr;

        return $this;
    }

}
