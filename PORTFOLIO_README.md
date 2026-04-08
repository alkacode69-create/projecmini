# Portfolio Website Documentation

## Overview
This is a simple, professional portfolio website that displays your personal information and projects.

## Files Created

### 1. **portfolio.php**
- Main portfolio display page
- Shows your name, age, and gender prominently
- Displays all your projects in a grid layout
- Beautiful gradient header with profile information

### 2. **portfolio_styles.css**
- All styling for the portfolio website
- Responsive design that works on mobile and desktop
- Gradient backgrounds and smooth hover effects
- Modern card-based design for projects

### 3. **portfolio_edit.php**
- Admin page to edit portfolio information
- Update your name, age, and gender
- Form-based interface with validation

## How to Use

### Viewing Your Portfolio
1. Open your terminal/command prompt
2. Navigate to the Desktop folder
3. Start a PHP server:
   ```
   php -S localhost:8000
   ```
4. Open your browser and go to:
   ```
   http://localhost:8000/portfolio.php
   ```

### Editing Your Portfolio
1. Go to:
   ```
   http://localhost:8000/portfolio_edit.php
   ```
2. Update your information and click "Save Changes"

## Features

✅ **Personal Information Display**
- Name
- Age
- Gender

✅ **Projects Section**
- Project title
- Description
- Technologies used

✅ **Responsive Design**
- Works on all devices (mobile, tablet, desktop)
- Smooth animations and hover effects

✅ **Professional Look**
- Modern gradient design
- Clean typography
- Easy to read layout

## Customization

### To Update Portfolio Data
Edit the `$portfolio` array in `portfolio.php`:

```php
$portfolio = [
    'name' => 'Your Name Here',
    'age' => 25,
    'gender' => 'Male',
    'projects' => [
        [
            'title' => 'Project Name',
            'description' => 'Project Description',
            'technologies' => 'Tech Stack'
        ]
    ]
];
```

### To Change Colors
Edit `portfolio_styles.css` and modify the gradient colors:
- Primary gradient: `#667eea` and `#764ba2`

### To Add More Projects
Simply add more entries to the `projects` array in `portfolio.php`.

## Browser Support
- Chrome (Latest)
- Firefox (Latest)
- Safari (Latest)
- Edge (Latest)
- Mobile Browsers

## Notes
- This is a demo version with sample data
- For production use, connect to a database to store data persistently
- Add authentication to the edit page for security
- Consider using a template engine like Twig for better structure

Enjoy your new portfolio website! 🎉
