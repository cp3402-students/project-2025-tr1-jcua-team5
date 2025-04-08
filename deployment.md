# Deployment Guide - WordPress Theme

This document describes how to develop, test, and deploy the WordPress theme. It includes version control, testing, and the deployment workflow to ensure smooth updates for the theme.

## Development Workflow

### Setting up a Local Development Environment

1. **Clone the Repository:**
   - `git clone https://github.com/cp3402-students/project-2025-tr1-jcua-team5.git`
2. **Install Docker:**
   - Ensure you have a local installation of Docker.
   - Navigate to the root folder of the project that contains the `compose.yml` file.
   - Run the command `docker compose up`
   - Docker will create a local testing environment for you and make symbolic links of all files
   - Activate the theme via the WordPress admin panel.

### Version Control Workflow

1. **Creating a New Feature Branch:**
   - `git checkout -b feature-branch` to create a new branch for your feature.
2. **Committing Changes:**
   - Use clear and concise commit messages:  
     Example: `git commit -m "Added custom header options"`
3. **Pushing Changes:**
   - `git push origin feature-branch` to push changes to the remote repository.
4. **Use Pull Requests**
   - Ensure that you create a pull request into staging to test changes on the staging server

### Testing

- **Unit Testing:** Use tools like PHPUnit for testing WordPress PHP functions.
- **Browser Testing:** Test the theme's responsiveness and functionality in various browsers (Chrome, Firefox, Safari, Edge).

### Deployment Workflow

- **Staging Environment:**
   1. Create a Pull Request to the `staging` branch.
   2. GitHub Actions will detect the completed pull request and automatically mirror the changes to the staging server.
   3. Test the theme's performance and functionality on staging.

- **Production Deployment:**
   1. After successful staging tests, create a pull request into the `production` branch.
   2. GitHub Actions will detect the changes and automatically merge the changes into the production server.

## Troubleshooting

- If there are deployment issues, review server logs and check for PHP errors or missing GitHub secrets.
