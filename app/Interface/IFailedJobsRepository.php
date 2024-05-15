<?php

namespace App\Interface;

use App\DTO\FailedJobsDTO;
use Illuminate\Support\Collection;

interface IFailedJobsRepository
{
    public function getFailedJobs(FailedJobsDTO $failedJobsDTO):Collection;
}
