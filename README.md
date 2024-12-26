# Trackuno

**Trackuno** is a complete solution for managing a computer shop. It helps in handling product sales, repairs, inventory management, and generating reports efficiently.

## Features

- **Product Management**: Add, edit, delete, and track products.
- **Sales Management**: Invoice generation and sales tracking.
- **Repair Management**: Track repair jobs and their status.
- **Reports**: Detailed reports with graphs for better insights.
- **User Roles**: Admin and staff role management.

## Installation

1. Clone the repository:
   ```bash
   git clone https://github.com/your-username/trackuno.git
   
2. Navigate to the project directory:
   cd trackuno

3. Install dependencies:
    composer install
   
5. Set up the environment file:
   cp env .env
   
5.Configure the database in .env file:
  database.default.hostname = localhost
  database.default.database = trackuno_db
  database.default.username = root
  database.default.password =
  
6. Run migrations:
   php spark migrate

7.Start the development server:
  php spark serve
  Access the application at: http://localhost:8080
