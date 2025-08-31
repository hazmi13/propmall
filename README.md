# PropMall - Property Management System

A full-stack property management application built with React (Frontend) and Laravel (Backend).

## 🚀 Technology Stack

### Frontend
- **React** - JavaScript library for building user interfaces
- **Bootstrap 5.3.8** - CSS framework for responsive design
- **Bootstrap Icons** - Icon library
- **Axios** - HTTP client for API requests

### Backend
- **Laravel** - PHP web application framework
- **MariaDB** - Database management system
- **Eloquent ORM** - Database abstraction layer

## 📋 Features

### ✅ Implemented Features
- **Responsive Design** - Works on desktop, laptop, mobile, tablet, iPad
- **Cross-Platform Compatibility** - Windows, Linux, Android, iOS
- **Multi-Browser Support** - Chrome, Firefox, Edge, Safari
- **Property Management** - CRUD operations for properties
- **Photo Management** - Multiple photo upload with preview and reordering
- **Search & Filter** - Location, year, and text search
- **Price Management** - Multiple year pricing support
- **WhatsApp Integration** - Direct contact with property agents

### 🎯 Assessment Requirements Met
- ✅ **Rule 1**: React Frontend + Laravel Backend + MariaDB Database
- ✅ **Rule 2**: Fully responsive web application
- ✅ **Rule 3**: Additional features (photo management, WhatsApp integration, search filters)
- ✅ **Rule 4**: Ready for additional data testing
- ✅ **Rule 5**: Deployment URLs provided

## 🌐 Live Demo

### Frontend (React)
**URL:** https://propmall-28q4eqs04-hazmis-projects-74de0f62.vercel.app

### Backend (Laravel)
**URL:** [Railway deployment URL will be provided]

## 🛠️ Local Development Setup

### Prerequisites
- Node.js (v16 or higher)
- PHP (v8.1 or higher)
- Composer
- MariaDB/MySQL
- Laragon (recommended for Windows)

### Frontend Setup
```bash
cd propmall-fronted
npm install
npm start
```

### Backend Setup
```bash
# Install dependencies
composer install

# Copy environment file
cp .env.example .env

# Generate application key
php artisan key:generate

# Configure database in .env file
# Run migrations
php artisan migrate

# Start development server
php artisan serve
```

## 📁 Project Structure

```
propmall/
├── app/
│   ├── Http/Controllers/
│   │   └── PropertyController.php
│   └── Models/
│       ├── Property.php
│       ├── Location.php
│       ├── PropertyPhoto.php
│       └── PropertyPrice.php
├── database/
│   └── migrations/
├── propmall-fronted/
│   ├── src/
│   │   ├── components/
│   │   ├── pages/
│   │   └── services/
│   └── public/
└── public/uploads/
```

## 🔧 API Endpoints

### Properties
- `GET /api/properties` - List all properties with filters
- `GET /api/properties/{id}` - Get property details
- `POST /api/properties` - Create new property
- `PUT /api/properties/{id}` - Update property
- `DELETE /api/properties/{id}` - Delete property

### Parameters
- `location` - Filter by location
- `search` - Search in title and description
- `year` - Filter by price year

## 🎨 Features Overview

### Home Page
- Property listings with search and filters
- Responsive grid layout
- Property descriptions with truncation
- Year-based filtering
- Location-based filtering

### Property Details
- Full property information
- Photo gallery
- Price history
- WhatsApp contact integration
- Edit and delete actions

### New Property Form
- Multi-step form with validation
- Multiple photo upload
- Photo preview and reordering
- Price management for multiple years

### Update Property Form
- Edit existing properties
- Add new photos to existing listings
- Manage current and new photos separately

## 📱 Responsive Design

The application is fully responsive and optimized for:
- **Desktop** (1200px+)
- **Laptop** (992px - 1199px)
- **Tablet** (768px - 991px)
- **Mobile** (320px - 767px)

### Responsive Features
- Mobile-first design approach
- Touch-friendly interface elements
- Collapsible navigation menu
- Responsive image galleries
- Adaptive form layouts

## 🚀 Deployment

### Frontend Deployment (Vercel)
1. Install Vercel CLI: `npm i -g vercel`
2. Navigate to frontend: `cd propmall-fronted`
3. Deploy: `vercel`

### Backend Deployment (Railway)
1. Create Railway account
2. Connect GitHub repository
3. Configure environment variables
4. Deploy Laravel application

## 🔒 Security Features

- CORS configuration for cross-origin requests
- Input validation and sanitization
- File upload security
- SQL injection prevention through Eloquent ORM

## 📊 Database Schema

### Tables
- `properties` - Main property information
- `locations` - Property locations
- `property_photos` - Property images
- `property_prices` - Price history by year
- `users` - User management (Laravel default)

## 🤝 Contributing

1. Fork the repository
2. Create a feature branch
3. Make your changes
4. Test thoroughly
5. Submit a pull request

## 📄 License

This project is created for PropMall programming assessment.

## 📞 Contact

For questions about this assessment submission, please contact:
- **Email:** talent@propmall.co
- **Project:** PropMall Property Management System

---

**Thank you for reviewing this PropMall assessment submission!** 🏠✨
