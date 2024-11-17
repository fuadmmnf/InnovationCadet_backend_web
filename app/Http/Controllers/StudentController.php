<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateStudentRequest;
use App\Http\Requests\UpdateStudentRequest;
use App\Repositories\StudentRepository;
use Illuminate\Http\JsonResponse;

class StudentController extends Controller
{
    protected $studentRepository;

    // Inject StudentRepository into the controller
    public function __construct(StudentRepository $studentRepository)
    {
        $this->studentRepository = $studentRepository;
    }

    /**
     * Create a new student.
     */
    public function store(CreateStudentRequest $request): JsonResponse
    {
        $student = $this->studentRepository->create($request->validated());
        return response()->json(['student' => $student], 201);
    }

    public function update(UpdateStudentRequest $request, int $id): JsonResponse
    {
        $student = $this->studentRepository->update($id, $request->validated());
        if ($student) {
            return response()->json(['student' => $student], 200);
        } else {
            return response()->json(['error' => 'Student not found'], 404);
        }
    }

    public function index(): JsonResponse
    {
        $students = $this->studentRepository->findAll();
        return response()->json(['students' => $students], 200);
    }

    /**
     * Fetch a single student by ID.
     */
    public function show(int $id): JsonResponse
    {
        $student = $this->studentRepository->findById($id);

        if ($student) {
            return response()->json(['student' => $student], 200);
        } else {
            return response()->json(['error' => 'Student not found'], 404);
        }
    }
}
