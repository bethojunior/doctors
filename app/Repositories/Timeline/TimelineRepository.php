<?php


namespace App\Repositories\Timeline;


use App\Contracts\Repository\AbstractRepository;
use App\Models\Timeline\Timeline;

class TimelineRepository extends AbstractRepository
{
    public function __construct()
    {
        $this->setModel(Timeline::class);
    }

}
