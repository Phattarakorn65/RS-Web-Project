# Restaurant Recommendation Web App

A Django-based web application for discovering and reviewing restaurants.

## Features

- Browse restaurants by category
- View restaurant details including description and images
- Read and submit reviews for restaurants
- Admin interface for managing restaurant data

## Technology Stack

- **Backend**: Django 5.2
- **Database**: SQLite
- **Frontend**: HTML/CSS with Django Templates
- **Image Processing**: Pillow

## Getting Started

### Prerequisites

- Python 3.8 or higher
- pip (Python package manager)

### Installation





1. Clone the repository
   ```
   git clone https://github.com/Phattarakorn65/RS-Web-Project.git
   cd RS-Web-Project
   ```

2. Create a virtual environment
   ```
   python -m venv venv
   ```

3. Activate the virtual environment
   - Windows: `venv\Scripts\activate`
   - macOS/Linux: `source venv/bin/activate`

4. Install dependencies
   ```
   pip install -r requirements.txt
   ```

5. Apply migrations
   ```
   python manage.py migrate
   ```

6. Create a superuser (for admin access)
   ```
   python manage.py createsuperuser
   ```

7. Run the development server
   ```
   python manage.py runserver
   ```

8. Access the site at http://127.0.0.1:8000/

9. รหัสการเข้า หน้าADMIN
    ```
    user: admin
    password: 1234
    ```
    
## Project Structure

- `restaurants/` - Django app containing models, views, and templates
- `speedy_bites/` - Project settings and configuration
- `static/` - Static files (CSS, JavaScript, images)
- `media/` - User-uploaded content
- `templates/` - HTML templates

## Database Models

- **Restaurant** - Stores restaurant information including name, description, image, and category
- **Review** - Stores user reviews linked to restaurants

## Thai Language Installation Guide

For Thai language installation instructions, please see [LOCAL_SETUP.md](LOCAL_SETUP.md)

## License

MIT

## Author

Phattarakorn65 

## วิดีโอแนะนำเว็ปไซต์ 

[![Watch the video]https://youtu.be/KDQ1o1Nxqc8)

## Infographic โปรเจค website แนะนำร้านอาหาร

