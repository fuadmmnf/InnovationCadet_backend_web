<?php

namespace App\Repositories;

use App\Models\Course;

class CourseRepository
{

    public function findAll()
    {
        return Course::all();
    }

    public function create(array $data): Course
    {
        return Course::create($data);
    }



    public function update(int $id, array $data): ?Course
    {
        $course = Course::find($id);

        if ($course) {
            $course->update($data);
            return $course;
        }

        return null;
    }

    public function findById(int $id): ?Course
    {
        return Course::find($id);
    }

    public function delete(int $id): bool
    {
        $course = Course::find($id);

        if ($course) {
            return $course->delete();
        }

        return false;
    }
}
