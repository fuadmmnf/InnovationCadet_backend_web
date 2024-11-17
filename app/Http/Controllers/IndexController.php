<?php

namespace App\Http\Controllers;

use App\Repositories\CourseRepository;
use App\Repositories\TeacherRepository;
use Illuminate\Http\Request;

class IndexController extends Controller
{
    protected $courseRepository;
    protected $teacherRepository;

    // Constructor to inject the repositories
    public function __construct(CourseRepository $courseRepository, TeacherRepository $teacherRepository)
    {
        $this->courseRepository = $courseRepository;
        $this->teacherRepository = $teacherRepository;
    }

    public function home()
    {

        $courses = $this->courseRepository->findAll();
        $teachers = $this->teacherRepository->findAll();
        return view('index.home', [
            'courses' => $courses,
            'teachers' => $teachers
        ]);
    }

    public function about()
    {
        return view('index.about');
    }

    public function contactUs()
    {
        return view('index.contact');
    }

    public function teachers()
    {
        $teachers = $this->teacherRepository->findAll();
        return view('index.teachers', [
            'teachers' => $teachers
        ]);
    }

    public function courses()
    {
        $courses = $this->courseRepository->findAll();
        return view('index.courses', [
            'courses' => $courses
        ]);
    }

    public function studentRegistration()
    {
        return view('index.student-registration');
    }
}
