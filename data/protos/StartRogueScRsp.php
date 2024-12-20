<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# NO CHECKED-IN PROTOBUF GENCODE
# source: StarRail.proto

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * ONECEBBDFJL (1827)
 *
 * Generated from protobuf message <code>StartRogueScRsp</code>
 */
class StartRogueScRsp extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>.LineupInfo lineup = 8;</code>
     */
    protected $lineup = null;
    /**
     * Generated from protobuf field <code>uint32 retcode = 3;</code>
     */
    protected $retcode = 0;
    /**
     * Generated from protobuf field <code>.RogueInfo rogue_game_info = 2;</code>
     */
    protected $rogue_game_info = null;
    /**
     * Generated from protobuf field <code>.CHAENBOEBOC kdjlefeaiep = 4;</code>
     */
    protected $kdjlefeaiep = null;
    /**
     * Generated from protobuf field <code>.SceneInfo scene = 11;</code>
     */
    protected $scene = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \LineupInfo $lineup
     *     @type int $retcode
     *     @type \RogueInfo $rogue_game_info
     *     @type \CHAENBOEBOC $kdjlefeaiep
     *     @type \SceneInfo $scene
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\StarRail::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>.LineupInfo lineup = 8;</code>
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
     * Generated from protobuf field <code>.LineupInfo lineup = 8;</code>
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
     * Generated from protobuf field <code>.RogueInfo rogue_game_info = 2;</code>
     * @return \RogueInfo|null
     */
    public function getRogueGameInfo()
    {
        return $this->rogue_game_info;
    }

    public function hasRogueGameInfo()
    {
        return isset($this->rogue_game_info);
    }

    public function clearRogueGameInfo()
    {
        unset($this->rogue_game_info);
    }

    /**
     * Generated from protobuf field <code>.RogueInfo rogue_game_info = 2;</code>
     * @param \RogueInfo $var
     * @return $this
     */
    public function setRogueGameInfo($var)
    {
        GPBUtil::checkMessage($var, \RogueInfo::class);
        $this->rogue_game_info = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>.CHAENBOEBOC kdjlefeaiep = 4;</code>
     * @return \CHAENBOEBOC|null
     */
    public function getKdjlefeaiep()
    {
        return $this->kdjlefeaiep;
    }

    public function hasKdjlefeaiep()
    {
        return isset($this->kdjlefeaiep);
    }

    public function clearKdjlefeaiep()
    {
        unset($this->kdjlefeaiep);
    }

    /**
     * Generated from protobuf field <code>.CHAENBOEBOC kdjlefeaiep = 4;</code>
     * @param \CHAENBOEBOC $var
     * @return $this
     */
    public function setKdjlefeaiep($var)
    {
        GPBUtil::checkMessage($var, \CHAENBOEBOC::class);
        $this->kdjlefeaiep = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>.SceneInfo scene = 11;</code>
     * @return \SceneInfo|null
     */
    public function getScene()
    {
        return $this->scene;
    }

    public function hasScene()
    {
        return isset($this->scene);
    }

    public function clearScene()
    {
        unset($this->scene);
    }

    /**
     * Generated from protobuf field <code>.SceneInfo scene = 11;</code>
     * @param \SceneInfo $var
     * @return $this
     */
    public function setScene($var)
    {
        GPBUtil::checkMessage($var, \SceneInfo::class);
        $this->scene = $var;

        return $this;
    }

}
