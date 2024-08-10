<?
if ($role == 'hod') {
    header('Location: hod_dashboard.html');
} elseif ($role == 'teacher') {
    header('Location: teacher_dashboard.html');
} elseif ($role == 'student') {
    header('Location: student_dashboard.html');
}
>