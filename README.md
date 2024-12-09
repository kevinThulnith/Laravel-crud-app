# Laravel CRUD Application

This is a simple CRUD (Create, Read, Update, Delete) application built using Laravel Breeze for authentication. The app allows users to manage products by adding, viewing, editing, and deleting them. It also includes email verification for user accounts. To do the peoject from scratch <a href="INSTALL.md"> docs</a> for more info.

## Features

-   User authentication (Login/Logout) with Laravel Breeze.
-   Email verification for registered users.
-   Add new products.
-   View a list of all products.
-   Edit product details.
-   Delete products.
-   Simple and clean UI for managing products.

## Email Verification

-   After registering a new user, a verification email will be sent to the provided email address.
-   The user must click on the verification link in the email to verify their account and access the application.

## Prerequisites

Before running this application, make sure you have the following installed:

-   PHP >= 8.0
-   Composer
-   Laravel CLI
-   MySQL or another supported database | SQLite
-   Node.js and npm (for frontend dependencies)

## Usage

1. Open your browser and navigate to `http://127.0.0.1:8000`.
2. Register a new user or log in with an existing account.
3. Verify your email (if not already verified) using the link sent to your registered email address.
4. Use the product management interface to:
    - Add new products.
    - View a list of existing products.
    - Edit or delete existing products.

## Project Structure

-   **Authentication:** Handled by Laravel Breeze, including email verification.
-   **Models:**
    -   `Product` - Represents a product in the application.
-   **Controllers:**
    -   `ProductController` - Handles CRUD operations for products.
-   **Views:**
    -   Located in `resources/views`.

## Installation

Follow these steps to set up the project locally:

1. Clone the repository:
    ```bash
    git clone https://github.com/KevinThulnith/Laravel-crud-app.git
    cd Laravel-crud-app
    ```
