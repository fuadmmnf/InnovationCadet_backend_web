<?php

namespace App\Http\Controllers;

use App\Helpers\ImageHandler;
use App\Http\Requests\CreateCourseRequest;
use App\Http\Requests\UpdateCourseRequest;
use App\Repositories\CourseRepository;
use Illuminate\Http\JsonResponse;
use Illuminate\Support\Str;

class CourseController extends Controller
{
    protected $courseRepository;

    public function __construct(CourseRepository $courseRepository)
    {
        $this->courseRepository = $courseRepository;
    }

    // Method to create a new course

    /**
     * @throws \Exception
     */
    public function store(CreateCourseRequest $request): JsonResponse
    {
        $data = $request->validated();

        // Handle image upload
        if ($request->hasFile('image')) {
            $data['image'] = ImageHandler::uploadImage($request->file('image'), 'courses');
        }

        $course = $this->courseRepository->create($data);
        return response()->json(['course' => $course], 201);
    }

    // Method to update an existing course

    /**
     * @throws \Exception
     */
    public function update(UpdateCourseRequest $request, int $id): JsonResponse
    {
        $data = $request->validated();

        // Handle image upload
        if ($request->hasFile('image')) {
            $data['image'] = ImageHandler::uploadImage($request->file('image'), 'courses');
        }
        $course = $this->courseRepository->update($id, $data);
        if ($course) {
            return response()->json(['course' => $course], 200);
        } else {
            return response()->json(['error' => 'Course not found'], 404);
        }
    }

    public function index(): JsonResponse
    {
        $courses = $this->courseRepository->findAll();
        return response()->json($courses, 200);
    }

    public function destroy(int $id): JsonResponse
    {
        $deleted = $this->courseRepository->delete($id);

        if ($deleted) {
            return response()->json(['message' => 'Course deleted successfully'], 200);
        } else {
            return response()->json(['message' => 'Course not found'], 404);
        }
    }

}
