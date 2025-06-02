<a name="readme-top"></a>

<br />
<div align="center">
  <img src="./feutechlogo.png" alt="FEUTECH Logo" width="" height="130">
</div>
<div align="center">
  <h3 align="center">AD-Banking Application</h3>
</div>
<div align="center">
  A modern banking portal for account management and transaction tracking
</div>

<br />

![](https://visit-counter.vercel.app/counter.png?page=yourusername/AD-Banking-App)

[![wakatime](https://wakatime.com/badge/user/your-wakatime-id/project/your-project-id.svg)](https://wakatime.com/badge/user/your-wakatime-id/project/your-project-id)

---

<details>
  <summary>Table of Contents</summary>
  <ol>
    <li>
      <a href="#overview">Overview</a>
      <ol>
        <li><a href="#key-components">Key Components</a></li>
        <li><a href="#technology">Technology</a></li>
      </ol>
    </li>
    <li><a href="#features">Features</a></li>
    <li><a href="#rule-practices-and-principles">Rules, Practices and Principles</a></li>
    <li><a href="#resources">Resources</a></li>
  </ol>
</details>

---

## Overview

The Banking Application is a PHP-based web application that simulates core banking operations. It features:

1. An account overview dashboard showing balances and account details  
2. Fund transfer functionality between accounts  
3. Transaction history tracking  
4. Modern UI with animated elements and responsive design

### Key Components

- **Account Management**: View and manage multiple bank accounts  
- **Transaction System**: Track money transfers between accounts  
- **Balance Calculation**: Automatic total balance computation  
- **Notification System**: Transfer confirmation messages  
- **Responsive Design**: Adapts to different screen sizes  

### Technology

#### Language
![HTML](https://img.shields.io/badge/HTML-E34F26?style=for-the-badge&logo=html5&logoColor=white)
![CSS](https://img.shields.io/badge/CSS-1572B6?style=for-the-badge&logo=css3&logoColor=white)
![PHP](https://img.shields.io/badge/PHP-777BB4?style=for-the-badge&logo=php&logoColor=white)

#### Frontend
![Inter Font](https://img.shields.io/badge/Font-Inter-143?style=for-the-badge)
![CSS3 Animations](https://img.shields.io/badge/Animations-CSS3-1572B6?style=for-the-badge&logo=css3&logoColor=white)

#### Design
![Gradient UI](https://img.shields.io/badge/UI-Gradient-4361EE?style=for-the-badge)
![Modern Layout](https://img.shields.io/badge/Layout-Modern-3A0CA3?style=for-the-badge)

---

## Features

1. **Account Dashboard**  
   - View all accounts with current balances  
   - Color-coded account cards  
   - Total balance calculation  

2. **Transaction System**  
   - Simulate transfers between accounts  
   - Transaction confirmation notifications  
   - Balance updates in real-time  

3. **Modern UI Elements**  
   - Animated gradient background  
   - Smooth hover effects and transitions  
   - Responsive card layout  

4. **Navigation**  
   - Seamless switching between accounts and transactions views  

---

## Rules, Practices and Principles

1. Always use `AD-` in the front of the Title of the Project for the Subject followed by your custom naming.  
2. Do not rename `.php` files if they are pages; always use `index.php` as the filename.  
3. Add `.component` to the `.php` files if they are components; e.g., `footer.component.php`.  
4. Add `.util` to the `.php` files if they are utility codes; e.g., `account.util.php`.  
5. Place files in their respective folders.  
6. Naming Conventions:

| Naming Case | Type of Code         | Example                           |
|-------------|----------------------|-----------------------------------|
| Pascal      | Utility              | Account.util.php                  |
| Camel       | Components and Pages | index.php, footer.component.php   |

7. Renaming of folders must be meaningful and reflect their purpose or content.  
8. Use proper labels in GitHub commits: `feat`, `fix`, `refactor`, `docs`.  
9. File Structure:

```
AD-Banking-App
├── assets
│   ├── css
│   │   └── styles.css
│   └── img
│       └── feutechlogo.png
├── page
│   └── index.php
├── .gitignore
├── bootstrap.php
├── composer.json
├── composer.lock
├── index.php
├── readme.md
└── router.php
```


## Resources

| Title             | Purpose                         | Link                                                                 |
|-------------------|----------------------------------|----------------------------------------------------------------------|
| PHP Documentation | Official PHP language reference | [php.net](https://www.php.net/)                                     |
| MDN Web Docs      | Web development resources        | [developer.mozilla.org](https://developer.mozilla.org/)             |
| CSS Tricks        | Modern CSS techniques            | [css-tricks.com](https://css-tricks.com/)                           |
| Inter Font        | Modern sans-serif font family    | [rsms.me/inter](https://rsms.me/inter/)                             |
