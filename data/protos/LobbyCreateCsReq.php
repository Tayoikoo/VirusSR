<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# NO CHECKED-IN PROTOBUF GENCODE
# source: StarRail.proto

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * FNOCLGGIIIG (7362)
 *
 * Generated from protobuf message <code>LobbyCreateCsReq</code>
 */
class LobbyCreateCsReq extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>.EMPBNBJLDNI lajonmoiofh = 7;</code>
     */
    protected $lajonmoiofh = null;
    /**
     * Generated from protobuf field <code>.FightGameMode mggmpkighbm = 3;</code>
     */
    protected $mggmpkighbm = 0;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \EMPBNBJLDNI $lajonmoiofh
     *     @type int $mggmpkighbm
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\StarRail::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>.EMPBNBJLDNI lajonmoiofh = 7;</code>
     * @return \EMPBNBJLDNI|null
     */
    public function getLajonmoiofh()
    {
        return $this->lajonmoiofh;
    }

    public function hasLajonmoiofh()
    {
        return isset($this->lajonmoiofh);
    }

    public function clearLajonmoiofh()
    {
        unset($this->lajonmoiofh);
    }

    /**
     * Generated from protobuf field <code>.EMPBNBJLDNI lajonmoiofh = 7;</code>
     * @param \EMPBNBJLDNI $var
     * @return $this
     */
    public function setLajonmoiofh($var)
    {
        GPBUtil::checkMessage($var, \EMPBNBJLDNI::class);
        $this->lajonmoiofh = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>.FightGameMode mggmpkighbm = 3;</code>
     * @return int
     */
    public function getMggmpkighbm()
    {
        return $this->mggmpkighbm;
    }

    /**
     * Generated from protobuf field <code>.FightGameMode mggmpkighbm = 3;</code>
     * @param int $var
     * @return $this
     */
    public function setMggmpkighbm($var)
    {
        GPBUtil::checkEnum($var, \FightGameMode::class);
        $this->mggmpkighbm = $var;

        return $this;
    }

}
