<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# NO CHECKED-IN PROTOBUF GENCODE
# source: StarRail.proto

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * NEPJHHCNJNG (7461)
 *
 * Generated from protobuf message <code>SwordTrainingStartGameScRsp</code>
 */
class SwordTrainingStartGameScRsp extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>uint32 retcode = 5;</code>
     */
    protected $retcode = 0;
    /**
     * Generated from protobuf field <code>.GIBGFEMMKAA dcfncdeieom = 6;</code>
     */
    protected $dcfncdeieom = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type int $retcode
     *     @type \GIBGFEMMKAA $dcfncdeieom
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\StarRail::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>uint32 retcode = 5;</code>
     * @return int
     */
    public function getRetcode()
    {
        return $this->retcode;
    }

    /**
     * Generated from protobuf field <code>uint32 retcode = 5;</code>
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
     * Generated from protobuf field <code>.GIBGFEMMKAA dcfncdeieom = 6;</code>
     * @return \GIBGFEMMKAA|null
     */
    public function getDcfncdeieom()
    {
        return $this->dcfncdeieom;
    }

    public function hasDcfncdeieom()
    {
        return isset($this->dcfncdeieom);
    }

    public function clearDcfncdeieom()
    {
        unset($this->dcfncdeieom);
    }

    /**
     * Generated from protobuf field <code>.GIBGFEMMKAA dcfncdeieom = 6;</code>
     * @param \GIBGFEMMKAA $var
     * @return $this
     */
    public function setDcfncdeieom($var)
    {
        GPBUtil::checkMessage($var, \GIBGFEMMKAA::class);
        $this->dcfncdeieom = $var;

        return $this;
    }

}

