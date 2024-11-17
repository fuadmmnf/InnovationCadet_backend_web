<?php

namespace App\Repositories;

use App\Models\Student;

class StudentRepository
{
    // Method to create a new student
    public function create(array $data): Student
    {
        return Student::create($data);
    }
    public function update(int $id, array $data): ?Student
    {
        $student = Student::find($id);

        if ($student) {
            $student->update($data);
            return $student;
        }

        return null;
    }

    public function findAll()
    {
        return Student::all();
    }

    public function findById(int $id): ?Student
    {
        return Student::find($id);
    }



}
