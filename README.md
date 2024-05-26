Project Description:
This Laravel-based task management system enables users to efficiently organize their tasks with features like task creation, update, and deletion. Users can add tasks with titles and optional descriptions. Task lists containing important information like title, description, and completion status are shown by the program. Streamlining their task management process, users can remove tasks they no longer need and change task descriptions as needed. The system provides a user-friendly interface with built-in security measures, making work tracking and organization effortless.

Environment Setup:
1. Download and Install XAMPP
2. Download and Install Composer
3. Download and Install VSCode
4. Add php path to environment variable path

Run the application:
1. git clone https://github.com/Shagufta-Sajid/To-do-list.git
2. Open the project in VSCode
3. Open new terminal and write:
    - composer install
    - cp .env.example .env
    - php artisan key:generate
4. Create (database.sqlite) file in the database folder
5. Setup database in env file
         DB_CONNECTION=sqlite
         DB_DATABASE=/absolute/path/to/database.sqlite
6. Write in terminal:
   - php artisan migrate
   - php artisan serve
7. Go to http://127.0.0.1:8000/tasks
