<?php

/**
 * This file is part of project queue-bundle.
 *
 * Author: Jaggle
 * Create: 2018-07-15 18:26:38
 */

namespace Jaggle\QueueBundle\Command;

use Jaggle\QueueBundle\Contracts\QueueContract;
use Jaggle\QueueBundle\RedisQueue;
use Jaggle\QueueBundle\Service\QueueManager;
use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;
use Symfony\Component\Console\Style\SymfonyStyle;

class ListenCommand extends Command
{
    private $queueService;

    public function __construct(QueueManager $queueService)
    {
        $this->queueService = $queueService;
        $this->queueService->queue('default');

        parent::__construct();
    }

    protected function configure()
    {
        $this->setName('queue:listen');
        $this->setDescription('listen all jaggle queues');
    }

    protected function execute(InputInterface $input, OutputInterface $output)
    {
        $out = new SymfonyStyle($input, $output);
        $out->success('everything is ok now!');
    }
}