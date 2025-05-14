<div align="center">
  <h1>Quiz-Master</h1>
</div>

## Introduction
This report provides a comprehensive overview of the development and functionality of a quiz-based website. The website is designed to offer an engaging platform for users to take quizzes on various topics, view their scores on a scoreboard, and for administrators to manage quiz content efficiently.

## Features and Functionality

### 1. Public Access
- **View Website and Scoreboard**: The website is accessible to all visitors, allowing them to view the scoreboard, which displays the scores of all quiz takers. This feature promotes transparency and encourages competition among users.

### 2. User Functionality
- **User Registration and Login**: Users can register on the website and log in to access many features.
- **Take Quizzes**: Registered users can participate in various quizzes on different topics. Each quiz consists of multiple-choice questions designed to test the user’s knowledge.
- **Score Updates**: Upon completing a quiz, the user’s score is calculated and automatically updated on the scoreboard. This real-time update ensures that users can immediately see their performance relative to others.

### 3. Administrator Functionality
- **Add Quiz Topics**: Administrators can add new quiz topics to the website, ensuring a diverse range of subjects for users to explore.
- **Add Questions**: Administrators can add questions to existing quiz topics. Each question includes multiple-choice answers, with one correct answer.

## Technical Implementation

### 1. Frontend
- **HTML/CSS/Bootstrap**: The website’s structure and styling are implemented using HTML and CSS. This ensures a responsive and visually appealing design that works across different devices.
- **JavaScript/jQuery**: JavaScript is used to handle dynamic content and user interactions, such as form validation, real-time score marking and updating, and stopwatch of the quizzes.

### 2. Backend
- **PHP**: PHP is used for server-side scripting, handling user authentication, quiz processing, and database interactions. It ensures secure and efficient communication between the frontend and backend.
- **MySQL**: MySQL is used to store user data, quiz questions, and scores. The database is designed to handle large volumes of data and provide quick access to information.

### 3. Database Design
- **Users Table**: Stores user information, including name, username, password, and which quizzes have been taken.
- **Quiz Topic Table**: Stores quiz topics and related data.
- **Quizzes Table**: Stores questions and answers for each quiz, including question text, multiple-choice options, and the correct answer.
- **Scores Table**: Tracks user scores for each quiz, including username and score.

## Conclusion
This website aims to provide an engaging and educational platform for users to test their knowledge on various topics. The combination of user-friendly design, robust backend functionality, and comprehensive administrative tools ensures a seamless experience for both users and administrators. By continuously updating quiz content and maintaining a transparent scoreboard, the website fosters a competitive and interactive learning environment.<br><br>

<div align="center">
  <h2>EER Diagram</h2>
</div><hr><br>

<div align="center">
  <img src="https://github.com/user-attachments/assets/cd82a79e-ce8b-4f0d-a4bf-b84dc80523b1" alt="Description of Image">
</div><br><br>

<div align="center">
  <h2>Schema Diagram</h2>
</div><hr><br>

<div align="center">
  <img src="https://github.com/user-attachments/assets/6821c599-885c-4cfa-bb1e-dd1382e7248c" alt="Description of Image">
</div><br><br>


## Installation Instructions

1. **Download and Extract Files**:
   - Download the required file and extract its contents or clone the git.

2. **Install XAMPP**:
   - Download and install XAMPP.
   - Move the extracted files to the `htdocs` directory within the XAMPP installation folder.

3. **Start XAMPP Services**:
   - Open the XAMPP Control Panel.
   - Start both Apache and MySQL services.

4. **Create Database**:
   - Open your web browser and navigate to `/localhost/phpmyadmin/`.
   - Create a new database named `my_project`.

5. **Create Tables**:
   - In the `my_project` database, create a table named `user_info` with the following columns:
     - `no` (auto-increment)
     - `name`
     - `password`
     - `confirm`
     - `confirm_pass`
     - `quiz_taken`
   - Create another table named `scoreboard` with these columns:
     - `id` (auto-increment)
     - `name`
     - `user_name`
     - `score`
   - Create a third table named `quiz` with the columns:
     - `serial_no` (auto-increment)
     - `name`

6. **Access the Project**:
   - Open a new browser tab and navigate to `/localhost/my_project/home.php` to view the project.

![Screenshot 2024-10-07 000120](https://github.com/user-attachments/assets/0f98ca36-6da1-4f1c-8243-42b565ae8a27)

![Screenshot 2024-10-07 000204](https://github.com/user-attachments/assets/20bbd6c3-1c51-4546-94ef-93266a645094)

![Screenshot 2024-10-07 000806](https://github.com/user-attachments/assets/7d1f20a8-0986-44f0-af1e-db2a58281c59)


## LICENSE

This project is licensed under the terms of the [MIT License](LICENSE). 
