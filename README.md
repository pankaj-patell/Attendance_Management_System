# Attendance Management System

A web-based **Attendance Management System** built with **PHP** and **MySQL**, using the **AdminLTE 3** admin dashboard template. It supports three user roles — **Admin**, **Teacher**, and **Student** — each with a dedicated dashboard for managing courses, subjects, students, teachers, and daily attendance records.

## Features

- **Role-based login** (Admin / Teacher / Student) from a single login page
- **Admin dashboard**
  - Manage Courses (add, edit, view, delete)
  - Manage Subjects (add, edit, view, delete)
  - Manage Teachers (add, edit, view, delete)
  - Manage Students (add, edit, view, delete)
  - View attendance records across the system
- **Teacher dashboard**
  - Mark and submit attendance for students, filtered by course and subject
  - View previously recorded attendance
- **Student dashboard**
  - View personal profile
  - View own attendance history
- Session-based authentication with logout support
- Responsive UI powered by the AdminLTE / Bootstrap theme

## Tech Stack

- **Backend:** PHP (procedural, `mysqli`)
- **Database:** MySQL / MariaDB
- **Frontend:** HTML, CSS, JavaScript, jQuery
- **UI Template:** [AdminLTE 3](https://adminlte.io/)

## Project Structure

```
Attendance_Management_System/
├── admin_index.php          # Admin dashboard
├── teacher_index.php        # Teacher dashboard
├── student_index.php        # Student dashboard
├── login.php                # Login page
├── check.php                # Authentication logic
├── logout.php                # Session logout
├── config.php                # Database connection config
├── add_*.php / edit_*.php    # Forms to add/edit records
├── view_*.php                # List/table views
├── *_insert.php / *_update.php / delete_*.php   # CRUD handlers
├── fetch_student.php / fetch_subject.php         # AJAX data endpoints
├── attendance_management_system.sql  # Database schema + sample data
├── dist/, plugins/, build/           # AdminLTE theme assets
├── image/, upload/                   # Images and uploaded screenshots
└── docs/                             # AdminLTE theme documentation
```

## Database Schema

The system uses the `attendance_management_system` database with the following tables:

| Table        | Purpose                                   |
|--------------|--------------------------------------------|
| `login`      | Admin credentials                          |
| `teacher`    | Teacher accounts and details               |
| `student`    | Student accounts and details               |
| `course`     | Course records                             |
| `subject`    | Subjects mapped to courses                 |
| `attendance` | Daily attendance records per student       |

The full schema, along with sample data, is provided in `attendance_management_system.sql`.

## Getting Started

### Prerequisites

- A local server stack with PHP and MySQL, e.g. [XAMPP](https://www.apachefriends.org/), [WAMP](https://www.wampserver.com/), or [MAMP](https://www.mamp.info/)
- A MySQL client such as phpMyAdmin (bundled with XAMPP/WAMP)

### Installation

1. **Clone the repository**
   ```bash
   git clone https://github.com/<your-username>/Attendance_Management_System.git
   ```
2. **Move the project** into your server's web root (e.g. `htdocs` for XAMPP):
   ```bash
   mv Attendance_Management_System /path/to/xampp/htdocs/
   ```
3. **Create the database**
   - Start Apache and MySQL from your server stack's control panel.
   - Open phpMyAdmin and create a new database named `attendance_management_system`.
   - Import `attendance_management_system.sql` into that database.
4. **Configure the database connection**
   - Open `config.php` and update the credentials if needed (defaults to `localhost` / `root` / no password):
     ```php
     $con = mysqli_connect("localhost", "root", "", "attendance_management_system");
     ```
5. **Run the app**
   - Visit `http://localhost/Attendance_Management_System/` in your browser.
   - You'll be redirected to the login page.

### Default Admin Login

| Field    | Value              |
|----------|--------------------|
| Email    | `admin@gmail.com`  |
| Password | `12345`            |
| Role     | `Admin`            |

> ⚠️ These are sample credentials from the seed data. Change them before deploying anywhere beyond local development.

## Usage

1. Log in with the appropriate role (Admin, Teacher, or Student).
2. **Admins** set up courses, subjects, teachers, and students first.
3. **Teachers** select a course and subject, then mark daily attendance for enrolled students.
4. **Students** log in to view their own attendance history and profile.

## Security Notes

This project was built as a learning/demo project and uses plain-text password storage and directly interpolated SQL queries. Before using it in production, consider:

- Hashing passwords (e.g. with `password_hash()` / `password_verify()`)
- Using prepared statements to prevent SQL injection
- Adding CSRF protection and input validation/sanitization
- Moving database credentials out of version control (e.g. environment variables)

## License

This project currently has no license specified. Add a `LICENSE` file if you intend to open-source it under a specific license (e.g. MIT).

## Acknowledgements

- UI built with [AdminLTE 3](https://adminlte.io/)
