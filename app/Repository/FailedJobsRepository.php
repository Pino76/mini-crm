<?php

namespace App\Repository;

use App\DTO\FailedJobsDTO;
use App\Interface\IFailedJobsRepository;
use Illuminate\Support\Collection;
use App\Models\FailedJob;

class FailedJobsRepository implements IFailedJobsRepository
{
    public function getFailedJobs(FailedJobsDTO $failedJobsDTO):Collection
    {
        $result = FailedJob::query()
            ->getMethodFailed($failedJobsDTO->getSendMethod())
            ->get();

        return $result;
    }
}
