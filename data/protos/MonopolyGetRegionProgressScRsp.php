<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# NO CHECKED-IN PROTOBUF GENCODE
# source: StarRail.proto

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * KLEPCFDGMEJ (7023)
 *
 * Generated from protobuf message <code>MonopolyGetRegionProgressScRsp</code>
 */
class MonopolyGetRegionProgressScRsp extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>uint32 kmlejajfkba = 13;</code>
     */
    protected $kmlejajfkba = 0;
    /**
     * Generated from protobuf field <code>uint32 dhkgjogokdh = 9;</code>
     */
    protected $dhkgjogokdh = 0;
    /**
     * Generated from protobuf field <code>uint32 retcode = 15;</code>
     */
    protected $retcode = 0;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type int $kmlejajfkba
     *     @type int $dhkgjogokdh
     *     @type int $retcode
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\StarRail::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>uint32 kmlejajfkba = 13;</code>
     * @return int
     */
    public function getKmlejajfkba()
    {
        return $this->kmlejajfkba;
    }

    /**
     * Generated from protobuf field <code>uint32 kmlejajfkba = 13;</code>
     * @param int $var
     * @return $this
     */
    public function setKmlejajfkba($var)
    {
        GPBUtil::checkUint32($var);
        $this->kmlejajfkba = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>uint32 dhkgjogokdh = 9;</code>
     * @return int
     */
    public function getDhkgjogokdh()
    {
        return $this->dhkgjogokdh;
    }

    /**
     * Generated from protobuf field <code>uint32 dhkgjogokdh = 9;</code>
     * @param int $var
     * @return $this
     */
    public function setDhkgjogokdh($var)
    {
        GPBUtil::checkUint32($var);
        $this->dhkgjogokdh = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>uint32 retcode = 15;</code>
     * @return int
     */
    public function getRetcode()
    {
        return $this->retcode;
    }

    /**
     * Generated from protobuf field <code>uint32 retcode = 15;</code>
     * @param int $var
     * @return $this
     */
    public function setRetcode($var)
    {
        GPBUtil::checkUint32($var);
        $this->retcode = $var;

        return $this;
    }

}
