<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# NO CHECKED-IN PROTOBUF GENCODE
# source: StarRail.proto

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * LMBNNHGEMAG (6031)
 *
 * Generated from protobuf message <code>RogueTournRenameArchiveScRsp</code>
 */
class RogueTournRenameArchiveScRsp extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>uint32 retcode = 13;</code>
     */
    protected $retcode = 0;
    /**
     * Generated from protobuf field <code>uint32 hhlnghknbfe = 3;</code>
     */
    protected $hhlnghknbfe = 0;
    /**
     * Generated from protobuf field <code>string name = 9;</code>
     */
    protected $name = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type int $retcode
     *     @type int $hhlnghknbfe
     *     @type string $name
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\StarRail::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>uint32 retcode = 13;</code>
     * @return int
     */
    public function getRetcode()
    {
        return $this->retcode;
    }

    /**
     * Generated from protobuf field <code>uint32 retcode = 13;</code>
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
     * Generated from protobuf field <code>uint32 hhlnghknbfe = 3;</code>
     * @return int
     */
    public function getHhlnghknbfe()
    {
        return $this->hhlnghknbfe;
    }

    /**
     * Generated from protobuf field <code>uint32 hhlnghknbfe = 3;</code>
     * @param int $var
     * @return $this
     */
    public function setHhlnghknbfe($var)
    {
        GPBUtil::checkUint32($var);
        $this->hhlnghknbfe = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>string name = 9;</code>
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Generated from protobuf field <code>string name = 9;</code>
     * @param string $var
     * @return $this
     */
    public function setName($var)
    {
        GPBUtil::checkString($var, True);
        $this->name = $var;

        return $this;
    }

}
