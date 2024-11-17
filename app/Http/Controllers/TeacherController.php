<?php

namespace App\Http\Controllers;

use App\Helpers\ImageHandler;
use App\Http\Requests\CreateTeacherRequest;
use App\Http\Requests\UpdateTeacherRequest;
use App\Repositories\TeacherRepository;
use Illuminate\Http\JsonResponse;
use Illuminate\Support\Str;

class TeacherController extends Controller
{
    protected $teacherRepository;

    public function __construct(TeacherRepository $teacherRepository)
    {
        $this->teacherRepository = $teacherRepository;
    }

    // Method to create a new teacher
    public function store(CreateTeacherRequest $request): JsonResponse
    {
        $data = $request->validated();

        // Handle image upload
        if ($request->hasFile('image')) {
            $data['image'] = ImageHandler::uploadImage($request->file('image'), 'teachers');
        }

        $teacher = $this->teacherRepository->create($data);
        return response()->json(['teacher' => $teacher], 201);
    }

    // Method to update an existing teacher

    /**
     * @throws \Exception
     */
    public function update(UpdateTeacherRequest $request, int $id): JsonResponse
    {
        $data = $request->validated();

        // Handle image upload
        if ($request->hasFile('image')) {
            $data['image'] = ImageHandler::uploadImage($request->file('image'), 'teachers');
        }

        $teacher = $this->teacherRepository->update($id, $data);

        if ($teacher) {
            return response()->json(['teacher' => $teacher], 200);
        } else {
            return response()->json(['error' => 'Teacher not found'], 404);
        }
    }
    
    public function index(): JsonResponse
    {
        $teachers = $this->teacherRepository->findAll();
        return response()->json($teachers, 200);
    }

    public function destroy(int $id): JsonResponse
    {
        $deleted = $this->teacherRepository->delete($id);
        if ($deleted) {
            return response()->json(['message' => 'Teacher deleted successfully'], 200);
        } else {
            return response()->json(['error' => 'Teacher not found'], 404);
        }
    }
}
