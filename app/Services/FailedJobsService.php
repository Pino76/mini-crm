<?php

namespace App\Services;

use App\DTO\FailedJobsDTO;
use App\Interface\IFailedJobsRepository;
use Illuminate\Support\Collection;
use Symfony\Component\Translation\Exception\NotFoundResourceException;

class FailedJobsService
{
    private IFailedJobsRepository $IFailedJobsRepository;

    public function __construct(IFailedJobsRepository $IFailedJobsRepository)
    {
        $this->IFailedJobsRepository = $IFailedJobsRepository;
    }
    public function getFailedJobs(FailedJobsDTO $failedJobsDTO):Collection
    {
        $resFailedJob = $this->IFailedJobsRepository->getFailedJobs($failedJobsDTO);

        if($resFailedJob->isEmpty()){
            throw new NotFoundResourceException('Attenzione: I dati inseriti non hanno restituito nessun valore');
        }
        return $resFailedJob;
    }

}
