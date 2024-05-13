<?php

namespace App\DTO;

use Illuminate\Support\Carbon;

class FailedJobsDTO
{

    /**
     * @var Carbon
     */
    private Carbon $fromDate;
    /**
     * @var Carbon
     */
    private Carbon $toDate;
    /**
     * @var string
     */
    private string $sendMethod;

    /**
     * @param Carbon $fromDate
     * @param Carbon $toDate
     * @param string $sendMethod
     */
    public function __construct(Carbon $fromDate, Carbon $toDate, string $sendMethod)
    {
        $this->fromDate = $fromDate;
        $this->toDate = $toDate;
        $this->sendMethod = $sendMethod;
    }

    /**
     * @return Carbon
     */
    public function getFromDate(): Carbon
    {
        return $this->fromDate;
    }

    /**
     * @param Carbon $fromDate
     * @return void
     */
    public function setFromDate(Carbon $fromDate): void
    {
        $this->fromDate = $fromDate;
    }

    /**
     * @return Carbon
     */
    public function getToDate(): Carbon
    {
        return $this->toDate;
    }

    /**
     * @param Carbon $toDate
     * @return void
     */
    public function setToDate(Carbon $toDate): void
    {
        $this->toDate = $toDate;
    }

    /**
     * @return string
     */
    public function getSendMethod(): string
    {
        return $this->sendMethod;
    }

    /**
     * @param string $sendMethod
     * @return void
     */
    public function setSendMethod(string $sendMethod): void
    {
        $this->sendMethod = $sendMethod;
    }



}
