<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# NO CHECKED-IN PROTOBUF GENCODE
# source: StarRail.proto

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * FIIFELEACEL (474)
 *
 * Generated from protobuf message <code>TakeChapterRewardCsReq</code>
 */
class TakeChapterRewardCsReq extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>uint32 ambcbclhihj = 9;</code>
     */
    protected $ambcbclhihj = 0;
    /**
     * Generated from protobuf field <code>uint32 imkigfmnnmd = 6;</code>
     */
    protected $imkigfmnnmd = 0;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type int $ambcbclhihj
     *     @type int $imkigfmnnmd
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\StarRail::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>uint32 ambcbclhihj = 9;</code>
     * @return int
     */
    public function getAmbcbclhihj()
    {
        return $this->ambcbclhihj;
    }

    /**
     * Generated from protobuf field <code>uint32 ambcbclhihj = 9;</code>
     * @param int $var
     * @return $this
     */
    public function setAmbcbclhihj($var)
    {
        GPBUtil::checkUint32($var);
        $this->ambcbclhihj = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>uint32 imkigfmnnmd = 6;</code>
     * @return int
     */
    public function getImkigfmnnmd()
    {
        return $this->imkigfmnnmd;
    }

    /**
     * Generated from protobuf field <code>uint32 imkigfmnnmd = 6;</code>
     * @param int $var
     * @return $this
     */
    public function setImkigfmnnmd($var)
    {
        GPBUtil::checkUint32($var);
        $this->imkigfmnnmd = $var;

        return $this;
    }

}

