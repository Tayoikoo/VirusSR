<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# NO CHECKED-IN PROTOBUF GENCODE
# source: StarRail.proto

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * IKNKFLNKHFH (7093)
 *
 * Generated from protobuf message <code>MonopolySelectOptionCsReq</code>
 */
class MonopolySelectOptionCsReq extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>uint32 cjbdahmahkn = 7;</code>
     */
    protected $cjbdahmahkn = 0;
    /**
     * Generated from protobuf field <code>uint32 event_id = 11;</code>
     */
    protected $event_id = 0;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type int $cjbdahmahkn
     *     @type int $event_id
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\StarRail::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>uint32 cjbdahmahkn = 7;</code>
     * @return int
     */
    public function getCjbdahmahkn()
    {
        return $this->cjbdahmahkn;
    }

    /**
     * Generated from protobuf field <code>uint32 cjbdahmahkn = 7;</code>
     * @param int $var
     * @return $this
     */
    public function setCjbdahmahkn($var)
    {
        GPBUtil::checkUint32($var);
        $this->cjbdahmahkn = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>uint32 event_id = 11;</code>
     * @return int
     */
    public function getEventId()
    {
        return $this->event_id;
    }

    /**
     * Generated from protobuf field <code>uint32 event_id = 11;</code>
     * @param int $var
     * @return $this
     */
    public function setEventId($var)
    {
        GPBUtil::checkUint32($var);
        $this->event_id = $var;

        return $this;
    }

}
