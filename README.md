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

## 📋 Features

### Implemented Features
- **Responsive Design** - Works on desktop, laptop, mobile, tablet, iPad
- **Property Management** - CRUD operations for properties
- **Photo Management** - Multiple photo upload with preview and reordering
- **Search & Filter** - Location, year, and text search
- **Price Management** - Multiple year pricing support
- **WhatsApp Integration** - Direct contact with property agents


## 🌐 Live Demo

### Frontend (React)
**URL:** https://propmall-28q4eqs04-hazmis-projects-74de0f62.vercel.app

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

## 📊 Database Schema

### Tables
- `property` - Main property information
- `locations` - Property locations
- `property_photos` - Property images
- `property_prices` - Price history by year

