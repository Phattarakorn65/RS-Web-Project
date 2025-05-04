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

## ตัวอย่างหน้าเว็ป

##หน้าแรก

![screenshot](https://github.com/Phattarakorn65/RS-Web-Project/blob/main/%E0%B8%AB%E0%B8%99%E0%B9%89%E0%B8%B2%E0%B9%81%E0%B8%A3%E0%B8%81.jpg)

##หน้าแนะนำร้านร้านอาหาร

![screenshot](https://github.com/Phattarakorn65/RS-Web-Project/blob/main/%E0%B8%A3%E0%B9%89%E0%B8%B2%E0%B8%99%E0%B9%81%E0%B8%99%E0%B8%B0%E0%B8%99%E0%B8%B3.jpg)

##หน้าแนะนำร้านอาหารไทย

![screenshot](https://github.com/Phattarakorn65/RS-Web-Project/blob/main/%E0%B8%A3%E0%B9%89%E0%B8%B2%E0%B8%99%E0%B8%AD%E0%B8%B2%E0%B8%AB%E0%B8%B2%E0%B8%A3%E0%B9%84%E0%B8%97%E0%B8%A2.jpg)

##หน้าแนะนำร้านอาหารเพื่อสุขภาพ

![screenshot](https://github.com/Phattarakorn65/RS-Web-Project/blob/main/%E0%B8%A3%E0%B9%89%E0%B8%B2%E0%B8%99%E0%B8%AD%E0%B8%B2%E0%B8%AB%E0%B8%B2%E0%B8%A3%E0%B9%80%E0%B8%9E%E0%B8%B7%E0%B9%88%E0%B8%AD%E0%B8%AA%E0%B8%B8%E0%B8%82%E0%B8%A0%E0%B8%B2%E0%B8%9E.jpg)

##หน้าแนะนำร้านอาหารFASTFOOD

![screenshot](https://github.com/Phattarakorn65/RS-Web-Project/blob/main/%E0%B8%A3%E0%B9%89%E0%B8%B2%E0%B8%99fastfood.jpg)

##หน้าผู้ใช้ส่งข้อมูลหาเว็ปไซต์

![screenshot](https://github.com/Phattarakorn65/RS-Web-Project/blob/main/%E0%B8%AB%E0%B8%99%E0%B9%89%E0%B8%B2%E0%B8%AA%E0%B9%88%E0%B8%87%E0%B8%82%E0%B9%89%E0%B8%AD%E0%B8%A1%E0%B8%B9%E0%B8%A5%E0%B8%AB%E0%B8%B2%E0%B8%A3%E0%B9%89%E0%B8%B2%E0%B8%99.jpg)

##หน้าLogin เข้าหน้า ADMIN

![screenshot](https://github.com/Phattarakorn65/RS-Web-Project/blob/main/admin.jpg)

##หน้าDATABASE

![screenshot](https://github.com/Phattarakorn65/RS-Web-Project/blob/main/database%201.jpg)

##หน้าเกี่ยวกับร้านที่ผู้ใช้เลือกดู

![screenshot](https://github.com/Phattarakorn65/RS-Web-Project/blob/main/%E0%B8%AB%E0%B8%99%E0%B9%89%E0%B8%B2%E0%B9%80%E0%B8%81%E0%B8%B5%E0%B9%88%E0%B8%A2%E0%B8%A7%E0%B8%81%E0%B8%B1%E0%B8%9A%E0%B8%A3%E0%B9%89%E0%B8%B2%E0%B8%99.jpg)



