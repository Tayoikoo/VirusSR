<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# NO CHECKED-IN PROTOBUF GENCODE
# source: StarRail.proto

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * PBMMHBPPGFJ (2937)
 *
 * Generated from protobuf message <code>GetPlatformPlayerInfoCsReq</code>
 */
class GetPlatformPlayerInfoCsReq extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>.PlatformType platform = 5;</code>
     */
    protected $platform = 0;
    /**
     * Generated from protobuf field <code>repeated string ndbcddkknfc = 7;</code>
     */
    private $ndbcddkknfc;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type int $platform
     *     @type array<string>|\Google\Protobuf\Internal\RepeatedField $ndbcddkknfc
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\StarRail::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>.PlatformType platform = 5;</code>
     * @return int
     */
    public function getPlatform()
    {
        return $this->platform;
    }

    /**
     * Generated from protobuf field <code>.PlatformType platform = 5;</code>
     * @param int $var
     * @return $this
     */
    public function setPlatform($var)
    {
        GPBUtil::checkEnum($var, \PlatformType::class);
        $this->platform = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>repeated string ndbcddkknfc = 7;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getNdbcddkknfc()
    {
        return $this->ndbcddkknfc;
    }

    /**
     * Generated from protobuf field <code>repeated string ndbcddkknfc = 7;</code>
     * @param array<string>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setNdbcddkknfc($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::STRING);
        $this->ndbcddkknfc = $arr;

        return $this;
    }

}
