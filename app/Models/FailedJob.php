<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Builder;

class FailedJob extends Model
{
    use HasFactory;

    protected $table = 'failed_jobs';

    protected $fillable = [
        'id',
        'uuid',
        'connection',
        'queue',
        'payload',
        'exception',
        'failed_at'
    ];

    /**
     * @param Builder $query
     * @return Builder
     */
    public function scopeGetMethodFailed(Builder $query, $sendMethod): Builder
    {
        return $query->where('payload', 'like', '%'.$sendMethod.'%');
    }

    /**
     * @param Builder $query
     * @param $fromDate
     * @param $toDate
     * @return Builder
     */
    public function scopeGetFailedDate(Builder $query , $fromDate, $toDate):Builder
    {
        return $query->whereBetween('failed_at', [$fromDate, $toDate]);
    }
}
