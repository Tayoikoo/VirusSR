<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# NO CHECKED-IN PROTOBUF GENCODE
# source: StarRail.proto

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * GKJLNLGEAOC (3284)
 *
 * Generated from protobuf message <code>StartPunkLordRaidCsReq</code>
 */
class StartPunkLordRaidCsReq extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>uint32 uid = 15;</code>
     */
    protected $uid = 0;
    /**
     * Generated from protobuf field <code>bool jcjjembfkgb = 4;</code>
     */
    protected $jcjjembfkgb = false;
    /**
     * Generated from protobuf field <code>uint32 monster_id = 9;</code>
     */
    protected $monster_id = 0;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type int $uid
     *     @type bool $jcjjembfkgb
     *     @type int $monster_id
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\StarRail::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>uint32 uid = 15;</code>
     * @return int
     */
    public function getUid()
    {
        return $this->uid;
    }

    /**
     * Generated from protobuf field <code>uint32 uid = 15;</code>
     * @param int $var
     * @return $this
     */
    public function setUid($var)
    {
        GPBUtil::checkUint32($var);
        $this->uid = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>bool jcjjembfkgb = 4;</code>
     * @return bool
     */
    public function getJcjjembfkgb()
    {
        return $this->jcjjembfkgb;
    }

    /**
     * Generated from protobuf field <code>bool jcjjembfkgb = 4;</code>
     * @param bool $var
     * @return $this
     */
    public function setJcjjembfkgb($var)
    {
        GPBUtil::checkBool($var);
        $this->jcjjembfkgb = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>uint32 monster_id = 9;</code>
     * @return int
     */
    public function getMonsterId()
    {
        return $this->monster_id;
    }

    /**
     * Generated from protobuf field <code>uint32 monster_id = 9;</code>
     * @param int $var
     * @return $this
     */
    public function setMonsterId($var)
    {
        GPBUtil::checkUint32($var);
        $this->monster_id = $var;

        return $this;
    }

}
