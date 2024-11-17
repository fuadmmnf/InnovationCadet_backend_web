<?php

namespace App\Repositories;

use App\Models\Teacher;

class TeacherRepository
{
    public function create(array $data): Teacher
    {
        return Teacher::create($data);
    }

    // Method to update an existing teacher by ID
    public function update(int $id, array $data): ?Teacher
    {
        $teacher = Teacher::find($id);

        if ($teacher) {
            $teacher->update($data);
            return $teacher;
        }

        return null;
    }

    // Method to fetch a single teacher by ID
    public function findById(int $id): ?Teacher
    {
        return Teacher::find($id);
    }

    public function findAll()
    {
        return Teacher::all();
    }

    public function delete(int $id): bool
    {
        $teacher = Teacher::find($id);

        if ($teacher) {
            return $teacher->delete();
        }

        return false;
    }
}
