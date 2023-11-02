# ONGC Quiz Management App System

## Overview
The ONGC Quiz Management App System is a web application built using React and PHP that serves as a comprehensive solution for managing and conducting quizzes within the ONGC organization. This system is divided into three main folders: "ongc," "login-system," and "cra." The "ongc" folder contains the PHP application for ONGC admin users to manage the quiz database, including creating, updating, and deleting questions. The "login-system" folder houses the PHP application responsible for user authentication and authorization. Once authenticated, users can access the quiz page in the "cra" folder, which is implemented in React. The React app fetches questions from the SQL database managed by ONGC admin and provides a user-friendly interface for answering quiz questions. The system also offers functionality to display quiz results, sorted by quiz attempts, for authorized users, viewable exclusively by admin users. Admin users have the ability to publish results as needed.

## Folder Structure

### 1. ongc
This folder contains the PHP application for ONGC admin users to maintain the quiz database. Key features include:
- Creating and managing quizzes.
- Adding, updating, and deleting questions.
- Starting and ending quizzes.
- Managing quiz data in the SQL database.
- ![WhatsApp Image 2023-11-02 at 23 46 22_6ac7e5c4](https://github.com/kaursimar12/quiz-management-system/assets/109023363/ca13e48a-181f-4b14-96b3-323504d1f2fb)
- ![WhatsApp Image 2023-11-02 at 23 52 51_d160a3d4](https://github.com/kaursimar12/quiz-management-system/assets/109023363/40fe0112-785d-408a-b71c-942e670e4c31)




### 2. login-system
In this folder, you will find the PHP application responsible for user authentication and authorization. Key features include:
- User registration and login.
- Authorization control to ensure only authorized users access the quiz section.
- Secure user authentication and session management.
- ![WhatsApp Image 2023-11-02 at 23 46 25_9563977c](https://github.com/kaursimar12/quiz-management-system/assets/109023363/ddac99ea-3fc7-4962-8819-523dd2cf57af)
- ![WhatsApp Image 2023-11-02 at 23 48 42_c89c5c51](https://github.com/kaursimar12/quiz-management-system/assets/109023363/b191f851-63f8-4da1-82b1-67c366e454ff)



### 3. cra
The "cra" folder houses the React application responsible for the user interface, question verification, and validation. Key features include:
- Displaying quizzes for authorized users.
- Fetching quiz questions from the SQL database managed by the admin.
- User-friendly and responsive quiz interface.
- Verification and validation of user responses.
- Displaying quiz results for authorized users, sorted by quiz attempts.
- ![WhatsApp Image 2023-11-02 at 23 54 18_40ce26f4](https://github.com/kaursimar12/quiz-management-system/assets/109023363/bd23c87c-b43a-4459-a1a9-4ecc9e6df6e4)


## Getting Started

### Prerequisites
Before you can use the ONGC Quiz Management App System, you'll need the following:
- Web server (e.g., Apache) with PHP support.
- MySQL database for storing quiz data.
- Node.js and npm for running the React app.

### Installation

1. *Set Up the Database:*
   - Create a MySQL database and import the provided SQL schema to set up the quiz database.

2. *ongc (PHP App):*
   - Configure the database connection in the PHP files within the "ongc" folder to point to your MySQL database.
   - Deploy the "ongc" folder on your web server.
   - Access the admin site to create quizzes and manage questions.

3. *login-system (PHP App):*
   - Configure the database connection in the PHP files within the "login-system" folder.
   - Deploy the "login-system" folder on your web server.
   - Users can register and log in here, with authorization to access quizzes.

4. *cra (React App):*
   - Navigate to the "cra" folder.
   - Run npm install to install the required dependencies.
   - Configure the React app to communicate with the PHP API endpoints for user authentication and quiz data.
   - Run npm start to start the React app. It will be accessible at a specified URL.

## Usage

1. *Admin Users:*
   - Access the "ongc" folder to create quizzes and manage questions.
   - Start and end quizzes as needed.
   - View and manage quiz results.

2. *Authorized Users:*
   - Register and log in through the "login-system" folder.
   - Access quizzes through the "cra" folder.
   - Attempt quizzes, review results, and check your progress.

3. *Admin Users (Result Publication):*
   - Admin users can publish quiz results when they choose.

## Additional Notes

- Ensure proper security measures are in place to protect sensitive user and quiz data.
- Regularly back up the database to prevent data loss.
- Secure the PHP and React applications from unauthorized access.
- Keep the system up to date with the latest security patches and updates.

Please refer to the documentation within each folder for further details on configuration and usage. If you have any questions or encounter issues, don't hesitate to reach out for assistance.
