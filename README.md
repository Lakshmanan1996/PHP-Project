🎓 Student Timetable Generator – Full DevOps CI/CD Pipeline (Jenkins + Docker + Kubernetes)
--------------
This repository contains a PHP-based Student Timetable Generator application deployed using a complete end-to-end DevOps CI/CD pipeline.

The project is designed to demonstrate real-world DevOps practices for deploying a modern web application, including:

**Automated build & deployments

Docker containerization

SonarQube code-quality scanning

Kubernetes orchestration

Nginx Ingress exposure

Zero-downtime rolling updates

GitHub → Jenkins → Docker → Kubernetes integration
______________________________________________________________________________________________________________________________

#🚀 Key Features
-
🔹 Timetable Application
PHP-based student timetable generator.

Easy UI for generating weekly schedules.

Uses a Nginx + PHP-FPM backend.

🔹 DevOps Implementation
Fully automated CI/CD using Jenkins.

Dockerized application for environment consistency.

Automatic Push to DockerHub upon successful build.

Kubernetes deployment for scaling and management.

Nginx Ingress for robust external access and routing.

SonarQube static code analysis for quality gates.

Rolling updates for zero-downtime deployments.
______________________________________________________________________________________________________________________________

#🧱 Project Architecture
-
The CI/CD pipeline is triggered on code push to GitHub and follows these steps:

Code snippet

graph TD
    
    A[Developer Push to GitHub] --> B(Jenkins Pipeline Triggered);
    
    B --> C(SonarQube Code Scan);
    
    C -->|If Successful| D(Docker Build & Push to DockerHub);
    
    D --> E(Deploy to Kubernetes Cluster);
    
    E --> F(Kubernetes Service);
    
    F --> G(Nginx Ingress);
    
    G --> H[Public Access];
The flow ensures that only high-quality, containerized code is deployed to the Kubernetes cluster (Minikube / AWS EKS).
______________________________________________________________________________________________________________________________
