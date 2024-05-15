<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;
use Illuminate\Support\Arr;
use Illuminate\Support\Facades\Log;

class FailedJobsResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        $failedJobs = $this->resource;

        $response = [];
        foreach ($failedJobs as $failedJ) {
            $response = Arr::prepend($response, [
                'id' => $failedJ->id,
                'uuid'  => $failedJ->uuid,
                'failed_at'  => $failedJ->failed_at,
                'jobName'  => $this->validateDisplayName($failedJ->payload),
            ]);
        }
        return $response;
    }

    public function validateDisplayName($jsonData)
    {
        $data = json_decode($jsonData, true);
        $ppp = explode("\\",$data["data"]["commandName"]);
        return collect($ppp)->last();

    }

}
