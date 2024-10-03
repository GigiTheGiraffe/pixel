<?php

namespace Tests\Unit;

use App\Models\Employer;
use App\Models\Job;
use PHPUnit\Framework\TestCase;
use function PHPUnit\Framework\assertTrue;

class JobTest extends TestCase
{
    /**
     * A basic unit test example.
     */
    public function test_example(): void
    {
        $employer = Employer::factory()->create();
        $job = Job::factory()->create(['employer_id' => $employer->id]);
        assertTrue($job->employer->is($employer));
    }
    public function belongs_to_employer(): void
    {
        $employer = Employer::factory()->create();
        $job = Job::factory()->create(['employer_id' => $employer->id]);
        assertTrue($job->employer->is($employer));
    }
}
