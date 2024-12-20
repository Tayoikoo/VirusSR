<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# NO CHECKED-IN PROTOBUF GENCODE
# source: StarRail.proto

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>CHMBNFJJIJN</code>
 */
class CHMBNFJJIJN extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>.SceneInfo nmjmmdadklf = 1;</code>
     */
    protected $nmjmmdadklf = null;
    /**
     * Generated from protobuf field <code>.LineupInfo lineup = 6;</code>
     */
    protected $lineup = null;
    /**
     * Generated from protobuf field <code>uint32 world_level = 9;</code>
     */
    protected $world_level = 0;
    /**
     * Generated from protobuf field <code>uint32 nbljpgfhdfi = 15;</code>
     */
    protected $nbljpgfhdfi = 0;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \SceneInfo $nmjmmdadklf
     *     @type \LineupInfo $lineup
     *     @type int $world_level
     *     @type int $nbljpgfhdfi
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\StarRail::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>.SceneInfo nmjmmdadklf = 1;</code>
     * @return \SceneInfo|null
     */
    public function getNmjmmdadklf()
    {
        return $this->nmjmmdadklf;
    }

    public function hasNmjmmdadklf()
    {
        return isset($this->nmjmmdadklf);
    }

    public function clearNmjmmdadklf()
    {
        unset($this->nmjmmdadklf);
    }

    /**
     * Generated from protobuf field <code>.SceneInfo nmjmmdadklf = 1;</code>
     * @param \SceneInfo $var
     * @return $this
     */
    public function setNmjmmdadklf($var)
    {
        GPBUtil::checkMessage($var, \SceneInfo::class);
        $this->nmjmmdadklf = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>.LineupInfo lineup = 6;</code>
     * @return \LineupInfo|null
     */
    public function getLineup()
    {
        return $this->lineup;
    }

    public function hasLineup()
    {
        return isset($this->lineup);
    }

    public function clearLineup()
    {
        unset($this->lineup);
    }

    /**
     * Generated from protobuf field <code>.LineupInfo lineup = 6;</code>
     * @param \LineupInfo $var
     * @return $this
     */
    public function setLineup($var)
    {
        GPBUtil::checkMessage($var, \LineupInfo::class);
        $this->lineup = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>uint32 world_level = 9;</code>
     * @return int
     */
    public function getWorldLevel()
    {
        return $this->world_level;
    }

    /**
     * Generated from protobuf field <code>uint32 world_level = 9;</code>
     * @param int $var
     * @return $this
     */
    public function setWorldLevel($var)
    {
        GPBUtil::checkUint32($var);
        $this->world_level = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>uint32 nbljpgfhdfi = 15;</code>
     * @return int
     */
    public function getNbljpgfhdfi()
    {
        return $this->nbljpgfhdfi;
    }

    /**
     * Generated from protobuf field <code>uint32 nbljpgfhdfi = 15;</code>
     * @param int $var
     * @return $this
     */
    public function setNbljpgfhdfi($var)
    {
        GPBUtil::checkUint32($var);
        $this->nbljpgfhdfi = $var;

        return $this;
    }

}

