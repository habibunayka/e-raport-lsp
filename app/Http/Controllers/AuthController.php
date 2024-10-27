<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    protected $students = [
        ['NIS' => '12345', 'password' => 'password123'],
        ['NIS' => '67890', 'password' => 'password456'],
    ];

    protected $teachers = [
        ['NIG' => '54321', 'password' => 'password789'],
        ['NIG' => '09876', 'password' => 'password101'],
    ];

    public function __construct()
    {
        foreach ($this->students as &$student) {
            $student['password'] = Hash::make($student['password']);
        }

        foreach ($this->teachers as &$teacher) {
            $teacher['password'] = Hash::make($teacher['password']);
        }
    }

    public function login(Request $request)
    {
        $request->validate([
            'user_type' => 'required|string|in:student,teacher',
        ]);

        if ($request->user_type === 'student') {
            $request->validate([
                'NIS' => 'required|string',
                'student_password' => 'required|string',
            ]);
            return $this->authenticateStudent($request);
        } else {
            $request->validate([
                'NIG' => 'required|string',
                'teacher_password' => 'required|string',
            ]);
            return $this->authenticateTeacher($request);
        }
    }

    private function authenticateStudent(Request $request)
    {
        foreach ($this->students as $student) {
            if ($student['NIS'] === $request->NIS && Hash::check($request->student_password, $student['password'])) {
                session(['user_type' => 'student', 'username' => $student['NIS']]);
                return redirect()->intended('/student');
            }
        }

        return redirect()->back()->withInput()->withErrors([
            'message' => 'NIS atau password siswa salah.'
        ]);
    }

    private function authenticateTeacher(Request $request)
    {
        foreach ($this->teachers as $teacher) {
            if ($teacher['NIG'] === $request->NIG && Hash::check($request->teacher_password, $teacher['password'])) {
                session(['user_type' => 'teacher', 'username' => $teacher['NIG']]);
                return redirect()->intended('/teacher');
            }
        }

        return redirect()->back()->withInput()->withErrors([
            'message' => 'NIG atau password guru salah.'
        ]);
    }



    public function logout(Request $request)
    {
        $request->session()->flush(); 
        return redirect('/login')->with('message', 'Anda telah berhasil logout.');
    }
}
