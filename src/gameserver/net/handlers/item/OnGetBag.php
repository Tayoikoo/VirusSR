<?php

namespace VirusSR\gameserver\net\handlers\item;

use Google\Protobuf\Internal\Message;
use VirusSR\gameserver\net\cmd_id;
use VirusSR\gameserver\net\PlayerSession;
use React\Socket\ConnectionInterface;

class OnGetBag
{
    public function __construct(private PlayerSession $session) {}

    public function handle(ConnectionInterface $socket, Message $request): void
    {
        $rsp = new \GetBagScRsp();
        
        $rsp->setRetcode(0);

        $this->session->sendPacket($socket, cmd_id::CMD_GET_BAG_SC_RSP, $rsp);
    }
}
