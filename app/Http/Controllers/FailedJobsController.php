<?php

namespace App\Http\Controllers;

use App\DTO\FailedJobsDTO;
use App\Http\Requests\FailedJobsRequest;
use App\Http\Resources\FailedJobsResource;
use App\Services\FailedJobsService;
use Illuminate\Support\Carbon;


class FailedJobsController extends Controller
{
    private FailedJobsService $failedJobsService;

    public function __construct(FailedJobsService $failedJobsService)
    {
        $this->failedJobsService = $failedJobsService;
    }

    public function prova()
    {
        return view('prova');
    }

    public function getFailedsJob(FailedJobsRequest $request)
    {
        $fromDate = Carbon::createFromTimestamp($request->input('fromDate'))->startOfDay();
        $toDate = Carbon::createFromTimestamp($request->input('toDate'))->endOfDay();
        $sendMethod = $request->input('sendMethod');

        $failedJobsDTO = new FailedJobsDTO($fromDate, $toDate, $sendMethod);

        $resultFailedJobs = $this->failedJobsService->getFailedJobs($failedJobsDTO);

        return new FailedJobsResource($resultFailedJobs);
    }
}
